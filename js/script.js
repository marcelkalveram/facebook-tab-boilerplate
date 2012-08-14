// Called when FB SDK has been loaded
window.fbAsyncInit = function() {

    // Initialize the FB javascript SDK
    FB.init({

        appId   : '269633396481423', // APP ID muss durch ID der aktuellen Anwendung ersetzt werden
        status  : true,
        cookie  : true,
        xfbml   : true

    });

    // Auto grows panel when app is higher than 800px.
    // In the app settings, height needs to be set to height 800px fixed for this to work
    FB.Canvas.setAutoGrow();

};