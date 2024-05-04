var optionsUser = {
	chart: {
		height: 500,
		type: 'bar',
		toolbar: {
      show: false,
    },
	},
	plotOptions: {
		bar: {
			horizontal: true,
			barHeight: '40%',
		}
	},
	dataLabels: {
		enabled: false
	},
	series: [{
		name: 'Nombre d\'utilisateurs',
		data: [400, 430, 448, 470, 540, 1200, 1380]
	}],
	xaxis: {
		categories: ['Canada', 'Netherlands', 'Italy', 'France', 'Japan', 'USA', 'India'],
	},
	grid: {
    borderColor: '#7885d8',
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
	theme: {
		monochrome: {
			enabled: true,
			colors: ['#7943ef', '#9166ed', '#ae90ee', '#cdbeef'],
			shadeIntensity: 0.1
		},
	},
}

// var chartUser = new ApexCharts(
// 	document.querySelector("#user_pays"),
// 	optionsUser
// );

// chartUser.render();