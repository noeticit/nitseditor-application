let appRoutes = []; // eslint-disable-line
let pluginAppSubMenu = []; // eslint-disable-line
let appMenu = [];

const getPluginAppRouting = () => appRoutes;

const configRequire = require.context('./../../../../../../../plugins', true, /\.\/[^/]+\/[Frontend]+\/config\.js$/);
const routesRequire = require.context('./../../../../../../../plugins', true, /\.\/[^/]+\/[Frontend]+\/routes\.js$/);


configRequire.keys().forEach((configPath) => {
    const appPath = configPath.split('/')[1];
    const appConfig = configRequire(configPath).default;

    // Bail out if we have turned off for some reason
    if (!appConfig.enabled) return;

    const routes = [];
    const navigation = {
        name: appConfig.ns,
        menu: appConfig.menu
    };

    const appMenuSection = {
        icon: appConfig.icon,
        menu: appConfig.name,
        ns: appConfig.ns,
        link: `/plugins/${appConfig.ns}/`,
        app_menu: appConfig.app_menu
    }

    routesRequire.keys().forEach((routePath) => {
        const routeAppPath = routePath.split('/')[1];

        // Bail if not belonging to app
        if (appPath !== routeAppPath) return;

        routesRequire(routePath).default.forEach((route) => {

            if(route.type === 'page')
            {
                if(route.meta && route.meta.requiresAuth === false)
                    routes.push({
                        ...route,
                        name: `${appConfig.ns}__${route.name}`,
                        path: `/pages/${route.path}`,
                        meta: {
                            requiresAuth: false, app: true
                        }
                    });
                else
                    routes.push({
                        ...route,
                        name: `${appConfig.ns}__${route.name}`,
                        path: `/pages/${route.path}`,
                        meta: {
                            requiresAuth: true, app: true
                        }
                    });
            }
            else
            {
                // Update the name and path with the app namespace prefix
                if(route.meta && route.meta.requiresAuth === false)
                    routes.push({
                        ...route,
                        name: `${appConfig.ns}__${route.name}`,
                        path: `/plugins/${appConfig.ns}/${route.path}`,
                        meta: {
                            requiresAuth: false, app: true
                        }
                    });
                else
                    routes.push({
                        ...route,
                        name: `${appConfig.ns}__${route.name}`,
                        path: `/plugins/${appConfig.ns}/${route.path}`,
                        meta: {
                            requiresAuth: true, app: true
                        }
                    });
            }

        });
    });

    appRoutes = appRoutes.concat(routes);

    //App Sub Menu which will be displayed on top bar when App is active
    if (navigation.menu) {
        // Make the app features alphabetical for niceness
        // navigation.children.sort((a, b) => (a.label > b.label) ? 1 : 0);

        pluginAppSubMenu.push(navigation);
    }

    if(appMenuSection.menu)
        appMenu.push(appMenuSection);

});

// Make the apps alphabetical for niceness
// appNavigation.sort((a, b) => (a.label > b.label) ? 1 : 0);

export {
    getPluginAppRouting,
    pluginAppSubMenu,
    appMenu
};
