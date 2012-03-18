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
            <a href="#view_portal" data-role="button" data-icon="arrow-r" id="home_suggestions_button">View Portal</a>
            <a href="#hubs_near_me" data-role="button" data-icon="arrow-r" id="home_my_favorites_button">Hubs Near Me</a>
            <a href="#create_hub" data-role="button" data-icon="arrow-plus">Create Hub</a>
            <a href="#my_hubs" data-role="button" data-icon="arrow-r">My Hubs</a>
        </div><!-- /content -->
    
        <div data-role="footer">
            <h4>JLee, LLuo, ALeigh</h4>
        </div><!-- /footer -->

    </div><!-- /home page -->
    
</body>
</html>
