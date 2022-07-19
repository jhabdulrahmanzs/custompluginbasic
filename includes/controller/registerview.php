<?php
 require_once(ROOTDIR .'././models/employee_model.php');

 $query=new employee_path();
 //print_r($query);
 $data=$query->table_view();
 //print_r($data);

 require_once(ROOTDIR .'././templates/registerview.php');

?>