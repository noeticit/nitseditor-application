<template>
    <div ref="amchart_semi_pie_chart"></div>
</template>

<script>
    import {eventBus} from 'NitsModels/_events.js';
    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4charts from "@amcharts/amcharts4/charts";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";
    import am4themes_dataviz from "@amcharts/amcharts4/themes/dataviz.js";

    export default {
        name: "amchart-semi-pie-chart",
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
            let chart = am4core.create(this.$refs.amchart_semi_pie_chart, am4charts.PieChart);
            chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

            chart.data = this.chartData.data;

            // Add and configure Series

            chart.radius = am4core.percent(70);
            chart.innerRadius = am4core.percent(40);
            chart.startAngle = 180;
            chart.endAngle = 360;

            let series = chart.series.push(new am4charts.PieSeries());
            series.dataFields.value = "value";
            series.dataFields.category = "label";

            if(typeof this.chartData.hideTickLabels !== 'undefined' &&  this.chartData.hideTickLabels) {
                series.ticks.template.disabled = true;
                series.labels.template.text = "";
                series.labels.template.radius = am4core.percent(-40);
                series.labels.template.fill = am4core.color("white");
            }

            series.slices.template.cornerRadius = 10;
            series.slices.template.innerCornerRadius = 7;
            series.slices.template.draggable = true;
            series.slices.template.inert = true;
            series.alignLabels = false;

            // series.hiddenState.properties.startAngle = 90;
            // series.hiddenState.properties.endAngle = 90;

            //For click events
            this.events = series.slices.template.events.on("hit", function(ev) {
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
