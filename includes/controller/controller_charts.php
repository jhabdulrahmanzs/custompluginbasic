<?php
 require_once(ROOTDIR .'././models/charts_model.php');

 $query=new mychart();
 //print_r($query);
 $data=$query->chart_view();
 //echo $data;
//$data1= json_encode($data);

// $data2=json_decode($data1);
//  if($data==$data2)
//  {
//     echo "both are same";
//  }
//  else
//  {
//     echo "both are different";
//  }

$count_result=$query->chart_count_view();
//$count=json_encode($count_result);

 require_once(ROOTDIR .'././templates/chartview.php');

?>