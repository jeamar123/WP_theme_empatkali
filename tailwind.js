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
    	}
    },
  },
  variants: {
    textColor: ['group-hover'],
    textOpacity: ['group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
  },
  plugins: [],
}
