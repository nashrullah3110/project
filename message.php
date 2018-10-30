<?php $logerr=''; 
session_start();
$conn=mysqli_connect('localhost','root','','school');
if(!$conn)
{
	die("connection failed");
}
else
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{ 
        $name=$_SESSION['name'];
		$message=$_POST['msg'];
		$sql="update student set message='$message';";
                    if(mysqli_query($conn,$sql))
                       {
                            $logerr="Uploaded Successfully.";
                       }
                       else
                       {
                        $logerr="Not Uploaded";
                       }
	}			
}
mysqli_close($conn);?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
	  body{
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 350px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
body
{
    background:
    height: 400px;
    width: 100%;
    background-position: center;
    background:url(BUILDING.jpg);
    height: 100vh;
    background-position: center;


  }

.loginbox p{
    margin:0px;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.text
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
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
}
.btn:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.err
{
	color: red;
}
	</style>
</head> 
<body>
	<div class="loginbox">
        <h1>Message</h1>
        <p class="err"><?php echo $logerr; ?></p>
        <form method="post" id="form" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
            <p>Enter Message</p>
            <input type="text" class="text" name="msg" placeholder="Enter Message">
            <input type="submit" class="btn"  name="" value="Post">
            <input type="button" class="btn" onclick="location.href='adminhome.php'"  name="" value="AdminHome">
        </form>
</div>
</body>
</html>