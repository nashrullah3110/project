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
		$user=$_POST['user'];
 		$pass=$_POST['pass'];
		$sql="select * from student where id='".$user."' and password='".$pass."'";
		$result=mysqli_query($conn,$sql);
	
			if(mysqli_num_rows($result)>0)
				{
					if($row=mysqli_fetch_assoc($result))
						{
							if ($_POST['user']=="11611127" OR $_POST['user']=="11602890") {

							$_SESSION['id']=$_POST['user'];
							$_SESSION['name']=$row['name'];
							header('Location:adminhome.php');
								# code...
							}
							else
							{
								$logerr='Your are not authorized for this.';
							}
						}
				}
			else
				{
					$logerr='Username and Password is incorrect.';
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
    height: 500px;
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
        <h1>Login Here</h1>
        <p class="err"><?php echo $logerr; ?></p>
        <form method="post" id="form" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
            <p>Username</p>
            <input type="text" class="text" name="user" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" class="text" name="pass" placeholder="Enter Password">
            <input type="submit" class="btn"  name="" value="Login">
            <input type="button" class="btn" onclick="location.href='home.html'"  name="" value="Home">
        </form>
</div>
</body>
</html>