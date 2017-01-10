<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>같은 시간 같은 이야기</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://bootstrapk.com/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

  </head>

  <body>

    <!--로그인 부분-->
    <div id="navbar" class="navbar-collapse collapse">
      <form class="navbar-form navbar-right" action="login_check.php" method="post">
        <div class="form-group">
          <input type="text" placeholder="Email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control" name="pwd">
        </div>
        <button type="submit" class="btn btn-success">Log in</button>

      </form>
    </div>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Same Time Same Story</h3>

        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="index.php">홈</a></li>
            <li><a href="#">궁금한 사람 찾기</a></li>
            <li><a href="#">나를 찾는 사람은?</a></li>
            <li><a href="#">자유 게시판</a></li>
            <li><a href="#">사이트 정보</a></li>
          </ul>
        </nav>
      </div>

 <div class="jumbotron">
       <div class="container" >
        <h1>STSS 회원가입</h1>
        <p>Please fill out the form.</p>

        <form method="post" action="signup_check.php" >
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="pwd">
            </div>
            <div class="form-group">
              <label for="pwdconfirm">Password Confirm:</label>
              <input type="password" class="form-control" name="pwdconfirm">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>

      </div>
    </div>
  </body>
</html>
