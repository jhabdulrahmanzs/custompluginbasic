<?php

    class mychart
    {
        public function chart_view()
        {
           // print_r("method call");
            global $wpdb;
            $table_name = $wpdb->prefix . "charts";

            return $wpdb->get_results("SELECT district from $table_name");
        }
        public function chart_count_view()
        {
           // print_r("method call");
            global $wpdb;
            $table_name = $wpdb->prefix . "charts";

            return $wpdb->get_results("SELECT vote_count from $table_name");
        }
    }
?>