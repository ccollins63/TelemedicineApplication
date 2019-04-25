<?php
require __DIR__ . '/auth.php';

include 'connect-mysql.php';
$conn = connectDB();

if($conn->connect_error) die ("Unable to connect to database".$conn->connect_error);

$query = "SELECT * FROM User WHERE PatientID = '$_SESSION[userID]'";

console.log($query);

$result = $conn->query($query);
if($result->num_rows > 0)
{
    while($row = $result->fetch_array(MYSQLI_ASSOC))
    {	
        $userFirstName = $row['FirstName'];
        $userLastName = $row['LastName'];
    }    
}
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/Tem2.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="UTF-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>PatientView</title>
    <!-- InstanceEndEditable -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="patientCSS.css" rel="stylesheet" type="text/css">
    <!-- InstanceEndEditable -->
  </head>

  <body>

  <table width="90%" border="0" cellpadding="5">
 
 <tbody>
   <tr>
     <td class="companylogo"><a href="doctorIndex.php"><img src="images/logo.png" width="150"></a></td>
     <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
     <td align="center" class="signOut">
         <img src="images/man.png" alt="man" height="90px" width="90px" >
         <p> Dr. <span><?php echo "$userFirstName $userLastName"; ?></span></p>
         <a href="login.php">Sign Out</a>
     </td>
   </tr>

        <tr>
          <td align="center">

            <table width="90%" border="0" cellpadding="0">
              <tbody>

                <tr class="navcenter">
                  <td>

                     <!--Doctor Navigation-->
               <p>
                    <a href="doctorIndex.php">
                      <button>Home</button>
                    </a>
                  </p>

                  <p>
                    <a href="doctorAppointment.php">
                      <button>Appointments</button>
                    </a>
                  </p>

                  <p>
                    <a href="doctorMessages.php">
                      <button>Messages</button>
                    </a>
                  </p>
                  <p>
                    <a href="doctorPrescriptionRequest.php">
                      <button>Refill Requests</button>
                    </a>
                  </p>

                  <p>
                    <a href="video.php">
                      <button>Video Call</button>
                    </a>
                  </p>
                <!--End Doctor Navigation-->

                  </td>
                </tr>
              </tbody>
            </table>

          </td>

          <!--Body-->
          <td>
            <table class="patientbody" width="90%" border="2" cellpadding="0">
              <tbody>
                <tr>
                  <td colspan="2">
                    <!--Site Title--> 
                    <div class="row justify-content-center">
                      <div class="col-sm-10">
                        <p class="appTitle">Refill Requests</p>
                      </div>
                    </div>
                    <!--Notification-->
                    <div class="alert alert-light" role="alert" style="display: flex; justify-content: space-between;" id="request">
                      <p><span>John Doe</span> requests for <span>Ibuprofen</span> refill. Quantity:<span>800mg</span></p>
                      <button type="button" class="btn btn-primary" style="max-width: 100px" id="accept">Accept</button>
                      <button type="button" class="btn btn-danger" style="max-width: 100px" id="reject">Reject</button>
                    </div>
                  </td>
                  <!--Notification End-->
                </tr>
              </tbody>
            </table> <p>&nbsp;</p> </td>

          <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</body>
<!-- InstanceEnd --></html>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/telemedicine.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
