<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">Team 10</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="settings.php">Settings</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php">Dashboard</a></li><br>
            <li><a href="orders.php">View Orders<span class="sr-only">(current)</span></a></li>
            <li><a href="inv.php">View Inventory</a></li><br>

            <li><a href="add.php">Add to Inventory</a></li>
            <li><a href="delete.php">Delete Inventory</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://piano-play.com/tax.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail" onclick="location.href='orders.php'">
              <h4>Orders</h4>
              <span class="text-muted">All Orders</span><br>
              <input type="button" class="btn" onclick="location.href='orders.php'" value="Show">
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://www.clker.com/cliparts/t/B/a/6/6/E/add-button-md.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Add</h4>
              <span class="text-muted">Add to Inventory</span><br>
                            <input type="button" class="btn" onclick="location.href='add.php'" value="Show">

            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://www.clker.com/cliparts/F/b/Y/s/V/A/delete-record-md.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Delete</h4>
              <span class="text-muted">Delete from Inventory</span><br>
                            <input type="button" class="btn" onclick="location.href='delete.php'" value="Show">

            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://juvotec.com/wp-content/uploads/2015/03/inventory.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>View</h4>
              <span class="text-muted">View Inventory</span><br>
                            <input type="button" class="btn" onclick="location.href='inv.php'" value="Show">

            </div>
          </div>

         

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
