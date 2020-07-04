module.exports = {
	purge: [],
	theme: {
		extend: {
			colors : {
				gray : {
					'100' : '#f7fafc',
					'200' : '#edf2f7',
					'300' : '#e2e8f0',
					'400' : '#cbd5e0',
					'500' : '#a0aec0',
					'600' : '#718096',
					'700' : '#2d3748',
					'800' : '#1e2533',
					'900' : '#1a202c'
				}
			}
		},
	},
	variants: {},
	plugins: [
	require('@tailwindcss/ui')
	],
}
