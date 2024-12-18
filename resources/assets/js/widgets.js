(function () {
    'use strict';

    // Bitcoin Chart
    var options = {
        series: [
            {
                data: [34, 55, 41, 67, 22, 43, 21]
            },
        ],
        chart: {
            sparkline: {
                enabled: true
            },
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 3,
                right: 6,
                blur: 3,
                color: ['#47bbed'],
                opacity: 0.2
            },
            type: 'line',
            height: 20,
            width: 100
        },
        tooltip: {
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        },
        colors: ["#47bbed"],
        stroke: {
            width: [1.5],
            curve: ['smooth'],
        },
        xaxis: {
            crosshairs: {
                show: false,
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                opacityFrom: 0.9,
                opacityTo: 0.9,
                stops: [0, 98],
            }
        },
    };
    var chart2 = new ApexCharts(document.querySelector("#btcCoin"), options);
    chart2.render();

    // Ethereum coin Chart
    var options = {
        series: [
            {
                data: [34, 55, 41, 47, 32, 53, 31]
            },
        ],
        chart: {
            sparkline: {
                enabled: true
            },
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 3,
                right: 6,
                blur: 3,
                color: ['#60a5fa'],
                opacity: 0.2
            },
            type: 'line',
            height: 20,
            width: 100
        },
        tooltip: {
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        },
        colors: ["#60a5fa"],
        stroke: {
            width: [1.5],
            curve: ['smooth'],
        },
        xaxis: {
            crosshairs: {
                show: false,
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                opacityFrom: 0.9,
                opacityTo: 0.9,
                stops: [0, 98],
            }
        },
    };
    var chart = new ApexCharts(document.querySelector("#ethCoin"), options);
    chart.render();

    // Dash coin Chart
    var options = {
        series: [
            {
                data: [31, 53, 32, 47, 41, 55, 44]
            },
        ],
        chart: {
            sparkline: {
                enabled: true
            },
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 3,
                right: 6,
                blur: 3,
                color: ['#FF534D'],
                opacity: 0.2
            },
            type: 'line',
            height: 20,
            width: 100
        },
        tooltip: {
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        },
        colors: ["#FF534D"],
        stroke: {
            width: [1.5],
            curve: ['smooth'],
        },
        xaxis: {
            crosshairs: {
                show: false,
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                opacityFrom: 0.9,
                opacityTo: 0.9,
                stops: [0, 98],
            }
        },
    };
    var chart = new ApexCharts(document.querySelector("#dshCoin"), options);
    chart.render();

    // Golem coin Chart
    var options = {
        series: [
            {
                data: [21, 43, 22, 45, 35, 55, 34]
            },
        ],
        chart: {
            sparkline: {
                enabled: true
            },
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 3,
                right: 6,
                blur: 3,
                color: ['#FFBE14'],
                opacity: 0.2
            },
            type: 'line',
            height: 20,
            width: 100
        },
        tooltip: {
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        },
        colors: ["#FFBE14"],
        stroke: {
            width: [1.5],
            curve: ['smooth'],
        },
        xaxis: {
            crosshairs: {
                show: false,
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                opacityFrom: 0.9,
                opacityTo: 0.9,
                stops: [0, 98],
            }
        },
    };
    var chart = new ApexCharts(document.querySelector("#glmCoin"), options);
    chart.render();


    // Sessions By Device Chart
    var options = {
        series: [
            {
                name: "Tablet",
                data: [[10, 35, 80]]
            },
            {
                name: "Mobile",
                data: [[22, 10, 80]]
            },
            {
                name: "Desktop",
                data: [[25, 25, 150]]
            },
        ],
        chart: {
            height: 367,
            type: "bubble",
            toolbar: {
                show: false
            }
        },
        grid: {
            borderColor: '#f3f3f3',
            strokeDashArray: 3
        },
        colors: ["#f43f63", "#60a5fa", "#6366f1"],
        dataLabels: {
            enabled: false
        },
        legend: {
            show: true,
            fontSize: '13px',
            labels: {
                colors: '#959595',
            },
            markers: {
                width: 10,
                height: 10,
            },
        },
        xaxis: {
            min: 0,
            max: 50,
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
        yaxis: {
            max: 50,
            labels: {
                show: false,
            },
        }
    };
    var chart1 = new ApexCharts(document.querySelector("#sessionsByDevice"), options);
    chart1.render();

    // Users by country map
    var markers = [{
        name: 'Russia',
        coords: [61, 105],
        style: {
            fill: '#60a5fa'
        }
    },
    {
        name: 'Geenland',
        coords: [72, -42],
        style: {
            fill: '#6366f1'
        }
    },
    {
        name: 'Canada',
        coords: [56, -106],
        style: {
            fill: '#ff534d'
        }
    },
    {
        name: 'Palestine',
        coords: [31.5, 34.8],
        style: {
            fill: '#ffbe14'
        }
    },
    {
        name: 'Brazil',
        coords: [-14.2350, -51.9253],
        style: {
            fill: '#f43f63'
        }
    },
    ];
    var map = new jsVectorMap({
        map: 'world_merc',
        selector: '#users-map',
        markersSelectable: true,

        onMarkerSelected(index, isSelected, selectedMarkers) {
        },

        // -------- Labels --------
        labels: {
            markers: {
                render: function (marker) {
                    return marker.name
                },
            },
        },

        // -------- Marker and label style --------
        markers: markers,
        markerStyle: {
            hover: {
                stroke: "#DDD",
                strokeWidth: 3,
                fill: '#FFF'
            },
            selected: {
                fill: '#ff525d'
            }
        },
        markerLabelStyle: {
            initial: {
                fontFamily: 'Poppins',
                fontSize: 13,
                fontWeight: 500,
                fill: '#35373e',
            },
        },
    })

})();
