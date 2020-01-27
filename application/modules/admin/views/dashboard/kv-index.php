<!DOCTYPE html>
<?php 
	$segment = $this->uri->segment(4);
	$segment = ($segment) ? $segment : null ;
	$name_array = get_name_by_code($segment);
	if($name_array['status']){
	//$final_name1  = 'Designations / Posts' ;
	$final_name1  = '' ;
	$final_name2  = 'No. of Sanctioned / In-Positions / Vacancy of Designations at KV'.' '.$name_array['label'].'- '.$name_array['name'] ;
	}else{
	$school_id = $this->session->userdata['school_id'];
	$session_code = getCodeBySchoolId($school_id);
	$name_array = get_name_by_code($session_code);
	$final_name1  = '' ;
	$final_name2  = 'No. of Sanctioned / In-Positions / Vacancy of Designations at KV'.' '.$name_array['label'].'- '.$name_array['name'] ;
	} 
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="AIN">
        <meta name="author" content="">
        <title><?php echo $title; ?></title>
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
    </head>
    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">KENDRIYA VIDYALAYA DASHBOARD</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="mr-5">Total Employee Registered</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left" style="font-size: 20px"><?php  echo ($total_user)? $total_user : 0 ; ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                             <div class="mr-5">New Employee Registered</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left" style="font-size: 20px"><?php  echo ($total_current_user)? $total_current_user : 0 ; ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                            <div class="mr-5">Total Transfer Request Received </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left" style="font-size: 20px"><?php  echo ($total_transfre)? $total_transfre : 0 ; ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-briefcase" aria-hidden="true"></i>
                            </div>
                            <div class="mr-5">Total Vacancy  </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left" style="font-size: 20px"><?php $total_vancy =  $total_vacancy->total_sanction_post - $total_vacancy->total_inposition_post ;echo ($total_vancy)? $total_vancy : 0 ; ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--================================== CHART START =================================-->
            <div class="row ml-1 mr-1">
                <div class="col-md-12 text-center btn btn-block bg-primary text-white" style=" line-height: 50px; font-size: 18px;">
                    <?php echo strtoupper($KV->school_name); ?>
                </div>
            </div>
           
        </div>
		<div class="row">
          <div class="col-xl-12 col-sm-12 mb-12">
              <div id="chartdiv" style="height:500px;"></div>
          </div>
        </div>
		  <hr>
        <div class="row">
          <div class="col-xl-12 col-sm-12 mb-12">
              <div id="rochartdiv"></div>
          </div>
        </div>
    </div>

<script src="<?php echo base_url(); ?>js/graph/core.js"></script>
<script src="<?php echo base_url(); ?>js/graph/charts.js"></script>
<script src="<?php echo base_url(); ?>js/graph/animated.js"></script>

<script>
am4core.ready(function() {
// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart3D);

// Add data
chart.data = [
  <?php if(isset($school_by_post) && !empty($school_by_post)){
	  $DH=100*COUNT($VAC_VS_INPOS);
 foreach($school_by_post as $post){
	?>
{
  "country": "<?php echo ($post['designation_name'])? ''.$post['designation_name'].' ,'.$post['subject_name'] : '' ?>",
  "visits": <?php echo ($post['total'])? $post['total'] : '' ?>,
  "color": chart.colors.next()
},
	 <?php } } ?>
   ];
var DH='<?php echo $DH; ?>';
    if(DH>1000){DH=1000;}
    if(DH<200){DH=200;}
$('#rochartdiv').css('height', DH+'px');
var title = chart.titles.create();
title.text = "No. of Employee Registered By Designation";
title.fontSize = 20;
title.marginBottom = 30;
// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.labels.template.rotation = -20;
categoryAxis.renderer.labels.template.hideOversized = false;
categoryAxis.renderer.minGridDistance = 20;
categoryAxis.renderer.labels.template.horizontalCenter = "middle";
categoryAxis.renderer.labels.template.verticalCenter = "middle";
categoryAxis.tooltip.label.rotation = 270;
categoryAxis.tooltip.label.horizontalCenter = "right";
categoryAxis.tooltip.label.verticalCenter = "middle";

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.title.text = "No of Employee Registered";
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
</script>

   
<!-- ==================================== CHART 2 START =================================== -->
<script>
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
                
            if(!empty($V['NAME'])){
                $V['DataUrl']=($V['KVC'])? base_url().'admin/dashboard/index/'.$V['KVC'] : '';
	?>
            {
              "Region"      : "<?php echo ($V['NAME'])? $V['NAME'] : '' ?>",
              "Sanctioned"  : <?php echo ($V['SANCTIONED'])? $V['SANCTIONED'] : 0 ?>,
              "InPosition"  : <?php echo ($V['POSITION'])? $V['POSITION'] : 0 ?>,
              "Vacancy"     : <?php echo ($V['SANCTIONED']-$V['POSITION'])? $V['SANCTIONED']-$V['POSITION'] : 0 ?>,
              "LinkUrl"     : "<?php echo ($V['DataUrl'])? $V['DataUrl'] : '' ?>"},
              
	<?php } } } ?>
        ];
      
var title = chart.titles.create();
title.html = "<?php echo $final_name2 ; ?>";
title.fontSize = 16;
title.marginBottom = 10;
title.fontWeight = "bold";
// Create axes
var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
// Modify chart's colors
chart.colors.list = [
  am4core.color("#028eca"),
  am4core.color("#ff9933"),
  am4core.color("#20c997")
  
];
categoryAxis.dataFields.category = "Region";
categoryAxis.numberFormatter.numberFormat = "#";
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.cellStartLocation = 0.1;
categoryAxis.renderer.cellEndLocation = 0.9;
categoryAxis.renderer.labels.template.rotation = 0; 
categoryAxis.renderer.labels.template.propertyFields.url = "LinkUrl"
categoryAxis.renderer.labels.template.fill = am4core.color("#014A69");
var  valueAxis = chart.xAxes.push(new am4charts.ValueAxis()); 
valueAxis.renderer.opposite = true;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.title.text = "<?php echo $final_name1 ; ?>";
valueAxis.title.fontWeight = "bold";
// Create series
function createSeries(field, name) {
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.dataFields.valueX = field;
  series.dataFields.categoryY = "Region";
  series.name = name;
  series.columns.template.tooltipText = "{name}: [bold]{valueX}[/]";
  series.columns.template.height = am4core.percent(100);
  series.sequencedInterpolation = true;
  series.tooltip.label.interactionsEnabled = true;
  series.tooltip.keepTargetHover = true;
  series.columns.template.tooltipHTML = '<a href="{LinkUrl}">Show Details</a>';
 
  var valueLabel = series.bullets.push(new am4charts.LabelBullet());
  valueLabel.label.text  = "{valueX}";
  valueLabel.label.horizontalCenter = "left";
  valueLabel.label.dx = 20;
  valueLabel.label.hideOversized = false;
  valueLabel.label.truncate = false;

  var categoryLabel = series.bullets.push(new am4charts.LabelBullet());
  categoryLabel.label.text = "{name}";
  categoryLabel.label.fontSize = 12;
  categoryLabel.label.horizontalCenter = "right";
  categoryLabel.label.dx = -10;
  categoryLabel.label.fill = am4core.color("#fff");
  categoryLabel.label.hideOversized = false;
  categoryLabel.label.truncate = false;
}

createSeries("Sanctioned", "Sanctioned");
createSeries("InPosition", "InPosition");
createSeries("Vacancy", "Vacancy");

}); // end am4core.ready()
</script>