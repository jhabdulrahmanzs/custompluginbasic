<?php
  error_reporting(0);
function record_employee_list() {
//    echo require_once(ROOTDIR . 'assets/public.php');
?>



    <div class="wrap">
        <h2>EMPLOYEE RECORD LIST</h2>
        <div class="metabox-holder">
            <div class="postbox">
                <br>
                <a href="<?php echo admin_url('admin.php?page=record_employee_create'); ?>">
                    <button type="button" class="btn btn-outline-success btn-sm float-sm-right mr-3 ">
                    <i class="fa fa-plus-circle"></i> Add New
                    </button>
                </a>
          
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
                    <th>EDIT</th>
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
                    <td><a class="btn btn-outline-secondary btn-sm" 
                           href="<?php echo admin_url('admin.php?page=record_employee_update&id=' . $row->id); ?>">
                           <i class="fa fa-pencil" aria-hidden="true"></i> EDIT</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
            </div>
        </div>
    </div>



    <!-- DataTable option -->
    <script>
        $(document).ready( function () {
            $('#empList').DataTable({
            responsive : true,
            paging: true,
            ordering: true,
            searching: true
            } );     
        } );
    </script>
<?php
}
?>