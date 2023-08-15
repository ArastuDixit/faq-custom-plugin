<?php

global $wpdb;

$table_name = "wpuo_custom_faq";

?>


<!--https://themewagon.github.io/celestialAdmin-free-admin-template/pages/forms/basic_elements.html-->
<!-- inject:css -->
<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/plugins/faq-custom-plugin/assets/style.css">
<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/plugins/faq-custom-plugin/assets/bootstrap.min.css">
 
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
  
$id = $_GET['id'];

if(isset($_POST['update'])){

$question = $_POST['question'];
$answer = $_POST['answer'];
$product_id = $_POST['product_id'];

$sql = "UPDATE $table_name SET `question`='" . $question .  "', `answer`='" . $answer . "', `product_id`='" . $product_id . "' WHERE `id`=$id";

$row = $wpdb->query($sql);

  // Check if the update was successful
  if ($row !== false) {
    echo '<div class="content-wrapper"><div class="success">Row updated successfully!</div></div>';
  } else {
    echo '<div class="content-wrapper"><div class="error">Error updating Row. Please try again.</div></div>';
  }

  $sql = "SELECT * FROM $table_name WHERE `id` =$id";
  $row = $wpdb->get_row($sql, ARRAY_A);
}



?>

<div class="">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Faq Update</h4>
            <p class="card-description">
              Faq Update
            </p>
            
            <?php
            
            $sql = "SELECT * FROM $table_name WHERE `id` =$id LIMIT 1";
            $row = $wpdb->get_row($sql, ARRAY_A);
            ?>

            <form class="forms-sample" method="post" enctype="multipart/form-data">
              
                <div class="form-group">
                  <label for="question">Question</label>
                  <input type="text" class="form-control" id="question" name="question" value="<?php echo $row['question']; ?>">
                </div>
                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea class="form-control" id="answer" name="answer" rows="8" cols="20"><?php echo $row['answer']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="product_id">Product ID</label>
                  <input type="number" class="form-control" id="product_id" name="product_id" value="<?php echo $row['product_id']; ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary"> Update Data </button>
                <a href="https://technorizen.com/_angotech_homol1/wp-admin/admin.php?page=custom-faq-plugin" class="btn btn-danger">BACK</a>
              </form>

              </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->

  <!-- partial -->
</div>
