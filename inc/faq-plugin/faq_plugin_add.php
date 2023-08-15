<?php

global $wpdb;

$table_name = "wpuo_custom_faq";

?>

<style>
  #wpcontent {
    padding: 0px !important;
  }

  .success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    padding: 10px;
  }

  .error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    padding: 10px;
  }
</style>

<?php
if (isset($_POST['insert'])) {

  // Get the title from form input
  $question = $_POST['question'];
  $answer = $_POST['answer'];
  $product_id = $_POST['product_id'];
  
    // Insert the data into the database
    $sql = "INSERT INTO $table_name (`question`, `answer`, `product_id`) VALUES ('" . $question . "', '" . $answer . "', '" . $product_id . "')";
    $row = $wpdb->query($sql);

    // Check if the insert was successful
    if ($row !== false) {
      echo '<div class="content-wrapper"><div class="success">Data inserted successfully!</div></div>';
    } else {
      echo '<div class="content-wrapper"><div class="error">Error inserting Data. Please try again.</div></div>';
    }
  }

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
    .form-control {
      width: 100%;
      /* Change the width value as needed */
    }
  </style>


  <title>Add Faq</title>

</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #ff4d4d;">
     Add Faq
  </nav>

  <div class="container">
    <div class="text-center mb-4">

      <h3>Add New Faq</h3>
      <p class="text-muted">Complete the form below to add new faq</p>
    </div>
    <div class="container d-flex justify-content-center">
      <form action="" method="post" enctype="multipart/form-data" style="width:80vw; min-width:400px;">
        
        <div class="form-group">
          <div class="row mb-4">
            <label for="question"> Question </label>
            <input type="text" name="question" id="question" class="form-control">
          </div>
        </div>
        <div class="row mb-4">
            <label for="answer"> Answer </label>
            <textarea name="answer" id="answer" class="form-control" rows="8" cols="20"></textarea>
        </div>
        <div class="form-group">
          <div class="row mb-4">
            <label for="product_id"> Product ID </label>
            <input type="number" name="product_id" id="product_id" class="form-control">
          </div>
        </div>
        <button type="submit" name="insert" class="btn btn-primary"> Save Data </button>
        <a href="https://technorizen.com/_angotech_homol1/wp-admin/admin.php?page=custom-faq-plugin" class="btn btn-danger">BACK</a>
      </form>
    </div>
  </div>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>