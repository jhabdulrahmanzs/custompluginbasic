<?php
class database_table
{

    function employee_form()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . "employeeform";
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table_name (
                `id` int(10) NOT NULL AUTO_INCREMENT,
                `firstname` varchar(100) NOT NULL,
                `lastname` varchar(100) NOT NULL,
                `age` int(10) NOT NULL,
                `contact` int(15) NOT NULL,
                `address` varchar(100) NOT NULL,
                PRIMARY KEY (`id`)
              ) $charset_collate; ";
        return $sql;
    }

    function register_form()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . "registerform";
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table_name (
                `id` int(10) NOT NULL AUTO_INCREMENT,
                `firstname` varchar(100) NOT NULL,
                `lastname` varchar(100) NOT NULL,
                `email` varchar(100) NOT NULL,
                `age` int(10) NOT NULL,
                `contact` int(15) NOT NULL,
                `address` varchar(100) NOT NULL,
                `password` varchar(100) NOT NULL,
    
                PRIMARY KEY (`id`)
              ) $charset_collate; ";
        return $sql;
    }

    function circket_score()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . "circketscore";
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table_name (
            `id` int(10) NOT NULL AUTO_INCREMENT,
            `player_name` varchar(100) NOT NULL,
            `runs` int(15) NOT NULL,

            PRIMARY KEY (`id`)
          ) $charset_collate; ";
        return $sql;
    }
}
?>