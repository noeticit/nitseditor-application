<template>
    <div ref="amchart_clustered_chart"></div>
</template>

<script>

    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4charts from "@amcharts/amcharts4/charts";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";
    import am4themes_dataviz from "@amcharts/amcharts4/themes/dataviz.js";

    export default {
        name: "amchart-clustered-chart",
        props: {
            chartData: Object,
        },
        data() {
            return {
                chart: ''
            }
        },
        mounted() {
            //Loading themes
            if(this.chartData.theme)
            {
                am4core.useTheme(am4themes_animated);
                switch (this.chartData.theme) {
                    case 'dataviz':
                        am4core.useTheme(am4themes_dataviz);
                        break;
                    case '':
                        break;
                    default:

                }
            }

            //Creating charts
            let chart = am4core.create(this.$refs.amchart_clustered_chart, am4charts.XYChart);

            chart.data = this.chartData.data;


            // Create axes
            let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "year";
            categoryAxis.title.text = "Year";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 20;
            categoryAxis.renderer.cellStartLocation = 0.1;
            categoryAxis.renderer.cellEndLocation = 0.9;

            let  valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.min = 0;
            valueAxis.title.text = "";

            // Create series
            function createSeries(field, name, stacked) {
                let series = chart.series.push(new am4charts.ColumnSeries());
                series.dataFields.valueY = field;
                series.dataFields.categoryX = "year";
                series.name = name;
                series.columns.template.tooltipText = "{name}: [bold]{valueY}[/]";
                series.stacked = stacked;
                series.columns.template.width = am4core.percent(95);
            }

            // createSeries("residential", "Residential", true);
            // createSeries("retail", "Retail", true);
            // createSeries("commercial", "Commercial", true);
            // createSeries("industrial", "Industrial", true);
            // createSeries("educational", "Educational", true);

            // States
            createSeries("delhi", "Delhi", true);
            createSeries("goa", "Goa", true);
            createSeries("chennai", "Chennai", true);
            createSeries("punjab", "Punjab", true);
            createSeries("mumbai", "Mumbai", true);


            // Add legend
            if(this.chartData.legends)
                chart.legend = new am4charts.Legend();

            this.chart = chart;

            //Un-loading theme
            if(this.chartData.theme)
            {
                am4core.unuseTheme(am4themes_animated);
                switch (this.chartData.theme) {
                    case 'dataviz':
                        am4core.unuseTheme(am4themes_dataviz);
                        break;
                    case '':
                        break;
                    default:

                }
            }
        },
        beforeDestroy() {
            if (this.chart) {
                this.chart.dispose();
            }
        }
    }
</script>

<style scoped>

</style>
