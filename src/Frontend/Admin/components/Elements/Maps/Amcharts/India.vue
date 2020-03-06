<template>
    <div ref="armchart_maps_india" style="height: 500px;"></div>
</template>

<script>
    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4maps from "@amcharts/amcharts4/maps";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";
    import am4themes_dataviz from "@amcharts/amcharts4/themes/dataviz.js";

    export default {
        name: "amcharts-india",
        props: {
            chartData: Object
        },
        data() {
            return {
                chart: ''
            }
        },
        mounted() {
            //Loading themes
            if(this.chartData && this.chartData.theme)
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
            var title = "India Map"
            // Create map instance
            this.chart = am4core.create(this.$refs.armchart_maps_india, am4maps.MapChart);

            this.chart.titles.create().text = title;


            // Set projection
            this.chart.projection = new am4maps.projections.Mercator();

            // Create map polygon series
            let polygonSeries = this.chart.series.push(new am4maps.MapPolygonSeries());

            this.chart.geodataSource.url = "/nits-assets/map_geodata/indiaLow.json";
            this.chart.geodataSource.events.on("parseended", (ev) => {
                let data = [];
                for(var i = 0; i < ev.target.data.features.length; i++) {
                    let state = _.find(this.chartData.data, (o) => {
                        return o.label === ev.target.data.features[i].properties.name;
                    })

                    data.push({
                        id: ev.target.data.features[i].id,
                        value: typeof state !== 'undefined' && state.value ? state.value : 0
                    })
                }
                polygonSeries.data = data;
            })

            //Set min/max fill color for each area
            polygonSeries.heatRules.push({
                property: "fill",
                target: polygonSeries.mapPolygons.template,
                min: this.chart.colors.getIndex(1).brighten(1),
                max: this.chart.colors.getIndex(1).brighten(-0.3)
            });

            // Make map load polygon data (state shapes and names) from GeoJSON
            polygonSeries.useGeodata = true;

            // Set up heat legend
            let heatLegend = this.chart.createChild(am4maps.HeatLegend);
            heatLegend.series = polygonSeries;
            heatLegend.align = "right";
            heatLegend.width = am4core.percent(25);
            heatLegend.marginRight = am4core.percent(4);
            heatLegend.minValue = 0;
            heatLegend.maxValue = 40000000;
            heatLegend.valign = "bottom";

            // Set up custom heat map legend labels using axis ranges
            let minRange = heatLegend.valueAxis.axisRanges.create();
            minRange.value = heatLegend.minValue;
            minRange.label.text = "Little";
            let maxRange = heatLegend.valueAxis.axisRanges.create();
            maxRange.value = heatLegend.maxValue;
            maxRange.label.text = "A lot!";

            // Blank out internal heat legend value axis labels
            heatLegend.valueAxis.renderer.labels.template.adapter.add("text", function(labelText) {
                return "";
            });

            // Configure series tooltip
            let polygonTemplate = polygonSeries.mapPolygons.template;
            polygonTemplate.tooltipText = "{name}: {value}";
            polygonTemplate.nonScalingStroke = true;
            polygonTemplate.strokeWidth = 0.5;

            // Create hover state and set alternative fill color
            let hs = polygonTemplate.states.create("hover");
            hs.properties.fill = this.chart.colors.getIndex(1).brighten(-0.5);

            //Un-loading theme
            if(this.chartData && this.chartData.theme)
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
