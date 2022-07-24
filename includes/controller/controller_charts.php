<?php
require_once(ROOTDIR .'././models/charts_model.php');

$query=new mychart();
$data=$query->chart_view();

wp_json_encode($data);
// print_r(wp_json_encode($data));
// return $data;

require_once(ROOTDIR .'././templates/chartview.php');

?>

