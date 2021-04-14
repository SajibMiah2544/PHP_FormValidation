<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Validation By PHP</title>
  </head>
  <body>
<section>
<div class="container">  
    <form id="contact" action="post.php" method="post">
            <h3 class="my-2">Registration form</h3>
            <fieldset>
            <input placeholder="Enter Your name" name="fname" type="text" tabindex="1" autofocus>
            <?php 
            if(isset($_GET['name_err'])){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_GET['name_err']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }?>
            </fieldset>
            <fieldset>
            <input placeholder="Enter Your Email Address" name="email" type="text" tabindex="2">
            <?php 
            if(isset($_GET['email_err'])){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_GET['email_err']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }?>
            </fieldset>
            <fieldset>
            <input placeholder="Enter Your Password" name="password" type="text" tabindex="3">
            <?php 
            if(isset($_GET['pass_err'])){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_GET['pass_err']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }?>
            </fieldset>
            <fieldset>
            <input placeholder="Enter Your Confirm Password" name="repassword" type="text" tabindex="3">
            <?php 
            if(isset($_GET['repass_err'])){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_GET['repass_err']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }?>
            </fieldset>
            <fieldset>
            <textarea placeholder="Type your Message Here with in 120 word...." name="text" tabindex="5"></textarea>
            <?php 
            if(isset($_GET['text_err'])){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_GET['text_err']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }?>
            </fieldset>
            <fieldset>
            <label for="gender" class="d-block">Select Your Gender :</label>
            <input type="radio" name="gender" class="mx-1" value="male">Male
            <input type="radio" name="gender" class="mx-1" value="female">Female
            <input type="radio" name="gender" class="mx-1" value="other">Other
            <?php 
            if(isset($_GET['gender_err'])){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_GET['gender_err']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }?>
            </fieldset>
            <fieldset>
            <button name="submit" type="submit" id="contact-submit">Submit</button>
            </fieldset>
            <fieldset>
                <a href="index.php" class="btn btn-success" id="contact-submit">Reset</a>
            </fieldset>
    </form>
</div>
</section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
