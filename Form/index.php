<?php include 'main.php';?>

<!doctype html>

<html lang="en">
  
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src = "js/index.js"></script>

    <title>Application Form For Deputy Manager</title>

  
  
  </head>
  
  <body>

    <div class = "heading">
      
      <p class = "heading1">APPLICATION FORM FOR DEPUTY MANAGER</p>
      <p class = "heading2">BASIC INFORMATION</p>
    
    </div>
    <?php echo $error ?>

    <div class = "container">

      
      <form method = "post" enctype="multipart/form-data">
        <p>Fields Marked with <span style="color:red">  *</span> are compulsory</p>
        
        <fieldset>

          <div class = "form-group">
            <label for = "name">1. Name of the Post Applied for:<span style="color:red">  *</span></label>
            <input id = "name" type = "text" name = "name">
          </div>

          <div class = "form-group">
            <label for = "fname">2. Full Name of the Candidate(in Capitals):<span style="color:red">  *</span></label>
            <input id = "fname" type = "text" name = "fname">
          </div>

          <div class = "form-group">
            <label for = "dob">3. Date of Birth:<span style="color:red">  *</span></label>
            <input id = "dob" type = "text" name = "dob" placeholder = "DD-MM-YYYY">
          </div>

          <div class = "form-group">
            <label for = "gender">4. Gender:(Write '1' for Male, '2' for Female):<span style="color:red">  *</span></label>
            <input id = "gender" type = "text" name = "gender">
          </div>

          <div class = "form-group">
            <label for = "maritalstatus">5. Marital Status:</label>
            <input id = "maritalstatus" type = "text" name = "maritalstatus">
          </div>

          <div class = "form-group">
            <label for = "fhname">6. Father's/Husband's Name:<span style="color:red">  *</span></label>
            <input id = "fhname" type = "text" name= "fhname">
          </div>

          <div class = "form-group">
            <label for = "address">7. Mailing Address(in block letters):<span style="color:red">  *</span></label>
            <textarea id = "address" name = "address"></textarea>
            <div class = "extra">
              <label for = "pincode">Pin Code:<span style="color:red">  *</span></label>
              <input id = "pincode" type = "textbox" name = "pincode">
              <label for = "telno">Tel. No:</label>
              <input id = "telno" type = "textbox" name = "telno">
              <label for = "mobile">Mobile:<span style="color:red">  *</span></label>
              <input id = "mobile" type = "textbox" name = "mobile">
              <label for = "email">Email ID:<span style="color:red">  *</span></label>
              <input id = "email" type = "textbox" name = "email">
            </div>
          </div>

          <div class = "form-group">
            <label for = "nationality">8. Nationality:</label>
            <input id = "nationality" type = "text" name = "nationality">
          </div>

          <div class = "form-group">
            <label for = "aadhar">9. Aadhar Number:<span style="color:red">  *</span></label>
            <input id = "aadhar" type = "text" name = "aadhar">
          </div>
          <div class = "form-group">
            <label for = "handicapped">10. Whether Physical Handicapped?:(Write '1' for Yes, '2' for No)</label>
            <input id = "handicapped" type = "text" name = "handicapped">
          </div>
          <div class = "form-group">
            <p>11. Category:<span style="color:red">  *</span></p>
            <label for="radio1" class ="extra">SC</label><input type="radio" id="radio" name="radio" value = "SC">
            <label for="radio2" class = "extra">ST</label><input type="radio" id="radio" name="radio" value = "ST">
            <label for="radio3" class = "extra">OBC</label><input type="radio" id="radio" name="radio" value = "OBC">
            <label for="radio4" class = "extra">General</label><input type="radio" id="radio" name="radio" checked="checked" value = "General">
          </div>

          <div class = "form-group">
            <p for = "education">12. All Educational/other professional Qualifications/Training Courses etc/Degree Examination onwards:</p>
            <table id = "educationtable">
              <thead>
                  <th>Degree</th>
                  <th>Division/Grade % of Marks</th>
                  <th>Year of Passing</th>
                  <th>Duration of Degree</th>
                  <th>Board/University</th>
                  <th>Subject</th>
                  <th>Subject of Specialisation</th>
                </thead>
                <tbody>
                  <tr id = "t1" name = "t1">
                    <td><input name = "t11" placeholder = "High School*"></input></td>
                    <td><input name = "t12"></input></td>
                    <td><input name = "t13"></input></td>
                    <td><input name = "t14"></input></td>
                    <td><input name = "t15"></input></td>
                    <td><input name = "t16"></input></td>
                    <td><input name = "t17"></input></td>
                  <tr>
                  <tr id = "t2" name = "t2">
                    <td><input name = "t21" placeholder = "Senior Secondary School*"></input></td>
                    <td><input name = "t22"></input></td>
                    <td><input name = "t23"></input></td>
                    <td><input name = "t24"></input></td>
                    <td><input name = "t25"></input></td>
                    <td><input name = "t26"></input></td>
                    <td><input name = "t27"></input></td>
                  <tr>
                  <tr id = "t3" name = "t3">
                    <td><input name = "t31" placeholder = "First Degree*"></input></td>
                    <td><input name = "t32"></input></td>
                    <td><input name = "t33"></input></td>
                    <td><input name = "t34"></input></td>
                    <td><input name = "t35"></input></td>
                    <td><input name = "t36"></input></td>
                    <td><input name = "t37"></input></td>
                  <tr>
                  <tr id = "t4" name = "t4">
                    <td><input name = "t41"  placeholder = "Other Degree"</input></td>
                    <td><input name = "t42"></input></td>
                    <td><input name = "t43"></input></td>
                    <td><input name = "t44"></input></td>
                    <td><input name = "t45"></input></td>
                    <td><input name = "t46"></input></td>
                    <td><input name = "t47"></input></td>
                  <tr>
                  <tr id = "t5" name = "t5">
                    <td><input name = "t51" placeholder = "Other Degree"></input></td>
                    <td><input name = "t52"></input></td>
                    <td><input name = "t53"></input></td>
                    <td><input name = "t54"></input></td>
                    <td><input name = "t55"></input></td>
                    <td><input name = "t56"></input></td>
                    <td><input name = "t57"></input></td>
                  <tr>
                </tbody>
            </table>
            <!--<input type="button" value="Add New Degree" id="addRows" />-->
          </div>

          <div class = "form-group">
            <label for="photo">Photo</label>
            <input type="file" name = "PhotoToUpload" id = "PhotoToUpload" accept="image/*" onChange="readURL(this);">
          </div>

          <div class = "form-group">
            <label for="sphoto">Signature</label>
            <input type="file" name = "SignatureToUpload" id = "SignatureToUpload" accept="image/*" onChange="readURL(this);">
          </div>

          <p>I hereby declare that all the statements made in the application are true and complete to the best of my knowldege and belief. I understand that action can be taken against me by the Commission, if I am declared by them to be guilty of nay misconduct mentioned herein. I have informed my Head Office/Deptt, in writing that I am applying for this selection.</p>

          <div class = "form-group">
            <center><input type = "submit" id = "submit" name = "submit" value = "Submit"></center>  
          </div>

        </fieldset>

      </form>

    </div>

  </body>

</html>
