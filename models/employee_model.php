<?php

    class employee_path
    {
        public function table_view()
        {
           // print_r("method call");
            global $wpdb;
            $table_name = $wpdb->prefix . "employeeform";

            return $wpdb->get_results("SELECT * from $table_name");
        }
    }
?>