<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
{
    height: 400px;
    width: 100%;
    background-position: center;
    background-image:url(building.jpg);
    height: 100vh;
    background-position: center;


  }
  .loginbox{
    width: 320px;
    height: 400px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
  .btn
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    width: 200px;
}
.btn:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.button
{
 	border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    width: 100px;
    margin-left: 150px;

}
.button:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
	</style>

</head>
<body>
<body>
	<div class="loginbox">
		<input type="button" class="button" onclick="location.href='logout.html'"  name="" value="Logout">
        <h1>Welcome <?php echo $_SESSION['name'];  ?></h1>
        <center>
        <form method="post" id="form">
            <input type="button" class="btn"  name=""onclick="location.href='admission.html'" value="New Admission"><br><br>
            <input type="button" class="btn" onclick="location.href='home.html'"  name="" value="Home">
            <br><br>
            <input type="button" class="btn" onclick="location.href='message.php'"  name="" value="Upload Message">
        </form></center>
</div>
</body>
</html>