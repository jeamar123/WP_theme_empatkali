// PALLETE:    1. #38424b / rgb(56, 66, 75) (Very Dark Grayish Blue / Limed Spruce)
//             2. #98A2AB / rgb(152, 162, 171) (Dark Grayish Blue / Gray Chateau)

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    borderWidth: {
      default: '1px',
      '0': '0',
      '2': '2px',
      '4': '4px',
      '5': '5px',
      '8': '8px',
    },
    extend: {
    	colors: {
    		'c-primary': '#393c94',
    		'c-secondary': '#5b60e8',
        'c-F3F3F3': '#F3F3F3',
        'c-38424b': '#38424b',
        'c-98A2AB': '#98A2AB',
        'c-4D539C': '#4D539C',
        'c-6166A8': '#6166A8',

        // commonly used on sliders, fuuuuuu
        'c-fbe521': '#fbe521',
        'c-3b3969': '#3b3969',
    	}
    },
  },
  variants: {
    textColor: ['group-hover'],
    textOpacity: ['group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    margin: ['responsive', 'hover', 'first', 'last'],
    borderWidth: ['responsive', 'first', 'last'],
  },
  plugins: [],
}
