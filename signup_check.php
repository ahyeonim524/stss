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

    <!--이미지 중앙정렬-->
    <style type="text/css">
      img{
        display:block;
        margin-top: 50px;
        margin-bottom: 30px;
        margin-left: auto;
        margin-right: auto;
      }
    </style>

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


        <?php

          //email, password, passwordconfirm 받고 password==passwordconfirm인지 확인
          $received_email=$_POST['email'];
          $received_password=$_POST['pwd'];
          $received_password_confirm=$_POST['pwdconfirm'];

          //password==passwordconfirm인 경우에만 DB 저장
          if(strcmp($received_password,$received_password_confirm)==0){

            //회원가입 축하 메세지 출력
            ?>
            <img src="checked.png" alt="checked" >
            <?php

            echo '<p style="color: #41ad49; text-align: center"> 환영합니다 ! </p>';

            //mysql 연결
            $conn=mysqli_connect('localhost','root','znfnfn1002');

            if(!$conn){
              die('Could not connect : '.mysql_error);
            }

            //DB 선택
            mysqli_select_db($conn,'wybwyt');

            //쿼리문
            $sql="INSERT INTO users (`email`,`password`) VALUES('".$received_email."','".$received_password."')";
            mysqli_query($conn,$sql);
          }
          else{
            ?>
            <img src="unchecked.png" alt="unchecked">

            <?php
            //비밀번호 확인하라는 메세지 출력
            echo '<p style="color: #e44061; text-align: center"> 비밀번호를 다시 확인해주세요. </p>';
          }

         ?>
      </body>



      </div>
    </div>
  </body>
</html>
