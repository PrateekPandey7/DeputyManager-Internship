<?php

$error = '';
$name = '';$fname = '';$dob = '';$gender = '';$maritalstatus = '';$fhname = '';$address = '';$pincode = '';$telno = '';$mobile = '';$email = '';$nationality = '';$aadhar = '';$handicapped = '';$category = '';$education1 = '';$education2 = '';
$education3 = '';$education4 = '';$education5 = '';
function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}

if(isset($_POST["submit"]))
{
  if(empty($_POST["name"]))
  {
    $error .= 'Name';
  }
  else
  {
    $name = clean_text($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      $error .= 'Name';
    }
  }
  if(empty($_POST["email"]))
  {
    $error .= 'Email';
  }
  else
  {
    $email = clean_text($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $error .= 'Email';
    }
  }
  if(empty($_POST["address"]))
  {
    $error .= 'Address';
  }
  else
  {
    $address = clean_text($_POST["address"]);
  }
  if(empty($_POST["aadhar"]))
  {
    $error .= 'aadhar';
  }
  else
  {
    $aadhar = clean_text($_POST["aadhar"]);
  }
  if(empty($_POST["fname"]))
  {
    $error = 'All data not corectly filled';
  }
  else
  {
    $fname = clean_text($_POST["fname"]);
  }
  if(empty($_POST["dob"]))
  {
    $error .= 'DOB';
  }
  else
  {
    $dob = clean_text($_POST["dob"]);
  }
  if(empty($_POST["gender"]))
  {
    $error .= 'Gender';
  }
  else
  {
    $gender = clean_text($_POST["gender"]);
    if($gender == 1)
      $gender = 'Male';
    else if($gender == 2)
      $gender = 'Female';
    else
      $error .= 'Gender';
  }
  if(empty($_POST["fhname"]))
  {
    $error .= 'fhname';
  }
  else
  {
    $fhname = clean_text($_POST["fhname"]);
  }
  if(empty($_POST["pincode"]))
  {
    $error .= 'pincode';
  }
  else
  {
    $pincode = clean_text($_POST["pincode"]);
  }
  if(empty($_POST["mobile"]))
  {
    $error .= 'mobile';
  }
  else
  {
    $mobile = clean_text($_POST["mobile"]);
  }
  $maritalstatus = clean_text($_POST["maritalstatus"]);
  $telno = clean_text($_POST["telno"]);
  $nationality = clean_text($_POST["nationality"]);
  $handicapped = clean_text($_POST["handicapped"]);
  if($handicapped == 1)
      $handicapped = 'Yes';
    else if($handicapped == 2)
      $handicapped = 'No';
  $category = clean_text($_POST["radio"]);
  if(empty($_POST["t11"]) || empty($_POST["t21"]) || empty($_POST["t31"]))
  {
    $error .= 'Degree';
  }
  else
  {
    for($x = 1; $x <= 7; $x++)
    {
      $string1 = "t".'1'.$x;
      $string2 = "t".'2'.$x;
      $string3 = "t".'3'.$x; 
      $education1 .= clean_text($_POST["$string1"]).';';
      $education2 .= clean_text($_POST["$string2"]).';';
      $education3 .= clean_text($_POST["$string3"]).';';
     }
  }
  if(empty($_POST["t41"]))
  {
    $education4 = '';
  }
  else
  {
    for($x = 1; $x <= 7; $x++)
    {
      $string4 = "t".'4'.$x;
      $education4 .= clean_text($_POST["$string4"]).';';
    }
  }
  if(empty($_POST["t51"]))
  {
    $education5 = '';
  }
  else
  {
    for($x = 1; $x <= 7; $x++)
    {
      $string5 = "t".'5'.$x;
      $education5 .= clean_text($_POST["$string5"]).';';
    }
  }

  if($error == '')
  {
    $file_open = fopen("DeputyManagerForm.csv", "a");
    $no_rows = count(file("DeputyManagerForm.csv"));
    if($no_rows >= 1)
    {
      $no_rows = (($no_rows-1)+2)/2;
    }
    include 'PhotoUpload.php';
    include 'SignatureUpload.php';
    $form_data = array(
      'sr_no'   =>  $no_rows,
      'name'    =>  $name,
      'fname'   =>  $fname,
      'dob'     =>  $dob,
      'gender'  =>  $gender,
      'maritalstatus'  =>  $maritalstatus,
      'fhname'  =>  $fhname,
      'address' =>  $address,
      'pincode'   =>  $pincode,
      'telno'   =>  $telno,
      'mobile'   =>  $mobile,
      'email'   =>  $email,
      'nationality'   =>  $nationality,
      'aadhar' =>  $aadhar,
      'handicapped'   =>  $handicapped,
      'category'   =>  $category,
      'education1'  =>  $education1,
      'education2'  =>  $education2,
      'education3'  =>  $education3,
      'education4'  =>  $education4,
      'education5'  =>  $education5,

    );
    fputcsv($file_open, $form_data);
    $error = '<p class="text-success"><strong>Your Information has been recorded.</p>';
    $name = '';$fname = '';$dob = '';$gender = '';$maritalstatus = '';$fhname = '';$address = '';$pincode = '';$telno = '';$mobile = '';$email = '';$nationality = '';$aadhar = '';$handicapped = '';$category = '';$education1 = '';$education2 = '';$education3 = '';
    $education4 = '';$education5 = '';    
  }
  else
  {
    $error = '<p class="text-danger"><strong>All Data have not been correctly filled.</p>';
  }
}

?>