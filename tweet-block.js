wp.blocks.registerBlockType('saucal/saucal-custom-tweet-block', {
    title: 'Saucal Tweets Block',
    icon: 'smiley',
    category: 'design',
    attributes: {
        url: {type: 'string'},
        postLimit: {type: 'number'}
    },
    edit: function(props) {
      return null;
    },
    save: function(props) {
        return null;
    }
})