<template>
    <div ref="amchart_rotated_series_chart"></div>
</template>

<script>
    import {eventBus} from 'NitsModels/_events.js';
    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4charts from "@amcharts/amcharts4/charts";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";
    import am4themes_dataviz from "@amcharts/amcharts4/themes/dataviz.js";

    export default {
        name: "amchart-rotated-series-chart",
        props: {
            chartData: Object,
            call_event: String,
        },
        data() {
            return {
                chart: '',
                events: ''
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
            let chart = am4core.create(this.$refs.amchart_rotated_series_chart, am4charts.XYChart);
            chart.scrollbarX = new am4core.Scrollbar();
            chart.data = this.chartData.data;

            // Create axes
            let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "label";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;
            categoryAxis.renderer.labels.template.horizontalCenter = "right";
            categoryAxis.renderer.labels.template.verticalCenter = "middle";
            categoryAxis.renderer.labels.template.rotation = 270;
            categoryAxis.tooltip.disabled = true;
            categoryAxis.renderer.minHeight = 110;

            let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.minWidth = 50;

            // Create series
            let series = chart.series.push(new am4charts.ColumnSeries());
            series.sequencedInterpolation = true;
            series.dataFields.valueY = "value";
            series.dataFields.categoryX = "label";
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

            series.columns.template.adapter.add("fill", function(fill, target) {
                return chart.colors.getIndex(target.dataItem.index);
            });

            // Cursor
            chart.cursor = new am4charts.XYCursor();

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
