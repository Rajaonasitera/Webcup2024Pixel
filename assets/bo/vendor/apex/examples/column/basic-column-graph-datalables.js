var options = {
	chart: {
		height: 300,
		type: 'bar',
		dropShadow: {
			enabled: true,
			opacity: 0.1,
			blur: 5,
			left: -10,
			top: 10
		},
	},
	plotOptions: {
		bar: {
			dataLabels: {
				position: 'top', // top, center, bottom
			},
		}
	},
	dataLabels: {
		enabled: true,
		formatter: function (val) {
			return val + " $";
		},
		offsetY: -20,
		style: {
			fontSize: '12px',
			colors: ["#2e323c"]
		}
	},
	series: [{
		name: 'Chiffre d\' affaires',
		data: [400, 360, 480, 400, 450, 350, 800]
	}],
	xaxis: {
		categories: ['Canada', 'Netherlands', 'Italy', 'France', 'Japan', 'USA', 'India']
	},
	fill: {
		gradient: {
			shade: 'light',
			type: "horizontal",
			shadeIntensity: 0.25,
			gradientToColors: undefined,
			inverseColors: true,
			opacityFrom: 1,
			opacityTo: 1,
			stops: [50, 0, 100, 100]
		},
	},
	yaxis: {
		axisBorder: {
			show: true
		},
		axisTicks: {
			show: true,
		},
		labels: {
			show: true,
			formatter: function (val) {
				return val + " $";
			}
		}
	},
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
	colors: ['#7943ef', '#2b86f5', '#63a9ff', '#95c5ff', '#c6e0ff'],
}
// var chart = new ApexCharts(
// 	document.querySelector("#basic-column-graph-datalables"),
// 	options
// );
// chart.render();
