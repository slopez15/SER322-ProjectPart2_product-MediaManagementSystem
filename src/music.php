<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Music</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
    
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
    margin-bottom: 0;
    border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 690px}
    
    /* Set gray background color and 100% height */
    .sidenav {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
    background-color: #555;
    color: white;
    padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
    .sidenav {
    height: auto;
    padding: 15px;
    }
    .row.content {height:auto;}
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Team 10</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#">Orders</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-sm-2 sidenav">
          <div class="filters">
            <div class="col-lg-6">
                </div><!-- /.col-lg-6 -->
                <br><br>
                <h1>Filters</h1>
                <a class="btn btn-default btn-lg" href="#">Less than $1</a>
                <a class="btn btn-default btn-lg" href="#">More than $1</a>
              </div>
              <br><br>
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Category
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="music.php">Music</a></li>
                  <li><a href="video.php">Video</a></li>
                  <li><a href="ebook.php">Ebook</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-8 text-left">
              <h1>Music</h1>
              <p>This is the music collection page</p>
              <hr>
              <h3>Music list</h3>
			  <script type = "text/javascript" src = "jquery-1.12.3.min.js">
				
					function Event(){
						$.ajax({
							type: 'POST'
							url: 'musiclist.php',
							success : function("Sucess"){
								alert("Sucess");
							}
						});
					}
			  
			  </script>
              <?php include 'musiclist.php';?>
			  <input type = "submit" name = "submit" value = "Purchase">
            </div>
            <div class="col-sm-2 sidenav">
              <div class="well">
                <p>Search</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <footer class="container-fluid text-center">
          <p>Copyright 2016 Online Store</p>
        </footer>
      </body>
    </html>