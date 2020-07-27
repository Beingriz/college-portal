<?php  include('./StudentPages/phpPages/studentInsert.php');

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
</style>
<body >
<!-- Main -->
<div class="border">
    <div class="form">
           <form action="#" method="POST" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
           	     <h1 style=" margin-top: 15px;">Personal Details</h1>
                  <table width="96%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label>First Name</label></td>
                      <td><span id="sprytextfield1">
                          <input  type="text" id="txt_st_fname" placeholder="Enter First Name"   name="txt_st_fname" required="required"  onkeypress="return(event.charCode >= 65  && event.charCode <= 123) || event.keyCode == 32"></span>
                      </td>
                      <td><label> Last Name</label></td>
                      <td><span id="sprytextfield2">
                          <input  type="text" id="txt_st_lname" placeholder="Enter Last Name" " name="txt_st_lname" required="required"  onkeypress="return(event.charCode >= 65  && event.charCode <= 123) || event.keyCode == 32"></span>
                      </td>
                    </tr>
                    <tr>
                    	<td><label>DOB</label></td>
                      <td><span id="sprytextfield3">
                        <input  type="date" name="s_dob" required="required" max="1999-01-01" value="1998-01-01">
                        </span></td>
                        <td><label>Gender</label></td>
                  		<td><select style="width: 55%;" name="sgender" id="sgender" required="required">
                      		<option value="">---select---</option>
                      		<option value="Male">Male</option>
                      		<option value="Female">Female</option>
                  		</select></td>
                    </tr>
                    <tr>
                    	<td> <label>Mobile:</label></td>
                      <td><span id="sprytextfield4">
                      <input type="text" name="txt_st_mno" id="txt_st_mno" placeholder="Mobile No"  required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10">
                      </span></td>
                      
                      <td> <label>Email:</label></td>
                      <td><span id="sprytextfield5">
                      <input type="text" name="txt_st_email" id="txt_st_email" placeholder="Enter Email" required="required">
                      </span></td>
                    </tr>
                    <tr>
                      <td><label>Address:</label></td>
                      <td><span id="sprytextarea6">
                        <textarea name="txt_st_add" id="txt_st_add" cols="45" rows="5"></textarea></span>
                       </td>
                       <td><label>Country:</label></td>
                        <td><select name="s_country" class="form-control countries" id="countryId" required="required">
                            <option value="">Select Country</option>
                            </select></td>
                  </tr>
                  <tr>
                      <td><label>State:</label></td>
                        <td><select name="s_state" class="form-control states" id="stateId" required="required">
                            <option value="">Select State</option>
                            </select></td>
                      <td><label>City:</label></td>
                        <td><select name="s_city" class="form-control cities" id="cityId" required="required">
                            <option value="">Select City</option>
                            </select></td>
                    </tr>
                    <tr>
                      <td> <label>Pin Code:</label></td>
                      <td><span id="sprytextfield7">
                      <input type="text" name="txt_st_pin" id="txt_st_pin" placeholder="Pin Code" required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="6">
                      </span></td>
                  </tr>
        </table>

        <h1 style=" margin-top: 15px;">Parent Details</h1>
            <table width="96%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><label>Father Name</label></td>
                      <td><span id="sprytextfield8">
                          <input type="text" id="txt_st_fathername" placeholder="Enter Father Name"   name="txt_st_fathername" required="required"   onkeypress="return(event.charCode >= 65  && event.charCode <= 123) || event.keyCode == 32"></span>
                      </td>
                      <td><label> Mother Name</label></td>
                      <td><span id="sprytextfield9">
                          <input style="width: 85%;" type="text" id="txt_st_mothername" placeholder="Enter Mother Name" name="txt_st_mothername"  onkeypress="return(event.charCode >= 65  && event.charCode <= 123) || event.keyCode == 32"></span>
                      </td>
                    </tr>
                    <tr>
                      <td> <label>Mobile:</label></td>
                      <td><span id="sprytextfield10">
                      <input type="text" name="txt_st_fmno" id="txt_st_fmno" placeholder="Parent Mobile No" required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" />
                      </span></td>
                      
                      <td> <label>Email:</label></td>
                      <td><span id="sprytextfield11">
                      <input type="text" name="txt_st_femail" id="txt_st_femail" placeholder=" Email ID" required="required" />
                      </span></td>
                    </tr>

        </table>
        <h1 style=" margin-top: 15px;">Admission Details</h1>
            <table width="96%" border="0" cellspacing="0" cellpadding="0">
                    
                    <tr>
                      <td><label>Combination</label></td>
                                  <td><select name="ad_comb" style="width: 80%;" required="required">
                                  <option value="">---select---</option>
                                  <option value="BCA">BCA</option>
                                  <option value="MCA">MCA</option>
                                  </select></td>
                                  <td><label>Year</label></td>
                                  <td><select name="ad_yr" style="width: 60%;" required="required">
                                    <option value="">---select---</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                  </select></td>
                                  <td><label>Sem</label></td>
                                  <td><select name="ad_sec" style="width: 80%;" required="required">
                                    <option value="">---select---</option>
                                    <option value="1st Sem">1st Sem</option>
                                    <option value="2nd Sem">2nd Sem</option>
                                    <option value="3rd Sem">3rd Sem</option>
                                    <option value="4th Sem">4th Sem</option>
                                    <option value="5th Sem">5th Sem</option>
                                    <option value="6th Sem">6th Sem</option>
                                  </select></td>
                  </tr>
                  <tr>
                      <td> <label>Total Fee:</label></td>
                      <td><span id="sprytextfield14">
                      <input type="text" name="txt_st_tfee" id="txt_st_tfee" placeholder="Enter Anual Fee" required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="6"/>
                      </span></td>
                      <td> <label>Paid Fee:</label></td>
                      <td><span id="sprytextfield15">
                      <input type="text" name="txt_st_pfee" id="txt_st_pfee" placeholder="Enter Paid Fee" required="required"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="6"/>
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
              ["minlen=1",  "Please Enter First Name"              ] ],
              [//Name 
              ["minlen=1",  "Please Enter Last Name"              ] ],
              [//Gender
              ],
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
               [//City
              ],
              [//STATE
              ],
              [// City
              ],
              [//Pin
              ["minlen=1",    "Please Enter pin"              ] ],
              [//Name 
              ["minlen=1",  "Please Enter Father Name"              ] ],
              [//Name 
              ["minlen=1",  "Please Enter Mother Name"              ] ],
              [//Mobile
              ["num",   "Please Enter Parent Mobile No "      		     ],
              ["minlen=10", "Please Enter valid Mobile "       ] ],
              [//Email              
              ["minlen=1",    "Please Enter Parent  Email "             ], 
              ["email",   "Please Enter valid email "          ] ],
              [//Address
              ["minlen=1",    "Please Enter Address"           ] ],
             
              [//Course
              ],
			         [//Year
              ],
              [// Sem
              ],
               [//Total fee 
              ["minlen=1",  "Please Enter Anual Fee"              ] ] ];
</SCRIPT>
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12");
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13");
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14");
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15");
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16");

//-->
</script>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="js/location.js"></script> 

    
</body>
</html>
