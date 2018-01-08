
<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>

<body>
  <div class="container content">
    <div class="row">
      <div class="col-md-2 hidden-xs"></div>
      <div class="col-md-8 col-sm-12">
          <h1>Simple Registration Form</h1>
          <article>
              <p>For basic fools that still use PHP < 5.5. <br>
              Made for a Canadian client with dual language requirement.</p>

              <form action="insert.php">
                
                <input type="text" name="is_French"  value="no" style="display:none;"> <br><br>

                Name:<br>
                <input type="text" name="name" required><br>
                
                Address:<br>
                <input type="text" name="address"><br>
                
                City:<br>
                <input type="text" name="city"><br>
                
                Province:<br>
                <input type="text" name="province"><br>
                
                Postal Code:<br>
                <input type="number" name="postal_Code" maxlength="6"><br><br>
                
                <p>May we contact you by email to complete a quick survey on your experience?</p>  
                <span><p>If yes, email:<p> <input type="email" name="email" required></span> <br><br>
                
                <input type="submit" value="Submit">
              </form>
          </article>
      </div>
    </div>
  </div>
</body>
</html>
