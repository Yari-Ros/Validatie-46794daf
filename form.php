<!DOCTYPE html>
<html>
<head>
    <title>A Form.</title>
</head>
    <body>
        <h1>Please fill in your private information.</h1>
        <p> Follow the instructions in the boxes below.</p> 
        <br>
  <?php
  if (isset($_REQUEST['mail']) && !empty($_REQUEST['mail'])){
    
    if (filter_var(($_REQUEST['mail']), FILTER_VALIDATE_EMAIL)){
      echo "The E-mail adress is saved.";
    }
    else {
      echo "E-Mail is invalid. Please fill in a valid E-mail adress.";
    }
  }?>
<form action="form.php" method="POST" class="form-example">
            <div class="form-example">
                <label for="name">Fill in your e-mail adress here</label>
                <input type='text' name="mail">
                <button type="submit">Send</button>
            </div>
    </form>
    </body>


</html>