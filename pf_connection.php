<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "patientinforecord";

$con = mysqli_connect($host, 'root', '', $db_name);

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$religion = $_POST['religion'];
$nationality = $_POST['nationality'];
$homeadd = $_POST['homeadd'];
$occupation = $_POST['occupation'];
$dentalinsurance = $_POST['dentalinsurance'];
$date = $_POST['date'];
$pgname = $_POST['pgname'];
$pgoccupation = $_POST['pgoccupation'];
$reason = $_POST['reason'];
$gender = $_POST['gender'];
$prevDentist = $_POST['prevDentist'];
$lastVisit = $_POST['lastVisit'];
$goodHealth = $_POST['medicalHistorySelect1'];
$medTreatment = array(
    $_POST['medicalHistorySelect2'],
    $_POST['specifyInput2']
  );
$seriousIll = array(
    $_POST['medicalHistorySelect3'],
    $_POST['specifyInput3']
  );
$hospitalized = array(
    $_POST['medicalHistorySelect4'],
    $_POST['specifyInput4']
  );
$prescription = array(
    $_POST['medicalHistorySelect5'],
    $_POST['specifyInput5']
  );
$tobacco = $_POST['medicalHistorySelect6'];
$alcohol = $_POST['medicalHistorySelect7'];
$allergic = array(
    $_POST['medicalHistorySelect8'],
    $_POST['specifyInput8']
  );
$bleeding = $_POST['medicalHistorySelect9'];
$pregnant = $_POST['medicalHistorySelect10'];
$nursing = $_POST['medicalHistorySelect11'];
$birthControl = $_POST['medicalHistorySelect12'];
$btype = $_POST['medicalHistorySelect13'];
$bpressure = $_POST['medicalHistorySelect14'];
$diseases = array(
    $_POST['medicalHistorySelect15'],
    $_POST['specifyInput15']
  );

// Insert the values into the database
$sql = "INSERT INTO patientinfo (
  name, email, number, religion, nationality, homeadd, occupation, dentalinsurance, date,
  pgname, pgoccupation, reason, gender, prevDentist, lastVisit, goodHealth, medTreatment,
  seriousIll, seriousIllSpecify, hospitalized, hospitalizedSpecify, prescription, prescriptionSpecify,
  tobacco, tobaccoSpecify, alcohol, allergic, bleeding, pregnant, nursing, birthControl,
  btype, bpressure, diseases
) VALUES (
  '$name', '$email', '$number', '$religion', '$nationality', '$homeadd', '$occupation', '$dentalinsurance', '$date',
  '$pgname', '$pgoccupation', '$reason', '$gender', '$prevDentist', '$lastVisit', '$goodHealth', '$medTreatment',
  '$seriousIll', '$seriousIllSpecify', '$hospitalized', '$hospitalizedSpecify', '$prescription', '$prescriptionSpecify',
  '$tobacco', '$tobaccoSpecify', '$alcohol', '$allergic', '$bleeding', '$pregnant', '$nursing', '$birthControl',
  '$btype', '$bpressure', '$diseases'
)";

if (mysqli_query($con, $sql)) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>