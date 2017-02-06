<?php
  require_once('../private/initialize.php');

  // Set default values for all variables the page needs.

  // if this is a POST request, process the form
  // Hint: private/functions.php can help

    // Confirm that POST values are present before accessing them.

    // Perform Validations
    // Hint: Write these in private/validation_functions.php

    // if there were no errors, submit data to database

      // Write SQL INSERT statement
      // $sql = "";

      // For INSERT statments, $result is just true/false
      // $result = db_query($db, $sql);
      // if($result) {
      //   db_close($db);

      //   TODO redirect user to success page

      // } else {
      //   // The SQL INSERT statement failed.
      //   // Just show the error, not the form
      //   echo db_error($db);
      //   db_close($db);
      //   exit;
      // }

?>



<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    // TODO: display any form errors here
    // Hint: private/functions.php can help
  function validate() {

    if(!isset($_POST["first_name"])) {
        printf("First name not set");
        return false;
      }

      if(!isset($_POST["last_name"])) {
        printf("Last name not set");
        return false;
      }

      if(!isset($_POST["email"])) {
        printf("Email not set");
        return false;
      }

      if(!isset($_POST["username"])) {
        printf("username not set");
        return false;
      }

      if(!has_length($_POST["first_name"], ['min' => 2, 'max' => 255])) {
        printf("First name must be between 2 and 255 characters long");
        return false;
      }

      if(!has_length($_POST["last_name"], ['min' => 2, 'max' => 255])) {
        printf("Last name must be between 2 and 255 characters long");
        return false;
      }

      if(!has_length($_POST["username"], ['min' => 8, 'max' => 255])) {
        printf("username must be between 8 and 255 characters long");
        return false;
      }

      if(!has_length($_POST["email"], ['min' => 8, 'max' => 255])) {
        printf("email must be between 0 and 255 characters long");
        return false;
      }

      return true;
    }







    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(validate() == true) {
             print("First name: " . $_POST["first_name"]
      . ", Last name: " . $_POST["last_name"]
      . ", Email: " .  $_POST["email"]
      . ", Username: " . $_POST["username"]);
      }
    }


    
  ?>

  <!-- TODO: HTML form goes here -->


  <form method="POST" action="register.php">
    First name: &nbsp;<input type="text" name="first_name" /><br/>
    Last name: &nbsp;&nbsp;<input type="text" name="last_name" /><br/>
    Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" /><br/>
    Username: &nbsp;&nbsp;<input type="text" name="username" /><br/>
    <input type="submit" name="submit" /><br/>
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
