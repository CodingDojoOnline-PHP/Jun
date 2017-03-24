<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style media="screen">
        .container {
            margin: 70px;
        }
        .button {
            margin: 10px;
            padding-left: 133px;
        }
        .title {
            margin: 30px 0px;;
        }
        .right {
            margin-left: 474px;
        }
    </style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">User Dashboard</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Dashboard</a></li>
              <li><a href="#">Profile</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Log off</a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
          <div class='container'>
              <h3 class="title">Add a new user</h3>
              <a class="right btn btn-primary" href="#">Return to Dashboard</a>
              <?php echo $this->session->flashdata('registration'); ?>

              <?php echo validation_errors(); ?>

              <?php echo form_open('/main/validate'); ?>

                <h5>First Name:</h5>
                <input type="text" name="first_name" value="" size="27" />

                <h5>Last Name:</h5>
                <input type="text" name="last_name" value="" size="27" />

                <h5>Email Address</h5>
                <input type="text" name="email" value="" size="27" />

                <h5>Password</h5>
                <input type="password" name="password" value="" size="27" />

                <h5>Confirm Password</h5>
                <input type="password" name="passconf" value="" size="27" />

                <div class="button"><input class="btn-success" type="submit" name="register" value="Create" /></div>

                </form>
          </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
