@extends('layouts.master')

@section('content')
    <!-- Styles -->
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }

    </style>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- Chart code -->
    <script>
        am4core.ready(function() {

// Themes begin
            am4core.useTheme(am4themes_dataviz);
            am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
            var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
            chart.data = [ {
                "members": "Students",
                "numbers": `{{ $students }}`
            }, {
                "members": "Companies",
                "numbers":  `{{ $company }}`
            }, {
                "members": "Professional",
                "numbers": `{{ $professional }}`
            }
            ];

// Add and configure Series
            var pieSeries = chart.series.push(new am4charts.PieSeries());
            pieSeries.dataFields.value = "numbers";
            pieSeries.dataFields.category = "members";
            pieSeries.slices.template.stroke = am4core.color("#fff");
            pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
            pieSeries.hiddenState.properties.opacity = 1;
            pieSeries.hiddenState.properties.endAngle = -90;
            pieSeries.hiddenState.properties.startAngle = -90;

            chart.hiddenState.properties.radius = am4core.percent(0);


        }); // end am4core.ready()
    </script>



    <h2>Membership Details</h2>
    <div id="chartdiv"></div>
@endsection
