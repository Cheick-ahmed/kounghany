module.exports = {
	purge: [],
	theme: {
		extend: {
			colors : {
                nafa : {
				    dark: '#000021',
                    lighter: '#090756',
                    line: '#3130B0',
                }
			}
		},
	},
	variants: {},
	plugins: [
	require('@tailwindcss/ui')
	],
}
