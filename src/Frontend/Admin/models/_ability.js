import { AbilityBuilder } from '@casl/ability'

export default AbilityBuilder.define(can => {
    can('read', 'all') // can('page_name', 'view')
})
