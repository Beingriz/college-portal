<?php
$host="localhost";
$user="root";
$Password="";
$db="College_portal";

$conn = mysqli_connect($host,$user, $Password,$db);
$user_profile = $_SESSION['User_name'];
 $query = "select * from staff_reg where Staff_id='$user_profile'";
  $result = mysqli_query($conn,$query);
   $data =  mysqli_fetch_assoc($result);
?>
<!DOCTYPE html PUBLIC>
<html >
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Staff Details Form</title>
    <link rel="stylesheet" type="text/css" herf="./css/7-12-style.css">
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
  label {color: black;}
  button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
              
                <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <h1 style="margin-top: 15px;">Personal Details</h1>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label>Name</label></td>
                      <td><span id="sprytextfield1">
                          <input type="text" name="txt_emp_name" id="txt_emp_name" value="<?php echo $data['Name'];?>" placeholder="Enter Name" onkeypress="return event.charCode >= 65 && event.charCode <=120"></span>
                      </td>
                      <td><label>DOB</label></td>
                      <td><span id="sprytextfield2">
                        <input type="date" name="txt_emp_dob" id="txt_emp_dob" placeholder="Enter Contact">
                        </span></td>
                    </tr>
                    <tr>
                      <td><label>Mobile: </label></td>
                      <td><span id="sprytextfield3">
                      <input type="number" name="txt_emp_no" id="txt_emp_no" placeholder="Mobile No" />
                      </span></td>
                      <td> <label>Email:</label></td>
                      <td><span id="sprytextfield4">
                      <input type="text" name="txt_emp_email" id="txt_emp_email" placeholder="Enter Email" />
                      </span></td>
                    </tr>

                    <tr>
                      <td><label>Address:</label></td>
                      <td><span id="sprytextarea5">
                        <textarea name="txt_emp_add" id="txt_emp_add" cols="45" rows="5"></textarea></span>
                       </td>
                      <td><label>State</label></td>
                      <td><select style="width: 85%;" name="slct_emp_state"> 
                       <option value="--select--">--select--</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Orissa">Orissa</option>
                      <option value="Pondicherry">Pondicherry</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttaranchal">Uttaranchal</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="West Bengal">West Bengal</option>
                    </select></td>
                    </tr>
                    <tr>
                      <td><label>City</label></td>
                      <td><select name="slct_emp_city">
                          <option value="---select---">--select--</option>
                          <option value="bengalur"> Bengaluru</option>
                          <option value="bengalur"> Mandiya</option>
                          <option value="bengalur"> Mysore</option>
                          <option value="bengalur"> Delhi</option>
                          </select></td>
                          <td><label>Pin Code: </label></td>
                      <td><span id="sprytextfield6">
                      <input type="number" name="txt_emp_pin" id="txt_emp_pin" placeholder="Pin No" />
                      </span></td>
          
                    </tr>
             </table>
          <h1 style="margin-top: 15px;">Professional Details</h1>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label>Qualification :</label></td>
                           <td><select name="slct_emp_quali" style="width: 80%;">
                           <option value="--select--">---select---</option>
                           <option value="BCA">BCA</option>
                           <option value="BCom">BCom</option>
                           <option value="BSC">BSC</option>
                           <option value="BBA">BBA</option>
                           <option value="MCA">MCA</option>
                           <option value="MBA">MBA</option>
                           <option value="MSc">MSc</option>
                           <option value="MCom">MCom</option>
                           </select>
                      </td>
                       <td><label>Specialist In :</label></td>
                           <td><select name="slct_emp_sub" style="width: 80%;">
                           <option value="--select--">---select---</option>
                           <option value="C Programming">C Programming</option>
                           <option value="C++ Programming">C++ Programming</option>
                           <<option value="php">Php</option>
                           <option value="Java">Java</option>
                           <option value="Advanced Java">Advanced Java</option>
                           <option value="Core Java">Core Java</option>
                           </select>
                      </td>
                      <td><label>Experience :</label></td>
                      <td><span id="sprytextfield7">
                          <input type="text" name="txt_emp_exp" id="txt_emp_exp" placeholder="Enter Name"></span>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Last Work Area</label></td>
                      <td><select name="slct_emp_lwa">
                          <option value="---select---">--select--</option>
                          <option value="Company"> Company</option>
                          <option value="Institute"> Institute</option>
                          <option value="college"> College</option>
                          <option value="Other"> Others</option>
                          </select></td>
                          <td><label>Other: </label></td>
                      <td><span id="sprytextfield8">
                      <input type="text" name="txt_emp_other" id="txt_emp_pin" placeholder="Other Area" />
                      </span></td>
                   </tr>
               </table>

               <h1 style="margin-top: 15px;">Teaching Department Details</h1>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label>Department :</label></td>
                           <td><select name="slct_emp_dptmnt" style="width: 80%;">
                           <option value="--select--">---select---</option>
                           <option value="BCA">BCA</option>
                           <option value="MCA">MCA</option>
                          </select>
                      </td>
                       <td><label>Year</label></td>
                            <td><select name="slct_emp_dptmnt_yr" style="width: 60%;">
                              <option value="--select--">---select---</option>
                              <option value="1st Year">1st Year</option>
                              <option value="2nd Year">2nd Year</option>
                              <option value="3rd Year">3rd Year</option>
                            </select></td>
                      <td><label>Sem</label></td>
                                  <td><select name="slct_emp_dptmnt_sem" style="width: 80%;">
                                    <option value="--select--">---select---</option>
                                    <option value="1st Sem">1st Sem</option>
                                    <option value="2nd Sem">2nd Sem</option>
                                    <option value="3rd Sem">3rd Sem</option>
                                    <option value="4th Sem">4th Sem</option>
                                    <option value="5th Sem">5th Sem</option>
                                    <option value="6th Sem">6th Sem</option>
                                  </select></td>
                    </tr>
                    <tr>
                      <td><label>Allot Subject 1 :</label></td>
                           <td><select name="slct_emp_dptmnt_sub1" style="width: 80%;">
                           <option value="--select--">---select---</option>
                           <option value="C Programming">C Programming</option>
                           <option value="C++ Programming">C++ Programming</option>
                           <<option value="php">Php</option>
                           <option value="Java">Java</option>
                           <option value="Advanced Java">Advanced Java</option>
                           <option value="Core Java">Core Java</option>
                           </select>
                      </td>
                      <td><label>Allot Subject 2 :</label></td>
                           <td><select name="slct_emp_dptmnt_sub2" style="width: 80%;">
                           <option value="--select--">---select---</option>
                           <option value="C Programming">C Programming</option>
                           <option value="C++ Programming">C++ Programming</option>
                           <<option value="php">Php</option>
                           <option value="Java">Java</option>
                           <option value="Advanced Java">Advanced Java</option>
                           <option value="Core Java">Core Java</option>
                           </select>
                      </td>
                          <td><label>Message: </label></td>
                      <td><span id="sprytextfield9">
                      <input type="text" name="txt_emp_msg" id="txt_emp_msg" placeholder="Comment" />
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
</body>
</html>
