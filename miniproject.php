<?php

$error="" ; $successmes="" ;

if($_POST)
{
    
    if(!$_POST['email'])
    {
        $error.="An email address is required<br>" ;
    }
    
    if(!$_POST['content'])
    {
        $error.="Content is required<br>" ;
    }
    
    if(!$_POST['subject'])
    {
        $error.="Subject is required<br>" ;
    }

    if ($_POST['email']&&filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) {
      $error.="email address is invalid" ;  
}

  if($error!="")
  {
         $error='<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>'; 
      
  }
  else
  {
  $emailto="me@mydomain.com" ;
  $subject=$_POST['subject']      ;
  $header="From:".$_POST['email'] ;      
  if(mail($emailto,$subject,$header))   
  {
      $successmes='<div class="alert alert-success" role="alert"><p><strong>Your message was sent</strong></p></div>'; 
      
      
  }
  else
  {
      
      $error='<div class="alert alert-danger" role="alert"><p><strong>your message could not be sent</strong></p></div>';
      
  }
  
  
  }
    
    
    
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container">
      
    <h1>Get in touch!</h1>
      
      <div id="error">
        <?php 
        echo $error.$successmes ;  
        ?>  
      </div>
      
      <form method="post">
  <fieldset class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" >
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">What would you like to ask us?</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </fieldset>
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
          
        </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
   
  </body>
</html>