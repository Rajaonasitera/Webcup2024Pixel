    <!-- DASHBOARD 4 BOXES -->

    <div class="row gx-3">
        <div class="col-xxl-3 col-sm-6 col-12">
        <div class="stats-tile">
            <div class="sale-icon shade-blue">
            <i class="bi bi-pie-chart"></i>
            </div>
            <div class="sale-details">
            <h3 class="text-blue"> Ar <?php echo format($ca['ca']) ?></h3>
            <p>Total Chiffre d'affaires</p>
            </div>
        </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
        <div class="stats-tile">
            <div class="sale-icon shade-yellow">
            <i class="bi bi-emoji-smile"></i>
            </div>
            <div class="sale-details">
            <h3 class="text-yellow"> <?php echo $ca['nbr_vente'] ?></h3>
            <p>Nombre de vente</p>
            </div>
            <div class="sale-graph">
            <div id="sparklineLine2"></div>
            </div>
        </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
        <div class="stats-tile">
            <div class="sale-icon shade-red">
            <i class="bi bi-box-seam"></i>
            </div>
            <div class="sale-details">
            <h3 class="text-red"> <?php echo $nbr_users ?></h3>
            <p>Nombre d'utilisateurs</p>
            </div>
        </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
        <div class="stats-tile">
            <div class="sale-icon shade-green">
            <i class="bi bi-handbag"></i>
            </div>
            <div class="sale-details">
            <h3 class="text-green"> <?php echo $meilleur_pack['nom_pack'] ?></h3>
            <p>Meilleur service</p>
            </div>
            <div class="sale-graph">
            <div id="sparklineLine4"></div>
            </div>
        </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- CHIFFRES D'AFFAIRES -->
    <div class="row gx-3">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"> Chiffre d'affaires par Pays </div>
                </div>
                <div class="card-body">
                    <div id="ca_per_pays"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"> Repartition Chiffre d'affaires </div>
                </div>
                <div class="card-body">
                    <div id="cirle_ca_pays"></div>
                </div>
            </div>
            </div>
        </div>
        <!-- Row end -->

    <!-- NOMBRES D'INSCRIT PAR PAYS -->
    
    <div class="row gx-3">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Liste des utilisateurs par pays</div>
                </div>
                <div class="card-body">
                    <div id="user_pays" class="primary-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Liste des utilisateurs par genre par tranche d'age</div>
                </div>
                <div class="card-body">
                    <div id="tranche_user"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var ca_per_pays = <?php echo $ca_par_pays; ?>;
    var pays = [];
    var data = [];
    var user_pays = [];

    ca_per_pays.forEach(function(item) {
        pays.push(item['nom_pays']);
        data.push(parseInt(item['ca_pays']));
        user_pays.push(parseInt(item['nbr_utilisateurs']));
    });
   
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
                return "Ar " + val;
            },
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: ["#2e323c"]
            }
        },
        series: [{
            name: 'Chiffre d\' affaires',
            data: data
        }],
        xaxis: {
            categories: pays
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
                    return "Ar " + val;
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
    var chart = new ApexCharts(
        document.querySelector("#ca_per_pays"),
        options
    );

    chart.render();

    // REPARTITION PAR CIRCLE
    var options_circle = {
        chart: {
            width: 430,
            height: 430,
            type: 'pie',
        },
        series: data,
        labels: pays,
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
    
    var chartCircle = new ApexCharts(
        document.querySelector("#cirle_ca_pays"),
        options_circle
    );
    chartCircle.render();

    // REPARTITION UTILISATEURS PAR PAYS
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
            data: user_pays
        }],
        xaxis: {
            categories: pays,
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

    var chartUser = new ApexCharts(
        document.querySelector("#user_pays"),
        optionsUser
    );

    chartUser.render();

    // REPARTITION UTILISATEURS PAR GENRE ET PAR TRANCHE D'AGE
    var user_par_tranche_temp = <?php echo $users_par_tranche; ?>;
    var hommeData = [];
    var femmeData = [];

    user_par_tranche_temp[0].forEach(function(eachH) {
        hommeData.push(parseInt(eachH));
    });
    user_par_tranche_temp[1].forEach(function(eachF) {
        femmeData.push(parseInt(eachF));
    });
    
    // console.log('Femme is ' + femmeData);
    // console.log('Homme is ' + hommeData);
    
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
                data: hommeData
            },
            {
                name: 'Femme',
                data: femmeData
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

    var chartTranche = new ApexCharts(
        document.querySelector("#tranche_user"),
        optionsTranche
    );

    chartTranche.render();

   
});
</script>


