var optionsTranche = {
	chart: {
		height: 500,
		type: 'bar',
		stacked: true,
		toolbar: {
      	show: false,
    },
    dropShadow: {
			enabled: true,
			opacity: 0.1,
			blur: 5,
			left: -25,
			top: 25
		},
	},
	colors: ['#7943ef', '#9166ed', '#ae90ee', '#cdbeef'],
	plotOptions: {
		bar: {
			horizontal: true,
			barHeight: '80%',

		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		width: 1,
		colors: ["#fff"]
	},
	series: [{
			name: 'Homme',
			data: [5, 5, 10, 12, 1, 2, 2]
		},
		{
			name: 'Femme',
			data: [-8, -5, -6, -18, -1, -2, -5]
		}
	],
	grid: {
    borderColor: '#e0e6ed',
    strokeDashArray: 5,
    xaxis: {
      lines: {
        show: true
      }
    },   
    yaxis: {
      lines: {
        show: false,
      } 
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 0,
      left: 0
    }, 
  	},
	yaxis: {
		min: -25,
		max: 25,
		title: {
			// text: 'Age',
		},
	},
	tooltip: {
		shared: false,
		x: {
			formatter: function(val) {
				return val
			}
		},
		y: {
			formatter: function(val) {
				return val
			}
		}
	},
	xaxis: {
		categories: ['45+', '40-45', '35-40', '30-35', '25-30', '20-25', '15-20'],
		title: {
			text: 'Percent'
		},
		labels: {
			formatter: function(val) {
				return val
			}
		}
	},
}

// var chartTranche = new ApexCharts(
// 	document.querySelector("#basic-bar-negative-values"),
// 	optionsTranche
// );

// chartTranche.render();