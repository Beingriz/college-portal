<?php  include('./EmployeePages/php/EmpRegForm.php');
 $y = date('y');
$a = "EMP";
$m = date('m');
$d = date('d');
$emp_id = $y.$a.$m.mt_rand(100,999);
$host = "localhost";
$user = "root";
$db = "College_portal";
$pw  = "";
$conn = mysqli_connect($host, $user , $pw ,  $db); 
$dt = "20".$y."-".$m."-".$d;
?>
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Registeration</title>
    <link rel="stylesheet" type="text/css" herf="./css/7-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        
 
</head>
<style type="text/css">
  label {color: black;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
select{width: 65%;}
.border .form table{ border: solid 1px slateblue; width: 97%; }
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
                <input type="hidden" name="emp_regid"  id="emp_regid" value="<?php echo $emp_id;?> "/>
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <h1 style="margin-top: 15px;">Personal Details</h1> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label style="color: green;  font-size: 28px;">ID No</label></td>
                      <td><label style="color: green; font-size: 28px;"><?php echo $emp_id; ?></label></td>
                      <td><label style="color: green;  font-size: 28px;">DOJ</label></td>
                      <td><input type="date" name="txt_emp_doj" id="txt_emp_doj" max="<?php echo $dt;?>" value="<?php echo $dt;?>" min="2018-01-01"></td>
                    </tr>
                    <tr>
                      <td><label>Name</label></td>
                      <td><span id="sprytextfield1">
                          <input type="text" name="txt_emp_name" id="txt_emp_name" placeholder="Enter Name" required="required" onkeypress="return(event.charCode >= 65  && event.charCode <= 123) || event.keyCode == 32"></span>
                      </td>
                      <td><label>DOB</label></td>
                      <td><span id="sprytextfield2">
                        <input type="date" name="txt_emp_dob" id="txt_emp_dob" placeholder="Enter Contact" required="required" max="1999-01-01" value="dd-mm-yyyy">
                        </span></td>
                    </tr>
                    <tr>
                      <td><label>Mobile: </label></td>
                      <td><span id="sprytextfield3">
                        <input type="text" name="txt_emp_no" id="txt_emp_no" placeholder="Mobile No"  required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10">
                      </span></td>
                      <td> <label>Email:</label></td>
                      <td><span id="sprytextfield4">
                      <input type="text" name="txt_emp_email" id="txt_emp_email" placeholder="Enter Email" required="required">
                      </span></td>
                    </tr>

                    <tr>
                      <td><label>Address:</label></td>
                      <td><span id="sprytextarea5">
                        <textarea name="txt_emp_add" id="txt_emp_add" cols="45" rows="5" required="required"></textarea></span>
                       </td>
                         
                        <td><label>Country:</label></td>
                        <td><select name="country" class="form-control countries" id="countryId" required="required">
                            <option value="">Select Country</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label>State:</label></td>
                        <td><select name="state" class="form-control states" id="stateId" required="required">
                            <option value="">Select State</option>
                            </select></td>
                        <td><label>City:</label></td>
                        <td><select name="city" class="form-control cities" id="cityId" required="required">
                            <option value="">Select City</option>
                            </select></td>
                      </tr>
                      <tr>

                          <td><label>Pin Code: </label></td>
                      <td><span id="sprytextfield6">
                      <input type="text" name="txt_emp_pin" id="txt_emp_pin" placeholder="Pin No"  required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="6"/>
                      </span></td>
          
                    </tr>
             </table>
          <h1 style="margin-top: 15px;">Professional Details</h1>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label>Qualification :</label></td>
                           <td><span id="sprytextfield7"><select name="slct_emp_quali" style="width: 80%;" required="required">
                           <option value="">---select---</option>
                           <option value="BCA">BCA</option>
                           <option value="BCom">BCom</option>
                           <option value="BSC">BSC</option>
                           <option value="BBA">BBA</option>
                           <option value="MCA">MCA</option>
                           <option value="MBA">MBA</option>
                           <option value="MSc">MSc</option>
                           <option value="MCom">MCom</option>
                           </select></span>
                      </td>
                       <td><label>Specialist</label></td>
                           <td><span id="sprytextfield8"><select name="slct_emp_sub" style="width: 80%;" required="required">
                           <option value="">---select---</option>
                           <?php
                           $sub = "select * from subjects";
                                  $sql_sub = mysqli_query($conn, $sub);
                                  while($sub_fied=mysqli_fetch_assoc($sql_sub))
                                  {  echo "<option value='".$sub_fied['Sub_Name']."'>".$sub_fied['Sub_Name']."</option>";    }
                                 ?>
                           </select></span>
                      </td>
                      <td><label>Experience</label></td>
                      <td><span id="sprytextfield9">
                          <input type="text" name="txt_emp_exp" id="txt_emp_exp" placeholder="Enter Name"></span>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Last Work Area</label></td>
                      <td><span id="sprytextfield10"><select name="slct_emp_lwa" required="required">
                          <option value="">--select--</option>
                          <option value="Company"> Company</option>
                          <option value="Institute"> Institute</option>
                          <option value="college"> College</option>
                          <option value="Other"> Others</option>
                          </select></span></td>
                          <td><label>Other: </label></td>
                      <td><span id="sprytextfield11">
                      <input type="text" name="txt_emp_other" id="txt_emp_pin" placeholder="Other Area" />
                      </span></td>
                   </tr>
               </table>

               <h1 style="margin-top: 15px;">Teaching Department Details</h1>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label>Department</label></td>
                           <td><span id="sprytextfield12"><select name="slct_emp_dptmnt" style="width: 80%;"required="required">
                           <option value="">---select---</option>
                           <option value="BCA">BCA</option>
                           <option value="MCA">MCA</option>
                          </select></span>
                      </td>
                       <td><label>Year</label></td>
                            <td><span id="sprytextfield13"><select name="slct_emp_dptmnt_yr" style="width: 60%;"required="required">
                              <option value="">---select---</option>
                              <option value="1st Year">1st Year</option>
                              <option value="2nd Year">2nd Year</option>
                              <option value="3rd Year">3rd Year</option>
                            </select></span></td>
                      <td><label>Sem 1</label></td>
                                  <td><span id="sprytextfield14"><select name="slct_emp_dptmnt_sem" style="width: 80%;"required="required">
                                    <option value="">---select---</option>
                                    <option value="1st Sem">1st Sem</option>
                                    <option value="2nd Sem">2nd Sem</option>
                                    <option value="3rd Sem">3rd Sem</option>
                                    <option value="4th Sem">4th Sem</option>
                                    <option value="5th Sem">5th Sem</option>
                                    <option value="6th Sem">6th Sem</option>
                                  </select></span></td>
                    <td><label>Sem 2</label></td>
                                  <td><span id="sprytextfield14"><select name="slct_emp_dptmnt_sem2" style="width: 80%;"required="required">
                                    <option value="">---select---</option>
                                    <option value="1st Sem">1st Sem</option>
                                    <option value="2nd Sem">2nd Sem</option>
                                    <option value="3rd Sem">3rd Sem</option>
                                    <option value="4th Sem">4th Sem</option>
                                    <option value="5th Sem">5th Sem</option>
                                    <option value="6th Sem">6th Sem</option>
                                  </select></span></td>
                    </tr>
                   
                    <tr>
                      <td><label>Subject 1</label></td>
                           <td><span id="sprytextfield15"><select name="slct_emp_dptmnt_sub1" style="width: 80%;"required="required">
                           <option value="">---select---</option>
                           <?php
                           $sub = "select * from subjects";
                                  $sql_sub = mysqli_query($conn, $sub);
                                  while($sub_fied=mysqli_fetch_assoc($sql_sub))
                                  {  echo "<option value='".$sub_fied['Sub_Name']."'>".$sub_fied['Sub_Name']."</option>";    }
                                 ?>
                           </select></span>
                      </td>
                      <td><label>Subject 2</label></td>
                           <td><span id="sprytextfield16"><select name="slct_emp_dptmnt_sub2" style="width: 80%;" required="required">
                           <option value="">---select---</option>
                           <?php
                           $sub = "select * from subjects";
                                  $sql_sub = mysqli_query($conn, $sub);
                                  while($sub_fied=mysqli_fetch_assoc($sql_sub))
                                  {  echo "<option value='".$sub_fied['Sub_Name']."'>".$sub_fied['Sub_Name']."</option>";    }
                                 ?>
                           </select></span>
                      </td>
                          <td><label>Message: </label></td>
                      <td><span id="sprytextfield17">
                      <input type="text" name="txt_emp_msg" id="txt_emp_msg" placeholder="Comment"  onkeypress="return(event.charCode >64  &&  event.charCode > 91) ||(event.charCode >96 && event.charCode < 123) || event.keyCode == 32" />
                      </span></td>
          
                    </tr>
                    
                     
          </table>
           <td><div style="position: relative; margin-top: 10px; width: 100%; float: left;" align="center">
                    <button type="submit" name="submit">Register</button>
                  </div>
                    </td>
      </form>

    </div>
 </div> <!-- /main -->
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
            [ [//Name 
            ],
             [//Name 
              ["minlen=1",  "Please Enter  Name"              ] ],
              [//DATE OF BIRTH
              ["minlen=1",    "Please Enter Date of Birth"    ] ],
              [//Mobile
              ["num",   "Please Enter valid Mobile "           ],
              ["minlen=10", "Please Enter valid Mobile "       ] ],
              [//Email              
              ["minlen=1",    "Please Enter Email "            ], 
              ["email",   "Please Enter valid email "          ] ],
              [//Address
              ["minlen=1",    "Please Enter Address"           ] ],
              [//Pin Code
              ["minlen=1",  "Please Enter Pin Code"        ] ],
              [//Qualificatoin
              ],     
              [//Specialist In
              ],  
              [//Experiance
              ],
              [//Last Worked In
              ],
               [//Depatment
              ],     
              [//Year
              ],  
              [//Semister
              ],
              [//Subject 1
              ],
               [//Subject 2
              ],     
             
              [//Experience
              ["minlen=1",    "Please Enter Experiance  "         ] ]
              [//Experience
              ["minlen=1",    "Please Enter Experiance  "         ] ]  ];
</SCRIPT>
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");

var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");

//-->
</script>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="js/location.js"></script>   

</body>
</html>
