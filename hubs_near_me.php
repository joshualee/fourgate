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

    <div data-role="page" id="list"> <!-- hubs near me -->
    
        <div data-role="header">
            <h1>Hubs Near Me (List)</h1>
            <a href="home.php" data-role="button" data-icon="home">Home</a>
        </div><!-- /header -->
    
        <div data-role="content">	
        	<form class="ui-listview-filter ui-bar-c" role="search">
        			<input placeholder="Filter HUBS" data-type="search" class="ui-input-text ui-body-c">
        	</form>
        	List of HUBS (not yet implemented)
        	<a href="#map" data-role="button"> Switch to Map View </a>
        </div><!-- /content -->
    
        <div data-role="footer">
            <h4>JLee, LLuo, ALeigh</h4>
        </div><!-- /footer -->
    </div> <!-- /hubs near me -->
    
    
    <div data-role="page" id="map"> <!-- hubs near me -->
    
        <div data-role="header">
            <h1>Hubs Near Me (Map)</h1>
            <a href="home.php" data-role="button" data-icon="home">Home</a>
        </div><!-- /header -->
    
        <div data-role="content">	
        	Map of HUBS (not yet implemented)
        	<a href="#list" data-role="button"> Switch to List View </a>
        </div><!-- /content -->
    
        <div data-role="footer">
            <h4>JLee, LLuo, ALeigh</h4>
        </div><!-- /footer -->
        
    </div> <!-- /hubs near me -->
    
</body>
</html>