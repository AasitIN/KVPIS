<script>
    $(document).ready(function () {
am4core.ready(function() {
// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end
// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart3D);
// Add data
chart.data = [
        <?php if(isset($user_register_by_region) && !empty($user_register_by_region)){
            foreach($user_register_by_region as $region){
            if(!empty($region['name'])){
	?>
            {
              "country": "<?php echo ($region['name'])? $region['name'] : '' ?>",
              "visits": <?php echo ($region['total'])? $region['total'] : '' ?>,
              "color": chart.colors.next()
            },
	<?php } } } ?>
        ];

var title = chart.titles.create();
title.text = "No. of Employee Registered By HQ/ZIET/REGION";
title.fontSize = 16;
title.marginBottom = 10;
title.fontWeight = "bold";
// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.labels.template.rotation = -20;
categoryAxis.renderer.labels.template.hideOversized = false;
categoryAxis.renderer.minGridDistance = 20;
categoryAxis.renderer.labels.template.horizontalCenter = "right";
categoryAxis.renderer.labels.template.verticalCenter = "middle";
categoryAxis.tooltip.label.rotation = 270;
categoryAxis.tooltip.label.horizontalCenter = "right";
categoryAxis.tooltip.label.verticalCenter = "middle";

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.title.text = "No. of Employee Registered";
valueAxis.title.fontWeight = "bold";

// Create series
var series = chart.series.push(new am4charts.ColumnSeries3D());
series.dataFields.valueY = "visits";
series.dataFields.categoryX = "country";
series.name = "Visits";
series.tooltipText = "{categoryX}: [bold]{valueY}[/]";
series.columns.template.fillOpacity = .8;
series.columns.template.propertyFields.fill = "color";

var columnTemplate = series.columns.template;
columnTemplate.strokeWidth = 2;
columnTemplate.strokeOpacity = 1;
columnTemplate.stroke = am4core.color("#FFFFFF");

chart.cursor = new am4charts.XYCursor();
chart.cursor.lineX.strokeOpacity = 0;
chart.cursor.lineY.strokeOpacity = 0;
// Enable export
chart.exporting.menu = new am4core.ExportMenu();
}); // end am4core.ready()

<!-- ==================================== CHART 2 START =================================== -->

am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

 // Create chart instance
var chart = am4core.create("rochartdiv", am4charts.XYChart);

// Add data

chart.data = [
        <?php if(isset($VAC_VS_INPOS) && !empty($VAC_VS_INPOS)){
            foreach($VAC_VS_INPOS as $V){
            if(!empty($V['REGION'])){
	?>
            {
              "REGION": "<?php echo ($V['REGION'])? $V['REGION'] : '' ?>",
              "VACANCY": <?php echo ($V['SANCTIONED'])? $V['SANCTIONED'] : '' ?>,
              "IN-POSITION": <?php echo ($V['POSITION'])? $V['POSITION'] : '' ?>},
	<?php } } } ?>
        ];
var title = chart.titles.create();
title.html = "No. of Vacancy Vs In-Positions By HQ/ZIET/REGION";
title.fontSize = 16;
title.marginBottom = 10;
title.fontWeight = "bold";
// Create axes
var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "REGION";
categoryAxis.numberFormatter.numberFormat = "#";
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.cellStartLocation = 0.1;
categoryAxis.renderer.cellEndLocation = 0.9;

var  valueAxis = chart.xAxes.push(new am4charts.ValueAxis()); 
valueAxis.renderer.opposite = true;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.title.text = "Name of the HQ/ZIET/REGION";
valueAxis.title.fontWeight = "bold";
// Create series
function createSeries(field, name) {
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.dataFields.valueX = field;
  series.dataFields.categoryY = "REGION";
  series.name = name;
  series.columns.template.tooltipText = "{name}: [bold]{valueX}[/]";
  series.columns.template.height = am4core.percent(100);
  series.sequencedInterpolation = true;
  series.tooltip.label.interactionsEnabled = true;
  series.tooltip.keepTargetHover = true;
  series.columns.template.tooltipHTML = '<a href="https://en.wikipedia.org/wiki/{category.urlEncode()}">More info</a>';
 
  var valueLabel = series.bullets.push(new am4charts.LabelBullet());
  valueLabel.label.text = "{valueX}";
  valueLabel.label.horizontalCenter = "left";
  valueLabel.label.dx = 20;
  valueLabel.label.hideOversized = false;
  valueLabel.label.truncate = false;

  var categoryLabel = series.bullets.push(new am4charts.LabelBullet());
  categoryLabel.label.text = "{name}";
  categoryLabel.label.horizontalCenter = "right";
  categoryLabel.label.dx = -10;
  categoryLabel.label.fill = am4core.color("#fff");
  categoryLabel.label.hideOversized = false;
  categoryLabel.label.truncate = false;
}

createSeries("VACANCY", "VACANCY");
createSeries("IN-POSITION", "IN-POSITION");

}); // end am4core.ready()
}
</script>