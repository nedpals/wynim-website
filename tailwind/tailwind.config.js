const colors = require('tailwindcss/colors');

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		// Include JS files
		'./javascript/**/*.js',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {},
		colors: {
			"primary": {
				50: "#FAE5E5",
				100: "#F4CDCD",
				200: "#E7A3A2",
				300: "#D67776",
				400: "#C4514F",
				500: "#993F3D",
				600: "#822D2B",
				700: "#621E1D",
				800: "#451312",
				900: "#210807",
				950: "#110303"
			},
			"secondary": {
				50: "#FEF7EB",
				100: "#FDECD3",
				200: "#FBDCAC",
				300: "#FAC980",
				400: "#F8B654",
				500: "#F6A429",
				600: "#DC8809",
				700: "#A66707",
				800: "#714505",
				900: "#362102",
				950: "#1D1201"
			},
			"tertiary": {
				50: "#DCE9FE",
				100: "#C2D6FA",
				200: "#87ACEE",
				300: "#5587DD",
				400: "#2F63BB",
				500: "#2B497D",
				600: "#1B386A",
				700: "#112A55",
				800: "#081B3A",
				900: "#030E21",
				950: "#00060F"
			},
			"slate": {
				50: "#E7E9EE",
				100: "#CBD1DC",
				200: "#98A3B9",
				300: "#657595",
				400: "#424C61",
				500: "#20252F",
				600: "#191D24",
				700: "#13151B",
				800: "#0C0E12",
				900: "#060709",
				950: "#040506"
			},
			white: colors.white,
			black: colors.black,
			gray: colors.gray,
			transparent: colors.transparent
		}
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
