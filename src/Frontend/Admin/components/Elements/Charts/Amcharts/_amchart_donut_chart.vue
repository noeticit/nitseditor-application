<template>
    <div ref="amchart_donut_chart"></div>
</template>

<script>
    import {eventBus} from 'NitsModels/_events.js';
    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4charts from "@amcharts/amcharts4/charts";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";
    import am4themes_dataviz from "@amcharts/amcharts4/themes/dataviz.js";


    export default {
        name: "amchart-donut-chart",
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
            let chart = am4core.create(this.$refs.amchart_donut_chart, am4charts.PieChart);

            chart.data = this.chartData.data;

            // Set inner radius
            chart.innerRadius = am4core.percent(50);

            // Add and configure Series
            let pieSeries = chart.series.push(new am4charts.PieSeries());
            pieSeries.dataFields.value = "value";
            pieSeries.dataFields.category = "label";
            pieSeries.slices.template.stroke = am4core.color("#fff");
            pieSeries.slices.template.strokeWidth = 2;
            pieSeries.slices.template.strokeOpacity = 1;

            // Labels hidden
            if(typeof this.chartData.hideTickLabels !== 'undefined' &&  this.chartData.hideTickLabels) {
                pieSeries.ticks.template.disabled = true;
                pieSeries.labels.template.text = "";
                pieSeries.labels.template.radius = am4core.percent(-40);
                pieSeries.labels.template.fill = am4core.color("white");
            }

            // This creates initial animation
            pieSeries.hiddenState.properties.opacity = 1;
            pieSeries.hiddenState.properties.endAngle = -90;
            pieSeries.hiddenState.properties.startAngle = -90;

            //For click events
            this.events = pieSeries.slices.template.events.on("hit", function(ev) {
                if(typeof this.chartData.key !== 'undefined')
                {
                    const clickedData = {
                        var_name: this.chartData.key,
                        data: ev.target.dataItem.category
                    }
                    eventBus.$emit(this.call_event, clickedData);
                }
            }, this);

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
                this.events.dispose();
                this.chart.dispose();
            }
        }
    }
</script>

<style scoped>

</style>
