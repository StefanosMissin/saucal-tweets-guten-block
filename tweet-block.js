wp.blocks.registerBlockType('saucal/saucal-custom-tweet-block', {
  title: 'Saucal Tweets Block',
  icon: 'smiley',
  category: 'design',
  attributes: {
      url: {type: 'string'},
      postLimit: {type: 'number'}
  },
  edit: function(props) {

      function updateURL(event){props.setAttributes({url: event.target.value })}

      function updatePostLimit(event) {
          props.setAttributes({postLimit: Number(event.target.value)})
      }

      return React.createElement(
        "div",
        {
          id: "saucal-tweet-guten-block"
        },
        /*#__PURE__*/ React.createElement("h2", null, " Tweets Loop Block "),
        /*#__PURE__*/ React.createElement(
          "div",
          {
            class: "loop-fields-editor"
          },
          /*#__PURE__*/ React.createElement(
            "div",
            {
              class: "loop-url"
            },
            /*#__PURE__*/ React.createElement("label", null, "Provide Data URL"),
            /*#__PURE__*/ React.createElement("input", {
              type: "url",
              class: "tweet-block-input",
              value: props.attributes.url,
              placeholder: "url to get data from",
              onChange: updateURL
            })
          ),
          /*#__PURE__*/ React.createElement(
            "div",
            {
              class: "loop-post-limit"
            },
            /*#__PURE__*/ React.createElement("label", null, "Provide Posts Number"),
            /*#__PURE__*/ React.createElement("input", {
              type: "number",
              class: "tweet-block-input",
              value: props.attributes.postLimit,
              placeholder: "number of posts to show",
              onChange: updatePostLimit
            })
          )
        )
      );
  },
  save: function(props) {
      return React.createElement(
          "div",
          null,
          /*#__PURE__*/ React.createElement("h2", null, "Tweets Blocks")
        );
        
  }
})