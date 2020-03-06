let appRoutes = []; // eslint-disable-line
let appSubMenu = []; // eslint-disable-line
let helpMenu = [];

const getAppRouting = () => appRoutes;

const configRequire = require.context('./', true, /\.\/[^/]+\/config\.js$/);
const routesRequire = require.context('./', true, /\.\/[^/]+\/route\.js$/);

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

    routesRequire.keys().forEach((routePath) => {
        const routeAppPath = routePath.split('/')[1];

        // Bail if not belonging to app
        if (appPath !== routeAppPath) return;

        routesRequire(routePath).default.forEach((route) => {
            // Update the name and path with the app namespace prefix
            routes.push({
                ...route,
                name: `${appConfig.ns}__${route.name}`,
                path: `/apps/${appConfig.ns}/${route.path}`,
                meta: {
                    requiresAuth: true, app: true, appName: appConfig.ns
                }
            });

        });
    });

    appRoutes = appRoutes.concat(routes);

    if (navigation.menu) {
        // Make the app features alphabetical for nicencess
        // navigation.children.sort((a, b) => (a.label > b.label) ? 1 : 0);

        appSubMenu.push(navigation);
    }

    //Help Menu data populated..
    if(appConfig.help_menu)
    {
        const helpMenuSection = {
            name: appConfig.title,
            link: `/apps/${appConfig.ns}/`
        }
        helpMenu.push(helpMenuSection)
    }

});

// Make the apps alphabetical for niceness
// appNavigation.sort((a, b) => (a.label > b.label) ? 1 : 0);

export {
    getAppRouting,
    appSubMenu,
    helpMenu
};