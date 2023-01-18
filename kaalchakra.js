wp.blocks.registerBlockType( 'kaalchakra/time-calculator', {
    title: wp.i18n.__('KaalChakra - Time Calculator'), 
    description: wp.i18n.__( 'Calculate total time remaining on earth.'),
    category: 'common',
    icon: 'book-alt',
    keywords: [ wp.i18n.__( 'kaalchakra' ), wp.i18n.__( 'time' ), wp.i18n.__( 'age' ) ],
    edit: ( props ) => {
        return wp.element.createElement( 'p', { className: 'kaalchakra-block'}, 'Kaal Chakra' )
    },
    save: ( props ) => {
        return wp.element.createElement( 'p', { className: 'kaalchakra-block'}, 'Kaal Chakra Save' )
    }
});