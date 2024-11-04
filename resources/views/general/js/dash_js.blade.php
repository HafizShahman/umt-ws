<script src="{{ asset('assets/plugins/apex/apexcharts.min.js') }}"></script>
<script>
    var spark1 = {
        chart: {
            id: 'unique-visits',
            group: 'sparks2',
            type: 'line',
            height: 58,
            sparkline: {
                enabled: true
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 1,
                blur: 3,
                color: '#009688',
                opacity: 0.7,
            }
        },
        series: [{
            data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25]
        }],
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        markers: {
            size: 0
        },
        grid: {
            padding: {
                top: 0,
                bottom: 0,
                left: 0
            }
        },
        colors: ['#009688'],
        tooltip: {
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function formatter(val) {
                        return '';
                    }
                }
            }
        },
        responsive: [{
                breakpoint: 576,
                options: {
                    chart: {
                        height: 95,
                    },
                    grid: {
                        padding: {
                            top: 45,
                            bottom: 0,
                            left: 0
                        }
                    },
                },
            }

        ]
    }

    d_1C_1 = new ApexCharts(document.querySelector("#total-users"), spark1);
    d_1C_1.render();

    /*
      ==================================
          stars | Options
      ==================================
  */

    var optionsstar = {
        chart: {
            type: 'donut',
            width: 380
        },
        colors: ['#9e1274', '#4e119e', '#e7515a', '#e2a03f', '#119e9d'],
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'center',
            fontSize: '14px',
            markers: {
                width: 10,
                height: 10,
            },
            itemMargin: {
                horizontal: 0,
                vertical: 8
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '19px',
                            fontFamily: 'Nunito, sans-serif',
                            color: undefined,
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            fontFamily: 'Nunito, sans-serif',
                            color: '20',
                            offsetY: 16,
                            formatter: function(val) {
                                return val
                            }
                        },
                        total: {
                            show: true,
                            showAlways: true,
                            label: 'Total',
                            color: '#888ea8',
                            formatter: function(w) {
                                return w.globals.seriesTotals.reduce(function(a, b) {
                                    return a + b
                                }, 0)
                            }
                        }
                    }
                }
            }
        },
        stroke: {
            show: true,
            width: 25,
        },
        series: [
            @if (empty($userstar))
                0,
                0,
                0,
                0,
                0
            @else
                @foreach ($userstar as $row)
                    {{ $row->countstar }},
                @endforeach
            @endif
        ],
        labels: [
            @if (empty($userstar))
                'No Data',
                'No Data',
                'No Data',
                'No Data',
                'No Data'
            @else
                @foreach ($userstar as $row)
                    '{{ $row->star }}',
                @endforeach
            @endif
        ],
        responsive: [{
            breakpoint: 1599,
            options: {
                chart: {
                    width: '350px',
                    height: '400px'
                },
                legend: {
                    position: 'bottom'
                }
            },

            breakpoint: 1439,
            options: {
                chart: {
                    width: '250px',
                    height: '390px'
                },
                legend: {
                    position: 'bottom'
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '65%',
                        }
                    }
                }
            },
        }]
    }
    var chart1 = new ApexCharts(
        document.querySelector("#stars"),
        optionsstar
    );

    chart1.render();

    /*
      ==================================
          chart recommend | Options
      ==================================
  */

    var optionschartrecommend = {
        chart: {
            type: 'donut',
            width: 380
        },
        colors: ['#9e1274', '#4e119e', '#e7515a', '#e2a03f', '#119e9d'],
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'center',
            fontSize: '14px',
            markers: {
                width: 10,
                height: 10,
            },
            itemMargin: {
                horizontal: 0,
                vertical: 8
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '19px',
                            fontFamily: 'Nunito, sans-serif',
                            color: undefined,
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            fontFamily: 'Nunito, sans-serif',
                            color: '20',
                            offsetY: 16,
                            formatter: function(val) {
                                return val
                            }
                        },
                        total: {
                            show: true,
                            showAlways: true,
                            label: 'Total',
                            color: '#888ea8',
                            formatter: function(w) {
                                return w.globals.seriesTotals.reduce(function(a, b) {
                                    return a + b
                                }, 0)
                            }
                        }
                    }
                }
            }
        },
        stroke: {
            show: true,
            width: 25,
        },
        series: [
            @if (empty($recommend))
                0,
                0
            @else
                @foreach ($recommend as $row)
                    {{ $row->countrecommend }},
                @endforeach
            @endif
        ],
        labels: [
            @if (empty($recommend))
                'No Data',
                'No Data',
            @else
                @foreach ($recommend as $row)
                    '{{ $row->recommend }}',
                @endforeach
            @endif
        ],
        responsive: [{
            breakpoint: 1599,
            options: {
                chart: {
                    width: '350px',
                    height: '400px'
                },
                legend: {
                    position: 'bottom'
                }
            },

            breakpoint: 1439,
            options: {
                chart: {
                    width: '250px',
                    height: '390px'
                },
                legend: {
                    position: 'bottom'
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '65%',
                        }
                    }
                }
            },
        }]
    }
    var chart2 = new ApexCharts(
        document.querySelector("#chartrecommend"),
        optionschartrecommend
    );

    chart2.render();

    /*
      ==================================
          chart comment | Options
      ==================================
  */

    var optionschartcomment = {
        chart: {
            type: 'donut',
            width: 380
        },
        colors: ['#9e1274', '#4e119e', '#e7515a', '#e2a03f', '#119e9d'],
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'center',
            fontSize: '14px',
            markers: {
                width: 10,
                height: 10,
            },
            itemMargin: {
                horizontal: 0,
                vertical: 8
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '19px',
                            fontFamily: 'Nunito, sans-serif',
                            color: undefined,
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            fontFamily: 'Nunito, sans-serif',
                            color: '20',
                            offsetY: 16,
                            formatter: function(val) {
                                return val
                            }
                        },
                        total: {
                            show: true,
                            showAlways: true,
                            label: 'Total',
                            color: '#888ea8',
                            formatter: function(w) {
                                return w.globals.seriesTotals.reduce(function(a, b) {
                                    return a + b
                                }, 0)
                            }
                        }
                    }
                }
            }
        },
        stroke: {
            show: true,
            width: 25,
        },
        series: [
            {{ $comment->countcomment }}, {{ $commentnull->countcomment }}
        ],
        labels: [
            'With Comment',
            'No Comment'
        ],
        responsive: [{
            breakpoint: 1599,
            options: {
                chart: {
                    width: '350px',
                    height: '400px'
                },
                legend: {
                    position: 'bottom'
                }
            },

            breakpoint: 1439,
            options: {
                chart: {
                    width: '250px',
                    height: '390px'
                },
                legend: {
                    position: 'bottom'
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '65%',
                        }
                    }
                }
            },
        }]
    }
    var chart3 = new ApexCharts(
        document.querySelector("#chartcomment"),
        optionschartcomment
    );

    chart3.render();

    var sCol = {
        chart: {
            height: 350,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '100%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 60,
            colors: ['transparent']
        },
        series: [
            @foreach ($userstar as $row)
                {
                    name: '{{ $row->star }}',
                    data: [{{ $row->countstar }}]
                },
            @endforeach
        ],
        xaxis: {
            categories: [
                @foreach ($userstar as $row)
                    '{{ $row->star }}',
                @endforeach
            ],
        },
        yaxis: {
            title: {
                text: 'Total Rate'
            }
        },
        fill: {
            opacity: 1

        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return val
                }
            }
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#ratingcolumn"), sCol
    );

    chart.render();

    var stat = {
        chart: {
            height: 350,
            type: "area"
        },
        dataLabels: {
            enabled: false
        },
        series: [{
                name: "1 Star",
                data: [
                    @foreach ($month as $dt)
                        @if (isset($fdb1[$dt->id]))
                            {{ $fdb1[$dt->id]->countstar }}
                        @else
                            0
                        @endif ,
                    @endforeach
                ]
            },
            {
                name: "2 Star",
                data: [
                    @foreach ($month as $dt)
                        @if (isset($fdb2[$dt->id]))
                            {{ $fdb2[$dt->id]->countstar }}
                        @else
                            0
                        @endif ,
                    @endforeach
                ]
            },
            {
                name: "3 Star",
                data: [
                    @foreach ($month as $dt)
                        @if (isset($fdb3[$dt->id]))
                            {{ $fdb3[$dt->id]->countstar }}
                        @else
                            0
                        @endif ,
                    @endforeach
                ]
            },
            {
                name: "4 Star",
                data: [
                    @foreach ($month as $dt)
                        @if (isset($fdb4[$dt->id]))
                            {{ $fdb4[$dt->id]->countstar }}
                        @else
                            0
                        @endif ,
                    @endforeach
                ]
            },
            {
                name: "5 Star",
                data: [
                    @foreach ($month as $dt)
                        @if (isset($fdb5[$dt->id]))
                            {{ $fdb5[$dt->id]->countstar }}
                        @else
                            0
                        @endif ,
                    @endforeach
                ]
            }
        ],
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.7,
                opacityTo: 0.9,
                stops: [0, 90, 100]
            }
        },
        xaxis: {
            categories: [
                @foreach ($month as $dt)
                    '{{ $dt->month }}',
                @endforeach
            ]
        },
        yaxis: {
            title: {
                text: 'Total Rate'
            }
        }
    };

    var statchart = new ApexCharts(
        document.querySelector("#statistic"), stat
    );

    statchart.render();
</script>
