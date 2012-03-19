<!DOCTYPE html> 
<html> 
	<head> 
	<title>FOURGATE</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<script src="home.js" type="text/javascript"></script>
    </head> 
<body> 

    <div data-role="page" id="home"> <!-- home page -->
 
        <div data-role="header">
					<a data-rel="back" data-icon="back" data-iconpos="notext"></a>
					<a href="home.php" data-icon="home" data-theme="b" data-iconpos="notext"></a>
					<a href="sign_in.php" data-role="button" data-mini="true">Sign In</a>
            <h1>Sign In</h1>
        </div><!-- /header -->
    
        <div data-role="content">
        	The login feature has not yet been implemented.
        		<form action="form.php" method="post">
								<input type="text" name="username" id="username" value="" placeholder="Username"/>
								<input type="password" name="password" id="password" value="" placeholder="Password"/>
        			<button type="submit" name="submit" value="submit-value">Login</button>
        		</form>
        		<a href="register.php" data-theme="b" data-role="button">Register</a>
        </div><!-- /content -->
    
        <div data-role="footer">
            <h4>JLee, LLuo, ALeigh</h4>
        </div><!-- /footer -->

    </div><!-- /home page -->
    
</body>
</html>
