<?php

global $wpdb;

$table_name = "wpuo_custom_faq";

$id = $_GET['id'];

// Check if the request is a POST request and if ID is set and equal to 

  // Sanitize the ID variable
  $id = intval($id);
  

  // Delete the row from the database
  $sql = "DELETE FROM $table_name WHERE `id` = $id";
  $result = $wpdb->query($sql);
  
  // Check if the delete was successful
  if ($result !== false) {
    ?>
        <script>
            location.href = "https://technorizen.com/_angotech_homol1/wp-admin/admin.php?page=custom-faq-plugin";
        </script>
    <?php

  } else {
    echo '<div class="content-wrapper"><div class="error">Error deleting Row. Please try again.</div></div>';
    echo '<div class="content-wrapper"><div class="error">' . $wpdb->last_error . '</div></div>';
    echo '<div class="content-wrapper"><div class="error">' . $sql . '</div></div>';
  }
?> 
