<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        /*
            RAU
         */
        var RAU_CHART = document.getElementById('rau_chart');

        if (RAU_CHART !== null) {
            var ctx = RAU_CHART.getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
                        "{{ date('d.m.Y', strtotime('-7 days')) }}",
                        "{{ date('d.m.Y', strtotime('-6 days')) }}",
                        "{{ date('d.m.Y', strtotime('-5 days')) }}",
                        "{{ date('d.m.Y', strtotime('-4 days')) }}",
                        "{{ date('d.m.Y', strtotime('-3 days')) }}",
                        "{{ date('d.m.Y', strtotime('-2 days')) }}",
                        "{{ date('d.m.Y', strtotime('-1 days')) }}"
                    ],
                    datasets: [{
                        label: "",
                        borderColor: "#d9ac2a",
                        pointBorderColor: "#d9ac2a",
                        pointBackgroundColor: "rgba(255, 255, 255, 1)",
                        pointHoverBackgroundColor: "#d9ac2a",
                        pointHoverBorderColor: "#d9ac2a",
                        pointBorderWidth: 2,
                        pointHoverRadius: 5,
                        pointRadius: 5,
                        pointHoverBorderWidth: 0,
                        fill: false,
                        borderWidth: 3,

                        // Тут надо вывести 7 чисел
                        data:
                            [@php
                                $rows = \App\Models\RauHistory::all()->sortByDesc('id')->take(7)->toArray();

                                $items = [];
                                foreach ($rows as $row) {
                                    $items[] = $row;
                                }

                                for ($i = count($items) -1 ; $i >= count($items) - 7; $i--) {
                                    if (isset($items[$i]))
                                        echo "'{$items[$i]['new_price']}',";
                                }
                            @endphp]
                    }
                    ]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                display: true
                            },
                            gridLines: {
                                drawTicks: true,
                                display: true,
                                drawBorder: true
                            }

                        }],
                        xAxes: [{
                            gridLines: {
                                zeroLineColor: "transparent",
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false
                            }
                        }]
                    }
                }
            });
        }

        /*
            BTC
         */
        var BTC_CHART = document.getElementById('btc_chart');

        if (BTC_CHART !== null) {
            var ctx2 = BTC_CHART.getContext('2d');
            new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: [
                        "{{ date('d.m.Y', strtotime('-7 days')) }}",
                        "{{ date('d.m.Y', strtotime('-6 days')) }}",
                        "{{ date('d.m.Y', strtotime('-5 days')) }}",
                        "{{ date('d.m.Y', strtotime('-4 days')) }}",
                        "{{ date('d.m.Y', strtotime('-3 days')) }}",
                        "{{ date('d.m.Y', strtotime('-2 days')) }}",
                        "{{ date('d.m.Y', strtotime('-1 days')) }}"
                    ],
                    datasets: [{
                        label: "",
                        borderColor: "#d9ac2a",
                        pointBorderColor: "#d9ac2a",
                        pointBackgroundColor: "rgba(255, 255, 255, 1)",
                        pointHoverBackgroundColor: "#d9ac2a",
                        pointHoverBorderColor: "#d9ac2a",
                        pointBorderWidth: 2,
                        pointHoverRadius: 5,
                        pointRadius: 5,
                        pointHoverBorderWidth: 0,
                        fill: false,
                        borderWidth: 3,

                        // Тут надо вывести 7 чисел
                        data:
                            [@php
                                $rows = \App\Models\Rate::where('coin', 'BTC_RUB')->get()->toArray();

                                $count = 1;
                                while ($count != 8) {
                                    echo "'{$rows[count($rows) - $count]['rate']}',";
                                    $count = $count + 1;
                                }
                            @endphp]
                    }
                    ]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                display: true
                            },
                            gridLines: {
                                drawTicks: true,
                                display: true,
                                drawBorder: true
                            }

                        }],
                        xAxes: [{
                            gridLines: {
                                zeroLineColor: "transparent",
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false
                            }
                        }]
                    }
                }
            });
        }

        /*
            ETH
         */
        var ETH_CHART = document.getElementById('eth_chart');

        if (ETH_CHART !== null) {
            var ctx3 = ETH_CHART.getContext('2d');
            new Chart(ctx3, {
                type: 'line',
                data: {
                    labels: [
                        "{{ date('d.m.Y', strtotime('-7 days')) }}",
                        "{{ date('d.m.Y', strtotime('-6 days')) }}",
                        "{{ date('d.m.Y', strtotime('-5 days')) }}",
                        "{{ date('d.m.Y', strtotime('-4 days')) }}",
                        "{{ date('d.m.Y', strtotime('-3 days')) }}",
                        "{{ date('d.m.Y', strtotime('-2 days')) }}",
                        "{{ date('d.m.Y', strtotime('-1 days')) }}"
                    ],
                    datasets: [{
                        label: "",
                        borderColor: "#d9ac2a",
                        pointBorderColor: "#d9ac2a",
                        pointBackgroundColor: "rgba(255, 255, 255, 1)",
                        pointHoverBackgroundColor: "#d9ac2a",
                        pointHoverBorderColor: "#d9ac2a",
                        pointBorderWidth: 2,
                        pointHoverRadius: 5,
                        pointRadius: 5,
                        pointHoverBorderWidth: 0,
                        fill: false,
                        borderWidth: 3,

                        // Тут надо вывести 7 чисел
                        data:
                            [@php
                                $rows = \App\Models\Rate::where('coin', 'ETH_RUB')->get()->toArray();

                                $count = 1;
                                while ($count != 8) {
                                    echo "'{$rows[count($rows) - $count]['rate']}',";
                                    $count = $count + 1;
                                }
                            @endphp]
                    }
                    ]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                display: true
                            },
                            gridLines: {
                                drawTicks: true,
                                display: true,
                                drawBorder: true
                            }

                        }],
                        xAxes: [{
                            gridLines: {
                                zeroLineColor: "transparent",
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false
                            }
                        }]
                    }
                }
            });
        }
    });
</script><?php
