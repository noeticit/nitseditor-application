export default {
    // Is this app active?
    enabled: true,

    // App namespace
    ns: 'documentation',

    // The name of this app
    name: 'Documentation',

    // Alternative title
    title: 'Documentation',

    // Icon to use to identify this app
    icon: null,

    // Menu for section
    help_menu: true,

    // Menu for top bar
    menu: [
        {name: 'Portlets', link:'', icon: '', subMenu: [
                { name: 'Samples', link: 'documentation__portlets', icon:'flaticon-diagram'},

            ]
        },
        {name: 'Widgets', link: ''},
        {name: 'Tables', link: '', icon: '', subMenu: [
                {name: 'Base Tables', link: 'documentation__base-tables', icon: ''},
                {name: 'Table Head States', link: 'documentation__Table-Head-States', icon: ''}
            ]
        },
        {name: 'Tabs', link: '', icon: '', subMenu: [
                {name: 'Bootstrap Tabs', link: 'documentation__Bootstrap-Tabs', icon: ''},
                {name: 'Line Tabs', link: 'documentation__Line-Tabs', icon: ''}
            ]
        },
        {name: 'Forms', link: '', icon: '', subMenu: [
                {name: 'General Form', link: 'documentation__general-forms', icon:''}
            ]
        }
    ]
};
