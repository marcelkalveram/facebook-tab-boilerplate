<?php 

    require_once('facebook-sdk/facebook.php');
    require_once('inc/config.php');

    // create facebook object
    $facebook = new Facebook(array(

        'appId'     =>  APP_ID,
        'secret'    =>  APP_SECRET,
        'cookie'    =>  true

    ));     

    // get signed request
    $signedRequest = $facebook->getSignedRequest();
    $userIsFan = isset($signedRequest['page']['liked']) && $signedRequest['page']['liked'];

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<html>

    <head>

        <!-- Title of Facebook Tab -->
	    <title>Facebook Tab Title</title>

        <!-- SET character set and chrome frame for IE6 -->
	    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!-- include stylesheet (taken from HTML5 boilerplate) -->
        <link rel="stylesheet" href="css/style.css">

    </head>
 
    <body>

        <!-- Wrapper that encloses the entire content -->
        <div id="wrapper">

            <!-- YOUR CONTENT GOES HERE -->
            <div id="content">

                                                        

            </div>

        </div>

        <!-- FB Root serves as anchor for the FB javascript SDK -->
        <!-- Must not be changed or removed -->
        <div id="fb-root"></div>

        <script>

            // Called when FB SDK has been loaded
            window.fbAsyncInit = function() {

                // Initialize the FB javascript SDK
                FB.init({

                    appId   : '<?php echo APP_ID; ?>', // APP ID muss durch ID der aktuellen Anwendung ersetzt werden
                    status  : true,
                    cookie  : true,
                    xfbml   : true

                });

                // Auto grows panel when app is higher than 800px.
                // In the app settings, height needs to be set to height 800px fixed for this to work
                FB.Canvas.setAutoGrow();
                FB.Canvas.setSize({ width: 810, height: 1417 });

            };

            // Load the SDK Asynchronously
            (function (d) {
                var js, id = 'facebook-jssdk'; if (d.getElementById(id)) { return; }
                js = d.createElement('script'); js.id = id; js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js";
                d.getElementsByTagName('head')[0].appendChild(js);
            } (document));        

        </script>


    </body>

</html>

