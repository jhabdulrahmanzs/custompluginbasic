<?php

if (!class_exists('employee_check')) {
    class employee_check
    {
        function __construct()
        {
            $this->slug_employee();
        }
        public function slug_employee()
        {
            $gethomeurl = get_home_url();

            $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $getslugname = str_replace($gethomeurl, '', $actual_link);
            $rmslash = preg_replace('|/|', '', $getslugname);

            if ($rmslash == 'regsiterdata') {

                add_filter('the_content',[$this, 'employee_displayrecord']);
            }
        }

        function employee_displayrecord($content)
        {
            include_once(ROOTDIR . 'includes/controller/controller_registerview.php');
            return $content;
        }
    }
}
?>