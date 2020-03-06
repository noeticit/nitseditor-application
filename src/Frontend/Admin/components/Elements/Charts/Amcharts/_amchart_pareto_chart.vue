<template>
    <div ref="amchart_pareto_chart"></div>
</template>

<script>
    import {eventBus} from 'NitsModels/_events.js';
    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4charts from "@amcharts/amcharts4/charts";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";
    import am4themes_dataviz from "@amcharts/amcharts4/themes/dataviz.js";

    export default {
        name: "amchart-pareto-chart",
        props: {
            chartData: Object,
            call_event: String
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
            let chart = am4core.create(this.$refs.amchart_pareto_chart, am4charts.XYChart);
            chart.scrollbarX = new am4core.Scrollbar();

            chart.data = this.chartData.data;


            prepareParetoData();

            function prepareParetoData(){
                let total = 0;

                for(var i = 0; i < chart.data.length; i++){
                    let value = chart.data[i].visits;
                    total += value;
                }

                let sum = 0;
                for(var i = 0; i < chart.data.length; i++){
                    let value = chart.data[i].visits;
                    sum += value;
                    chart.data[i].pareto = sum / total * 100;
                }
            }


            // Create axes
            let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "country";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 60;
            categoryAxis.tooltip.disabled = true;

            let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.minWidth = 50;
            valueAxis.min = 0;
            valueAxis.cursorTooltipEnabled = false;

            // Create series
            let series = chart.series.push(new am4charts.ColumnSeries());
            series.sequencedInterpolation = true;
            series.dataFields.valueY = "visits";
            series.dataFields.categoryX = "country";
            series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
            series.columns.template.strokeWidth = 0;

            series.tooltip.pointerOrientation = "vertical";

            series.columns.template.column.cornerRadiusTopLeft = 10;
            series.columns.template.column.cornerRadiusTopRight = 10;
            series.columns.template.column.fillOpacity = 0.8;

            // on hover, make corner radiuses bigger
            let hoverState = series.columns.template.column.states.create("hover");
            hoverState.properties.cornerRadiusTopLeft = 0;
            hoverState.properties.cornerRadiusTopRight = 0;
            hoverState.properties.fillOpacity = 1;

            series.columns.template.adapter.add("fill", (fill, target)=>{
                return chart.colors.getIndex(target.dataItem.index);
            })


            let paretoValueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            paretoValueAxis.renderer.opposite = true;
            paretoValueAxis.min = 0;
            paretoValueAxis.max = 100;
            paretoValueAxis.strictMinMax = true;
            paretoValueAxis.renderer.grid.template.disabled = true;
            paretoValueAxis.numberFormatter = new am4core.NumberFormatter();
            paretoValueAxis.numberFormatter.numberFormat = "#'%'"
            paretoValueAxis.cursorTooltipEnabled = false;

            let paretoSeries = chart.series.push(new am4charts.LineSeries())
            paretoSeries.dataFields.valueY = "pareto";
            paretoSeries.dataFields.categoryX = "country";
            paretoSeries.yAxis = paretoValueAxis;
            paretoSeries.tooltipText = "pareto: {valueY.formatNumber('#.0')}%[/]";
            paretoSeries.bullets.push(new am4charts.CircleBullet());
            paretoSeries.strokeWidth = 2;
            paretoSeries.stroke = new am4core.InterfaceColorSet().getFor("alternativeBackground");
            paretoSeries.strokeOpacity = 0.5;

            // Cursor
            chart.cursor = new am4charts.XYCursor();
            chart.cursor.behavior = "panX";

            //For click events
            this.events = series.columns.template.events.on("hit", function(ev) {
                if(typeof this.chartData.key !== 'undefined')
                {
                    const clickedData = {
                        var_name: this.chartData.key,
                        data: ev.target.dataItem.categoryX
                    }
                    eventBus.$emit(this.call_event, clickedData);
                }
            }, this);

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
