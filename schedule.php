<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mathematics Undergraduate Student Talks</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nav-link" href="#top">Mathematics Undergraduate Student Talks</a>
        </div> <!-- /.navbar-header -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="schedule.html">Schedule a Talk</a></li>
            <li><a href="past-talks.html">Past Talks</a></li>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav> <!-- /.navbar -->

    <div class="jumbotron" style="height:150px">
      <div class="container">
        <h1>Lecture Schedule</h1>
      </div> 
    </div> 
    <div class="spacer"></div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 feature-text">
          <h1>Sign up</h1>
          <p>To sign up for a lecture, please contact us using the form below.</p>
          <?php 
          $action=$_REQUEST['action']; 
          if ($action=="")  { 
            ?> 
          <form  action="" method="POST" enctype="multipart/form-data"> 
            <input type="hidden"  name="action" value="submit"><br>
            <input type="text"    name="name"   placeholder="Name" /><br>
            <input type="text"    name="email"  placeholder="Email" /><br>
            <input type="text"    name="title"  placeholder="Lecture Title" /><br>
            <input type="text"    name="date"  placeholder="Date of Lecture" /><br>
            <textarea  rows="10" name="abstract" placeholder="Lecture Abstract"></textarea><br>
            <button  type="submit">SEND</button>
          </form>
          <?php 
          }  
          else { 
            $name=$_REQUEST['name']; 
            $email=$_REQUEST['email']; 
            $message=$_REQUEST['message'];
            $title = $_REQUEST['title'];
            $date = $_REQUEST['date'];
            $abstract = $_REQUEST['abstract'];
            if ($name==""||$email==""||$title==""||$date==""||$abstract=="") {
              echo "<h2>All fields are required, please reload and fill the form again.</h2>"; 
            }
            else {
              $subject="Undergraduate Mathematics Contact Message";       
              $from="From: $name<$email>\r\nReturn-path: $email";
              $msg="Name: $name\ntitle: $title\nDate: $date\nAbstract: $abstract";
              mail("must@math.utexas.edu", $subject, $msg, $from); 
              // mail("courtois1337@gmail.com", $subject, $msg, $from); 
              echo "<h2>Email sent!</h2>"; 
            } 
          }
          ?>
          <hr>
        </div> <!-- /.feature-text -->

      </div> <!-- /.row -->
      <div class="row">
        <div class="col-md-12 col-sm-12 feature-text">
          <h1>Lecture Calendar</h1>
          <iframe src="https://www.google.com/calendar/embed?title=Scheduled%20Talks&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=must%40math.utexas.edu&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border:solid 1px #777 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div> <!-- /.feature-text -->

      </div> <!-- /.row -->
    </div> <!-- /.container -->
    
    <footer>
      <div class="container clearfix">
        <p class="pull-left">
          <a href="https://www.facebook.com/groups/527891867328137/" ><i class="fa fa-facebook fa-fw fa-2x"></i> </a>
          <a href="https://twitter.com/popthatmatrix" ><i class="fa fa-twitter fa-fw fa-2x"></i> </a>        
        </p>
        <p class="pull-right">
          created by: <a href="http://yvescourtois.com/">Yves Courtois</a>
        </p>
      </div> <!-- /.container -->
    </footer>

    
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/ready.js"></script>
      <script>
        $(function() {
            $("form").bind("keypress", function(e) {
              if (e.keyCode == 13) return false;
            });
        });
      </script>
  </body>
</html>
