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
            <h1>Register</h1>
        </div><!-- /header -->
    
        <div data-role="content">
        		The register page has not yet been implemented.
						<form action="form.php" method="post">
        			<div data-role="fieldcontain" class="ui-hide-label">
								<label for="username">Username:</label>
								<input type="text" name="username" id="username" value="" placeholder="Username"/>
							</div>
							<div data-role="fieldcontain" class="ui-hide-label">
								<label for="password">Password:</label>
								<input type="password" name="password" id="password" value="" placeholder="Password"/>
							</div>
							<div data-role="fieldcontain" class="ui-hide-label">
								<label for="password2">Password:</label>
								<input type="password" name="password2" id="password2" value="" placeholder="Retype Password"/>
							</div>
							<div data-role="fieldcontain" class="ui-hide-label">
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" value="" placeholder="Email"/>
							</div>
        			<button type="submit" data-theme="b" name="submit" value="submit-value">Register</button>
						</form>
        </div><!-- /content -->
    
        <div data-role="footer">
            <h4>JLee, LLuo, ALeigh</h4>
        </div><!-- /footer -->

    </div><!-- /home page -->
    
</body>
</html>
