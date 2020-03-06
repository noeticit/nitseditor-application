<template>
    <div ref="amchart_multiple_value_axes"></div>
</template>

<script>
    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4charts from "@amcharts/amcharts4/charts";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";
    import am4themes_dataviz from "@amcharts/amcharts4/themes/dataviz.js";

    export default {
        name: "amchart_multiple_value_axes",
        props: ['chartData'],
        data() {
            return {
                chart: ''
            }
        },
        mounted() {
            if(this.chartData) {
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
                this.chart = am4core.create(this.$refs.amchart_multiple_value_axes, am4charts.XYChart);

                this.chart.data = this.chartData.data;

                // Create axes
                let dateAxis = this.chart.xAxes.push(new am4charts.DateAxis());
                dateAxis.baseInterval = {
                    "timeUnit": "minute",
                    "count": 1
                };
                dateAxis.tooltipDateFormat = "HH:mm, d MMMM";

                this.chartData.label.forEach((a) => {
                    this.createAxisAndSeries(a.field, a.name, a.opposite, a.bullet);
                })

                // Add legend
                this.chart.legend = new am4charts.Legend();

                // Add cursor
                this.chart.cursor = new am4charts.XYCursor();

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
            }

        },
        methods: {
            createAxisAndSeries(field, name, opposite, bullet) {
                let valueAxis = this.chart.yAxes.push(new am4charts.ValueAxis());
                if(this.chart.yAxes.indexOf(valueAxis) != 0){
                    valueAxis.syncWithAxis = this.chart.yAxes.getIndex(0);
                }

                let series = this.chart.series.push(new am4charts.LineSeries());
                series.dataFields.valueY = field;
                series.dataFields.dateX = "value";
                series.strokeWidth = 2;
                series.yAxis = valueAxis;
                series.name = name;
                series.tooltipText = "{name}: [bold]{valueY}[/]";
                series.tensionX = 0.8;
                series.showOnInit = true;

                let interfaceColors = new am4core.InterfaceColorSet();

                let bullets;
                let triangles;
                let rectangles;

                switch(bullet) {
                    case "triangle":
                        bullets = series.bullets.push(new am4charts.Bullet());
                        bullets.width = 12;
                        bullets.height = 12;
                        bullets.horizontalCenter = "middle";
                        bullets.verticalCenter = "middle";

                        triangles = bullets.createChild(am4core.Triangle);
                        triangles.stroke = interfaceColors.getFor("background");
                        triangles.strokeWidth = 2;
                        triangles.direction = "top";
                        triangles.width = 12;
                        triangles.height = 12;
                        break;
                    case "rectangle":
                        let bullets = series.bullets.push(new am4charts.Bullet());
                        bullets.width = 10;
                        bullets.height = 10;
                        bullets.horizontalCenter = "middle";
                        bullets.verticalCenter = "middle";

                        rectangles = bullets.createChild(am4core.Rectangle);
                        rectangles.stroke = interfaceColors.getFor("background");
                        rectangles.strokeWidth = 2;
                        rectangles.width = 10;
                        rectangles.height = 10;
                        break;
                    default:
                        bullets = series.bullets.push(new am4charts.CircleBullet());
                        bullets.circle.stroke = interfaceColors.getFor("background");
                        bullets.circle.strokeWidth = 2;
                        break;
                }

                valueAxis.renderer.line.strokeOpacity = 1;
                valueAxis.renderer.line.strokeWidth = 2;
                valueAxis.renderer.line.stroke = series.stroke;
                valueAxis.renderer.labels.template.fill = series.stroke;
                valueAxis.renderer.opposite = opposite;
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
