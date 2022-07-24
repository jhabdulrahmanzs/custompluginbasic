<?php

class mychart
{
    public function chart_view()
    {
       // print_r("method call");
        global $wpdb;
        $table_name = $wpdb->prefix . "circketscore";

        return $wpdb->get_results("SELECT * from $table_name");
    }
}
?>
