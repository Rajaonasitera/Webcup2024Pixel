var options_circle = {
	chart: {
		width: 430,
		height: 430,
		type: 'pie',
	},
	series: [25, 15, 44, 55, 75],
	labels: ['Canada',  'Netherlands', 'Italy', 'France', 'Japan'],
	fill: {
		type: 'gradient',
	},
	theme: {
		monochrome: {
			enabled: true,
			color: '#7943ef',
		}
	},
	title: {
		text: "Repartition en %",
	},
	responsive: [{
		breakpoint: 480,
		options: {
			chart: {
				width: 300,
				height: 300
			},
			legend: {
				position: 'bottom'
			}
		}
	}],
	stroke: {
		width: 0,
	},
}
// var chartCircle = new ApexCharts(
// 	document.querySelector("#cirle_ca_pays"),
// 	options_circle
// );
// chartCircle.render();


