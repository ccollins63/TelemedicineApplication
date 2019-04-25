
<html>
<head>
    <meta charset="UTF-8">

    <title>Login to Equinox</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="patientCSS.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container, whiteContainer">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="index.php"><img src="images/logo.png" width="150"></a>
                </div>
                <div class="col, justifyCenter">
                    <h1>Equinox Medicine Health Portal</h1>
                </div>
            </div>
            
            <script>
              var vidyoConnector;
            
            
                function onVidyoClientLoaded(status) {
                  console.log("VidyoClient load state - " + status.state);
                  if (status.state == "READY") {
                    VC.CreateVidyoConnector({
                      viewId:"renderer",
                      viewStyle:"VIDYO_CONNECTORVIEWSTYLE_Default",
                      remoteParticipants:10,
                      logFileFilter:"error",
                      logFileName:"",
                      userData:""
                    }).then(function (vc) {
                      console.log("Create success");
                      vidyoConnector = vc;
                    }).catch(function(error){
            
                    });
                  }
                }
            
                function joinCall(){
            
                  vidyoConnector.Connect({
                    host:"prod.vidyo.io",
                    token:"cHJvdmlzaW9uAHVzZXIxQDFjMWU5Yi52aWR5by5pbwA2MzcyMTk2OTg1MQAANGE2MWQxMWJkMmQwNDBhNTg1MmU3NThhZmVlZDhiYmJlZGVlN2YyZWRjYmUzZWY2MDRjY2Y2MTVmMmNjMTE2MWMyYmNhMDk5NTIzZGZhMmEyZTdjMjVlMDU0OTdkMDQ0",          // Add generated token (https://developer.vidyo.io/documentation/4-1-16-8/getting-started#Tokens)
                    displayName: "Jibin",
                    resourceId:"room2",
                    onSuccess: function(){
                      console.log("Connected!! YAY!");
                    },
                    onFailure: function(reason){
                      console.error("Connection failed");
                    },
                    onDisconnected: function(reason) {
                      console.log(" disconnected - " + reason);
                    }
                  })
                }
            
              </script>
            
              <script src="https://static.vidyo.io/latest/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded"></script>
             <h3>Equinox Healthcare Video Appointment</h3>
             <button onclick="joinCall()">Connect</button>
            
             <div id="renderer"></div>
        </div>
    </div>

</body>
</html>