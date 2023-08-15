<?php

global $wpdb;

$table_name ="wpuo_custom_faq";

?>

<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/plugins/faq-custom-plugin/assets/bootstrap.min.css">

<?php
// Read Operation
$rows = $wpdb->get_results("SELECT * FROM $table_name");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .table th {
            background-color: #343a40;
            color: #fff;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #e0e0e0;
        }

        .link-dark {
            color: #343a40;
        }

        .link-dark:hover {
            color: #007bff;
        }

        .fa-solid {
            width: 1em;
            height: 1em;
        }

        .fs-5 {
            font-size: 1.2rem;
        }

        /* Increase width of "Action" column */
        .table td:last-child {
            width: 150px;
            /* Set your desired width here */
        }

        .form-control {
            width: 100%;
            /* Change the width value as needed */
        }
    </style>

    <title>Faq Plugin</title>

</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #ff4d4d;">
    Custom Faq Plugin
    </nav>

    <div class="container">
                <a href="https://technorizen.com/_angotech_homol1/wp-admin/admin.php?page=add-faq" class="btn btn-dark mb-3">Add New</a>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->question; ?></td>
                        <td><?php echo $row->answer; ?></td>
                        <td><?php echo $row->product_id; ?></td>
                        <td>
                            <a href="https://technorizen.com/_angotech_homol1/wp-admin/admin.php?page=update-faq&id=<?php echo $row->id; ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3">
                                </i></a>
                            <a href="https://technorizen.com/_angotech_homol1/wp-admin/admin.php?page=delete-faq&id=<?php echo $row->id; ?>" onclick="return confirm('Are you sure you want to delete this faq entry?')" class="link-dark"><i class="fa-solid fa-trash fs-5">
                                </i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($rows)) : ?>
                <tr>
                    <td colspan="6">Record Not Found</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>