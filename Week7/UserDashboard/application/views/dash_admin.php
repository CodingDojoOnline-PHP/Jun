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
    .right {
        display: block;
    }
    h3 {
        display: inline-block;
    }
    .table {
        margin-top: 10px;
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
              <li><a href="/users/edit">Profile</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/signin">Log off</a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="container">
          <div class="right">
              <h3>Manage Users</h3>
              <a class="btn btn-primary navbar-right" href="new_user">Add new</a>
          </div>
          <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>created_at</th>
                      <th>user_level</th>
                      <th>actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php if (isset($users)) {
                    foreach ($users as $user) {
                        echo "<tr>
                            <td>{$user['id']}</td>
                            <td>{$user['first_name']} {$user['last_name']}</td>
                            <td>{$user['email']}</td>
                            <td>{$user['created_at']}</td>
                            <td>{$user['user_level']}</td>
                            <td>";
                        if ($user['id'] !== $logged_in['user_id']) {
                                echo "<a href='/users/edit/{$user['id']}'>edit</a> | <a href='/users/remove/{$user['id']}'>remove</a>";
                            }
                        else {
                            echo "<a href='/users/edit'>edit</a>";
                        };
                        echo "</td>
                        </tr>";
                    }
                  } ?>
              </tbody>
          </table>

      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
