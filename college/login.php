<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<body>
  <center><div class="login-box">
    <h1>Login</h1>
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" placeholder="Username" name="" value="">
    </div>
    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="text" placeholder="Password" name="" value="">
    </div>
    <button><a href="nominations.html">Login</a></button>
<br>Not yet registered? <a href="registerpanell.php"><b>Register Here</b></a>
</center>
<style>
@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(user.jpg) no-repeat;
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float:left;
  font-size: 40px;
  border-bottom: 6px solid #ffffff;
  margin-bottom: 50px;
  padding: 13px 0
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #ffffff;
}
.textbox i{
  width: 26px;
  float:left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0  10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #ffffff;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
</style>
