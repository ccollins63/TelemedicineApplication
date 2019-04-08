<?php
include 'connect-mysql.php';
$conn = connectDB();
$userFirstName        = "SELECT FirstName FROM User WHERE PatientID = UserID";
$userLastName         = "SELECT LastName FROM User WHERE PatientID = UserID";
$prescriptionName     = "SELECT PrescriptionName FROM Prescription WHERE PatientID = UserID";
$prescriptionNotes    = "SELECT PrescriptionNotes FROM Prescription WHERE PatientID = UserID";
$prescriptionQuantity = "SELECT PrescriptionQuantity FROM Prescription WHERE PatientID = UserID";
$prescriptionDate     = "SELECT PrescriptionDate FROM Prescription WHERE PatientID = UserID";
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/Tem2.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PatientPrescriptionView</title>
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
      <td class="companylogo"><a href="index.php"><img src="images/logo.png" width="150"></a></td>
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
      <td align="center" class="signOut">
        <img src="images/man.png" alt="man" height="90px" width="90px" ><br>
        <span><?php echo "$userFirstName $userLastName"; ?></span><br>
        <a href="login.php">Sign Out</a>
      </td>
    </tr>
   
    
    
    <tr>
      <td align="center">
    
      <table width="90%" border="0" cellpadding="0">
        <tbody>
         
          <tr class="navcenter">
            <td>
                <p>
                    <a href="index.php">
                      <button>Home</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="appointment.php">
                      <button>Appointments</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="prescription.php">
                      <button>Prescriptions</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="messages.php">
                      <button>Messages</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="profile.php">
                      <button>Patient Profile</button>
                    </a>
                  </p>
      
            	
            </td>
          </tr>
        </tbody>
      </table>
      
      </td>
      
      <td colspan="2"><!-- InstanceBeginEditable name="MainBody" -->
      <!--Patient View Dashboard-->
      <table width="90%" border="0" cellpadding="0">
        <tbody>
          <tr class="banner">
           <td class="appTitle">Prescriptions</td>
			<!--
            <td width="22%"><img src="images/Ali.jpeg" alt="Ali" height="150px" width="150px" ></td>
            <td width="78%" class="signout"><p id="a">Welcome, John Doe </p>
              <p id="b"> Sign Out </p></td>
			-->
          </tr>
        </tbody>
      </table>
      <!--Patient View Dashboard Part 2-->
      <div style="padding: 15px">
        <h4>You are on the following medications:</h4>
      </div>
	  <div class="prescriptionContainer">
		  <div class="spaceBetween">
		  	<h5 class="drugName">Ibuprofen</h5>
		  	<p>Prescribed on: <?php echo "$prescriptionDate"; ?></p>
		  </div>
		  <div>
		    <p><?php echo "$prescriptionNotes"; ?></p>
			<span>Prescribed by: John Smith MD</span><span style="margin-left: 20px">Quantity: <?php echo "$prescriptionQuantity"; ?></span>
      <button class="sectionButton" style="float:right;" data-toggle="modal" data-target="#requestRefill">
        Request refill
      </button>
      <!--Modal-->
      <div class="modal fade" id="requestRefill" tabindex="-1" role="dialog" aria-labelledby="refillLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="refillLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Request refill for this drug?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Deny</button>
                <button type="button" class="btn btn-primary">Confirm</button>
              </div>
            </div>
          </div>
        </div>
		  </div>
		</div>
		  
		  <div class="prescriptionContainer">
		  <div class="spaceBetween">
		  	<h5 class="drugName">Oxycodone</h5>
		  	<p>Prescribed on: <?php echo "$prescriptionDate"; ?></p>
		  </div>
		  <div>
		    <p><?php echo "$prescriptionNotes"; ?></p>
			<span>Prescribed by: John Smith MD</span><span style="margin-left: 20px">Quantity: <?php echo "$prescriptionQuantity"; ?></span>
			<button class="sectionButton" style="float: right;" data-toggle="modal" data-target="#requestRefill">Request refill</button>
		  </div>
		</div>
      <!-- InstanceEndEditable --></td>
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