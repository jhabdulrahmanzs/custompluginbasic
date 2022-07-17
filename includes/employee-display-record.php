<?php



function employee_displayrecord(){
    ?>
   <div  id="primary" class="content-area">
    <div id="main" class="site-main" role="main">
    <?php
        global $wpdb;
        $table_name = $wpdb->prefix . "employeeform";

        $rows = $wpdb->get_results("SELECT * from $table_name");
        ?>

        <table  id="empList" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FIRST</th>
                    <th>LAST</th>             
                    <th>AGE</th>
                    <th>CONTACT</th>
                    <th>ADDRESS</th>
                    <!-- <th>EDIT</th> -->
                </tr> 
            </thead>
            <tbody>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->firstname; ?></td>
                    <td><?php echo $row->lastname; ?></td>
                    <td><?php echo $row->age; ?></td>
                    <td><?php echo $row->contact; ?></td>
                    <td><?php echo $row->address; ?></td>
                  
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php


}
?>





