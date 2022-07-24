<?Php

  global $wpdb;
  global $table;
  $table = $wpdb->prefix . "circketscore";

  $query = $wpdb->get_results("SELECT name,runs from $table ORDER BY DESC");
// echo $query; 
$data = array();
foreach($query as $row){
    $data[] = $row;

}
print_r($data);
wp_json_encode($data);

?>