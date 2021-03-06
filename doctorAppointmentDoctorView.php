<?php

require __DIR__ . '/auth.php'; ?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/Tem2.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>PatientAppointmentView</title>
<!-- InstanceEndEditable -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
<link href="patientCSS.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

<table width="90%" border="0" cellpadding="5">
 
  <tbody>
    <tr>
      <td class="companylogo"><a href="doctorIndex.php"><img src="images/logo.png" width="150"></a></td>
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
      <td align="center" class="signOut">
          <img src="images/man.png" alt="man" height="90px" width="90px" ><br>
          <span>John Doe</span><br>
          <a href="#">Sign Out</a>
      </td>
    </tr>
   
    
    
    <tr>
      <td align="center">
    
      <table width="90%" border="0" cellpadding="0">
        <tbody>
         
          <tr class="navcenter">
            <td>
   
                <p>
                    <a href="doctorIndex.html">
                      <button>Home</button>
                    </a>
                  </p>

                  <p>
                    <a href="doctorAppointment.html">
                      <button>Appointments</button>
                    </a>
                  </p>

                  <p>
                    <a href="doctorMessages.html">
                      <button>Messages</button>
                    </a>
                  </p>
                  <p>
                    <a href="doctorPrescriptionRequest.html">
                      <button>Refill Requests</button>
                    </a>
                  </p>
                  <p>
                    <a href="doctorCreateUser.html">
                      <button>New Patient</button>
                    </a>
                  </p>

                  <p>
                    <a href="video.html">
                      <button>Video Call</button>
                    </a>
                  </p>
            	
            </td>
          </tr>
        </tbody>
      </table>
      
      </td>
      
      <td colspan="2">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <p class="appTitle">Appointment View</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <h4>Patient Name:</h4> <span>Jane Doe</span>
                    <h4>Extra notes:</h4>
                </div>
                <div class="col-5">
                        <h4>Date of Appointment:</h4> <span>April 8, 2019</span>
                        <h4>Time of Appointment:</h4> <span>4:30PM</span>   
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 buttonContainer">
                        <button type="button" class="btn btn-primary btn-lg sideButtons">View Patient Profile</button>
                        <button type="button" class="btn btn-secondary btn-lg sideButtons" disabled>Video Call</button>
                        <button type="button" class="btn btn-secondary btn-lg sideButtons">Patient Message</button>
                </div>
            </div>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<!-- InstanceEnd --></html>
