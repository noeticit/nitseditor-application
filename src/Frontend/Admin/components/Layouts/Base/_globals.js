import Vue from 'vue'
import upperFirst from 'lodash/upperFirst'
import camelCase from 'lodash/camelCase'

// https://webpack.js.org/guides/dependency-management/#require-context
const requireComponent = require.context(
    // Look for files in the current directory
    './',
    // Look in subdirectories
    true,
    // Only include "_base-" prefixed .vue files
    /_base-[\w-]+\.vue$/
)

requireComponent.keys().forEach(filename => {
    //Get component config
    const componentConfig = requireComponent(filename)

    //Get PascalCase name of components
    const componentName = upperFirst(
        camelCase(filename
        // Remove the "./_" from the beginning
            .replace(/^\.\/_/, '')
            // Remove the file extension from the end
            .replace(/\.\w+$/, ''))
    )

    //Register component globally
    Vue.component(componentName, componentConfig.default || componentConfig)
})
