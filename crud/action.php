<?php
require_once 'db.php';

$d = new Database();

// print_r( $d->readData());
// echo $d->totalRowCount();

// get all users
if (isset($_POST['action']) && $_POST['action'] == "view") {
    $output = "";
    $data = $d->readData();

    if ($d->totalRowCount() > 0) {
        $output .= ' <table class="table table-striped table-sm table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>';

        foreach ($data as $row) {
            $output .= ' <tr class="text-center text-secondary">
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    <td>
                                        <a href="#" title="View Details" class="text-success"><i
                                                class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                                        <a href="#" title="Edit Details" class="text-primary"><i
                                                class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                                        <a href="#" title="Edit Details" class="text-danger"><i
                                                class="fas fa-trash-alt fa-lg"></i></a>
                                    </td></tr>';
        }

        $output .= '</tbody>
            </table>';

        echo $output;
    }else {
        echo '<h3 class=""text-center text-secondary mt-5>: (No User Present)</h3>';
    }
}
?>