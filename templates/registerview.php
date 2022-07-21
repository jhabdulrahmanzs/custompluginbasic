<div id="primary" class="content-area">
    <div id="main" class="site-main" role="main">
        <?php
        // Direct call in View page 
        // global $wpdb;
        // $table_name = $wpdb->prefix . "employeeform";
        // $rows = $wpdb->get_results("SELECT * from $table_name");

        //using Model get this data 

        // include(ROOTDIR .'./models/employee_model.php');
        // echo get_template_directory_uri();
        //echo "pravin";
        // $query=new employee_path();
        //print_r($query);
        // $data=$query->table_view();
        //  print_r($data);
        // require_once(ROOTDIR .'./includes/include_plugin.php');

        ?>
        <table id="empList" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th> EMAIL </th>
                    <th>AGE</th>
                    <th>CONTACT</th>
                    <th>ADDRESS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->firstname; ?></td>
                        <td><?php echo $row->lastname; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->age; ?></td>
                        <td><?php echo $row->contact; ?></td>
                        <td><?php echo $row->address; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>