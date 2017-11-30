<!--DC Scott-->

<!DOCTYPE HTML>

<html lang="en">

<head>
 <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type=text/css  href="sbs_add_stylesheet.css">
  <meta charset="utf-8">
	
	<title>Sign Up</title>
	
</head>

<body>

<?php include 'navigation.php';?>

  <h1 class="below_menu_container">Sign Up</h1>
<img class="logo" src="img/simpson_bookstore_logo.png" alt="Bookstore" />
<!-- start sign-up form from website-->
<form class="form-horizontal">
  <fieldset>
    <legend>Sign Up</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Please email me when there are new specials!
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Payment Method</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Credit Card
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Debit Card
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10">
    <!-- this is the start of the input box to keep-->    
        <input type="password" class="form-control" id="inputPassword" placeholder="Card Number">
    <!-- End input box to keep-->    
    </div>
      </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</select>
</form>
</div>
  <!-- end sign-up form from website-->
  <footer>Copyright &copy; 2017, DeVaughn &amp; Annie</footer>
</body>
</html>
 