<?php
include "connection.php";
	if(isset($_POST['email_login'])&&isset($_POST['pass_login']))
	{
		echo "here";
		$user_login = $_POST['email_login'];
		$pass = $_POST['pass_login'];
		$pass_md5 = md5($pass);
		if(!empty($user_login)&&!empty($pass))
		{
			$query = "SELECT id FROM user_pass WHERE email_id='$user_login' AND password='$pass_md5'";
			$query_run = mysql_query($query);
			if($query_run)
			{
				$query_run_row = mysql_num_rows($query_run);
				if($query_run_row==0)
				{
					?>
					<script type = "text/javascript">
					<!--
						alert('Username and Password does not match.');
					-->
					</script>
					<?php
				}
				else if($query_run_row==1)
				{
					$user_id = mysql_result($query_run,0,Id);
					$_SESSION['user_id'] = $user_id;
					header('Location: index.php');
				}
			}
		}
	}
	if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['username'])&&isset($_POST['pass'])&&isset($_POST['pass_again'])&&isset($_POST['birth_day'])&&isset($_POST['birth_month'])&&isset($_POST['birth_year'])&&isset($_POST['sex']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$pass_again = $_POST['pass_again'];
		$birth_day = $_POST['birth_day'];
		$birth_month = $_POST['birth_month'];
		$birth_year = $_POST['birth_year'];
		$sex = $_POST['sex'];
		$md5_pass=md5($pass);
		if(!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($username)&&!empty($pass)&&!empty($pass_again)&&!empty($birth_day)&&!empty($birth_month)&&!empty($birth_year)&&!empty($sex))
		{
			if($pass==$pass_again)
			{
				$query_reg="INSERT INTO `user_pass`(`Id`, `first_name`, `last_name`, `email_id`, `user_name`, `password`, `gender`, `bday_day`, `bday_month`, `bday_year`) VALUES ('','$fname','$lname','$email','$username','$md5_pass','$sex','$birth_day','$birth_month','$birth_year')";
				$query_run_reg=mysql_query($query_reg);
				if($query_run_reg)
				{
					?>
					<script type="text/javascript">
						alert("Account Created. Please Log IN.")
					</script>
					<?php
				}
			}
			else
			{
				echo "password's don't match.";
			}
		}

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SNS</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			.bg1
			{
				background-color: #000000;
				color:#d3d834;
				font-size: 20px;
			}
			.bg2
			{
				color:#010504;
				font-size: 30px;
				font-weight: bold;
			}
			input
			{
				border-radius: 10px;
			}
			#button
			{
				background-color:#621d9b;
				border-radius: 0px;
			}
			#footer
			{
				background-color: #3c4647;
				font-size:20px;
				color:#ffffff;
				text-align:right;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid bg1">
			<br/>
			<div class="row">
				<div class="col-md-3">
					<p style="font-size:30px;">Hola!</p>
				</div>
				<div class="col-md-9" style="text-align:right">
					<form action="index.php" method="POST">
						Email: <input type="text" placeholder=" Email" name="email_login">
						Password: <input type="password" placeholder=" *********" name="pass_login">
						&nbsp;
						<input type="submit" value="Log In" id="button">
					</form>
				</div>
				<br/><br/>
			</div>
		</div>
		<br/><br/>
		<div class="container-fluid bg2">
			<center>
				OR SIGN UP HERE
				<br/><br/>
				<form action="login.php" method="POST">
				<input type="text" placeholder=" First Name" name="fname" style="width:25%" required/>
				<input type="text" placeholder=" Last Name" name="lname" style="width:25%" required/>
				<br/><br/>
				<input type="text" placeholder=" Email Address" name="email" style="width:50%" required/><br/><br/>
				<input type="text" placeholder=" UserName" name="username" style="width:50%" required/><br/><br/>
				<input type="Password" placeholder=" Enter Password" name="pass" style="width:50%" required/><br/><br/>
				<input type="password" placeholder=" Enter Password again" name="pass_again" style="width:50%" required/><br/><br/>
				Birthday<br/>
				<select name="birth_day" required/>
				<option value="0">Day</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>
				<select name="birth_month" required/>
					<option value="0">Month</option>
					<option value="January">Jan</option>
					<option value="Feburary">Feb</option>
					<option value="March">Mar</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">Aug</option>
					<option value="September">Sept</option>
					<option value="October">Oct</option>
					<option value="November">Nov</option>
					<option value="December">Dec</option>
				</select>
				<select name="birth_year" required/>
					<option value="0">Year</option>
					<option value="2017">2017</option>
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
					<option value="1979">1979</option>
					<option value="1978">1978</option>
					<option value="1977">1977</option>
					<option value="1976">1976</option>
					<option value="1975">1975</option>
					<option value="1974">1974</option>
					<option value="1973">1973</option>
					<option value="1972">1972</option>
					<option value="1971">1971</option>
					<option value="1970">1970</option>
					<option value="1969">1969</option>
					<option value="1968">1968</option>
					<option value="1967">1967</option>
					<option value="1966">1966</option>
					<option value="1965">1965</option>
					<option value="1964">1964</option>
					<option value="1963">1963</option>
					<option value="1962">1962</option>
					<option value="1961">1961</option>
					<option value="1960">1960</option>
					<option value="1959">1959</option>
					<option value="1958">1958</option>
					<option value="1957">1957</option>
					<option value="1956">1956</option>
					<option value="1955">1955</option>
					<option value="1954">1954</option>
					<option value="1953">1953</option>
					<option value="1952">1952</option>
					<option value="1951">1951</option>
					<option value="1950">1950</option>
					</select>
					<br/><br/>
					<input type="radio" name="sex" value="Male" required/> Male
					<input type="radio" name="sex" value="Female" required/> Female<br/><br/>
					<input type="submit" value="Create an account" style="background-color:#4a9b18; color:white; font-size:25px; width:20%; ">
					<br/><br/>
				</form>
			</center>
		</div>
		<div class="container-fluid" id="footer">
			
			&copy SNS (Made by Atishay)
			<br/>
		</div>
	</body>
</html>