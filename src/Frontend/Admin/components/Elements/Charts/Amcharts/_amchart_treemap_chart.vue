<template>
    <div ref="amchart_treemap_chart"></div>
</template>

<script>
    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4charts from "@amcharts/amcharts4/charts";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";
    import am4themes_dataviz from "@amcharts/amcharts4/themes/dataviz.js";

    export default {
        name: "amchart-treemap-chart",
        props: {
            chartData: Object,
        },
        data() {
            return {
                chart: ''
            }
        },
        methods:{

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
            let chart = am4core.create(this.$refs.amchart_treemap_chart, am4charts.TreeMap);
            chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect

            let data = this.chartData.data

            function processData(data) {
                let treeData = [];

                let smallBrands = { name: "Other", children: [] };

                for (var brand in data) {
                    let brandData = { name: brand, children: [] }
                    let brandTotal = 0;
                    for (var model in data[brand]) {
                        brandTotal += data[brand][model];
                    }

                    for (var model in data[brand]) {
                        // do not add very small
                        if (data[brand][model]) {
                            brandData.children.push({ name: model, count: data[brand][model] });
                        }
                    }

                    // add to small brands if total number less than
                    if (brandTotal) {
                        // console.log(brandData)
                        treeData.push(brandData);
                        // console.log(treeData)
                    }
                    // else {
                    //     smallBrands.children.push(brandData)
                    //     console.log(smallBrands)
                    // }

                }
                // treeData.push(smallBrands);
                // console.log(treeData)
                return treeData;
            }

            // only one level visible initially
            chart.maxLevels = 1;
            // define data fields
            chart.dataFields.value = "count";
            chart.dataFields.name = "name";
            chart.dataFields.children = "children";
            chart.homeText = 'Breakdown Role/Specialisation';

            // enable navigation
            chart.navigationBar = new am4charts.NavigationBar();

            // level 0 series template
            let level0SeriesTemplate = chart.seriesTemplates.create("0");
            level0SeriesTemplate.strokeWidth = 2;

            // by default only current level series bullets are visible, but as we need brand bullets to be visible all the time, we modify it's hidden state
            level0SeriesTemplate.bulletsContainer.hiddenState.properties.opacity = 1;
            level0SeriesTemplate.bulletsContainer.hiddenState.properties.visible = true;
            // create hover state
            let columnTemplate = level0SeriesTemplate.columns.template;
            let hoverState = columnTemplate.states.create("hover");

            // darken
            hoverState.adapter.add("fill", function (fill, target) {
                if (fill instanceof am4core.Color) {
                    return am4core.color(am4core.colors.brighten(fill.rgb, -0.2));
                }
                return fill;
            })

            // add logo
            let image = columnTemplate.createChild(am4core.Image);
            image.opacity = 0.15;
            image.align = "center";
            image.valign = "middle";
            image.width = am4core.percent(80);
            image.height = am4core.percent(80);

            // // add adapter for href to load correct image
            // image.adapter.add("href", function (href, target) {
            //     let dataItem = target.parent.dataItem;
            //     if (dataItem) {
            //         return "https://www.amcharts.com/lib/images/logos/" + dataItem.treeMapDataItem.name.toLowerCase() + ".png";
            //     }
            // });

            // level1 series template
            let level1SeriesTemplate = chart.seriesTemplates.create("1");
            level1SeriesTemplate.columns.template.fillOpacity = 0;

            let bullet1 = level1SeriesTemplate.bullets.push(new am4charts.LabelBullet());
            bullet1.locationX = 0.5;
            bullet1.locationY = 0.5;
            bullet1.label.text = "{name}";
            bullet1.label.fill = am4core.color("#ffffff");

            // level2 series template
            let level2SeriesTemplate = chart.seriesTemplates.create("2");
            level2SeriesTemplate.columns.template.fillOpacity = 0;

            let bullet2 = level2SeriesTemplate.bullets.push(new am4charts.LabelBullet());
            bullet2.locationX = 0.5;
            bullet2.locationY = 0.5;
            bullet2.label.text = "{name}";
            bullet2.label.fill = am4core.color("#ffffff");

            //For click events
            // this.events = chart.columns.template.events.on("hit", function(ev) {
            //     console.log('check');
            //     if(typeof this.chartData.key !== 'undefined')
            //     {
            //         const clickedData = {
            //             var_name: this.chartData.key,
            //             data: ev.target.dataItem.category
            //         }
            //         eventBus.$emit(this.call_event, clickedData);
            //     }
            //     console.log('check');
            // }, this);

            chart.data = processData(data);

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
