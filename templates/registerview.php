<div id="primary" class="content-area">
    <div id="main" class="site-main" role="main">

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

