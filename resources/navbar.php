<?php 
	session_start();
	// if the user is logged in...
	if( isset($_SESSION["user"]) && $_SESSION["user"] != null)
	{
		?>
			<p>TODO</p>
		<?php
	}
	
	// if the user is not logged in
	else
	{
		?>
			<ul>
				<li><a href="/home/login" name="action" value="Login">Login</a></li>
				<li><a href="/home/register">Register</a></li>
				<li><a href="/home/about">About Us</a></li>
				<li><a href="/home/contact">Contact Us</a></li>
			</ul>
		<?php
	}
?>