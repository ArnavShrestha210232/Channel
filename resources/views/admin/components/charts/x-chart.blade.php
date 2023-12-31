@extends('admin.layout.app')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel">
                <header class="panel-heading">
                    xCharts Basic Example
                </header>
                <div class="panel-body">
                    <figure class="demo-xchart" id="chart"></figure>
                </div>
            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection
@section('js')
    <script src="assets/xchart/d3.v3.min.js"></script>
    <script src="assets/xchart/xcharts.min.js"></script>
    <script>
        (function() {
            var data = [{
                "xScale": "ordinal",
                "comp": [],
                "main": [{
                    "className": ".main.l1",
                    "data": [{
                        "y": 15,
                        "x": "2012-11-19T00:00:00"
                    }, {
                        "y": 11,
                        "x": "2012-11-20T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-21T00:00:00"
                    }, {
                        "y": 10,
                        "x": "2012-11-22T00:00:00"
                    }, {
                        "y": 1,
                        "x": "2012-11-23T00:00:00"
                    }, {
                        "y": 6,
                        "x": "2012-11-24T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-25T00:00:00"
                    }]
                }, {
                    "className": ".main.l2",
                    "data": [{
                        "y": 29,
                        "x": "2012-11-19T00:00:00"
                    }, {
                        "y": 33,
                        "x": "2012-11-20T00:00:00"
                    }, {
                        "y": 13,
                        "x": "2012-11-21T00:00:00"
                    }, {
                        "y": 16,
                        "x": "2012-11-22T00:00:00"
                    }, {
                        "y": 7,
                        "x": "2012-11-23T00:00:00"
                    }, {
                        "y": 18,
                        "x": "2012-11-24T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-25T00:00:00"
                    }]
                }],
                "type": "line-dotted",
                "yScale": "linear"
            }, {
                "xScale": "ordinal",
                "comp": [],
                "main": [{
                    "className": ".main.l1",
                    "data": [{
                        "y": 12,
                        "x": "2012-11-19T00:00:00"
                    }, {
                        "y": 18,
                        "x": "2012-11-20T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-21T00:00:00"
                    }, {
                        "y": 7,
                        "x": "2012-11-22T00:00:00"
                    }, {
                        "y": 6,
                        "x": "2012-11-23T00:00:00"
                    }, {
                        "y": 12,
                        "x": "2012-11-24T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-25T00:00:00"
                    }]
                }, {
                    "className": ".main.l2",
                    "data": [{
                        "y": 29,
                        "x": "2012-11-19T00:00:00"
                    }, {
                        "y": 33,
                        "x": "2012-11-20T00:00:00"
                    }, {
                        "y": 13,
                        "x": "2012-11-21T00:00:00"
                    }, {
                        "y": 16,
                        "x": "2012-11-22T00:00:00"
                    }, {
                        "y": 7,
                        "x": "2012-11-23T00:00:00"
                    }, {
                        "y": 18,
                        "x": "2012-11-24T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-25T00:00:00"
                    }]
                }],
                "type": "cumulative",
                "yScale": "linear"
            }, {
                "xScale": "ordinal",
                "comp": [],
                "main": [{
                    "className": ".main.l1",
                    "data": [{
                        "y": 12,
                        "x": "2012-11-19T00:00:00"
                    }, {
                        "y": 18,
                        "x": "2012-11-20T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-21T00:00:00"
                    }, {
                        "y": 7,
                        "x": "2012-11-22T00:00:00"
                    }, {
                        "y": 6,
                        "x": "2012-11-23T00:00:00"
                    }, {
                        "y": 12,
                        "x": "2012-11-24T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-25T00:00:00"
                    }]
                }, {
                    "className": ".main.l2",
                    "data": [{
                        "y": 29,
                        "x": "2012-11-19T00:00:00"
                    }, {
                        "y": 33,
                        "x": "2012-11-20T00:00:00"
                    }, {
                        "y": 13,
                        "x": "2012-11-21T00:00:00"
                    }, {
                        "y": 16,
                        "x": "2012-11-22T00:00:00"
                    }, {
                        "y": 7,
                        "x": "2012-11-23T00:00:00"
                    }, {
                        "y": 18,
                        "x": "2012-11-24T00:00:00"
                    }, {
                        "y": 8,
                        "x": "2012-11-25T00:00:00"
                    }]
                }],
                "type": "bar",
                "yScale": "linear"
            }];
            var order = [0, 1, 0, 2],
                i = 0,
                xFormat = d3.time.format('%A'),
                chart = new xChart('line-dotted', data[order[i]], '#chart', {
                    axisPaddingTop: 5,
                    dataFormatX: function(x) {
                        return new Date(x);
                    },
                    tickFormatX: function(x) {
                        return xFormat(x);
                    },
                    timing: 1250
                }),
                rotateTimer,
                toggles = d3.selectAll('.multi button'),
                t = 3500;

            function updateChart(i) {
                var d = data[i];
                chart.setData(d);
                toggles.classed('toggled', function() {
                    return (d3.select(this).attr('data-type') === d.type);
                });
                return d;
            }

            toggles.on('click', function(d, i) {
                clearTimeout(rotateTimer);
                updateChart(i);
            });

            function rotateChart() {
                i += 1;
                i = (i >= order.length) ? 0 : i;
                var d = updateChart(order[i]);
                rotateTimer = setTimeout(rotateChart, t);
            }
            rotateTimer = setTimeout(rotateChart, t);
        }());
    </script>
@endsection
