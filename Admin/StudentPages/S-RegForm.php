<?php  include('./StudentPages/phpPages/studentInsert.php');
 $y = date('y');
$a = "HUSAC";
$m = date('m');
$st_reg = $y.$a.$m.mt_rand(100,999);
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Student Registration Form</title>
</head>
<style>
label{color: black; text-decoration: none;}
button {  background-color: slateblue;  color: #ffffff;  padding: 15px 20px;  font-size: 19px;  font-family: Raleway;  cursor: pointer;  margin: 10px;  opacity: 0.9;}
button:hover { opacity: 1;}
label{ float: left;  text-align: center;  margin-top: 10px;  padding: 2px 5px;}
</style>
<body>
  <div class="border">
    <div class="form">
    <!--Page Form-->
     <form id="StudentRegForm" method="POST">
          <!--Personal Details Tab-->
                <h1 style="margin-left: -72%; margin-top: 15px;">Personal Details</h1>
                <INPUT TYPE="hidden" name="r_id" id="r_id" VALUE="<?php echo $st_reg;?>"/>
                  <table style="width: 96%;">
            	<tr>
                   <td> <label>Firt Name</label></td>
                   <td><input style="width: 85%;" type="text" id="fname" placeholder="Enter First Name"  onkeypress="validfield();" name="first_name" ></td>
                   <td> <label >Last Name</label></td>
                    <td><input style="width: 85%;" type="text" id="lname" placeholder="Enter Last Name" onkeypress="validfield();" oninput="this.className = ''" name="last_name"></td>
              </tr>
              <tr>  
                  
                  <td><label>DOB</label></td>
                  <td><input style="width: 85%;" type="date" name="s_dob"></td>
                  <td><label>Gender</label></td>
                  <td><select style="width: 55%;" name="gender" id="gender">
                      <option value="--select--">---select---</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                  </select></td>
           	  </tr>

              <tr>
                  <td><label>Phone No</label></td>
                  <td><input style="width: 85%;" type="text" id="phone_no" placeholder="Mobile No"  name="phonno" onkeypress="validnumber(evt)"></td>
                  <td><label>E-mail</label></td>
                  <td><input style="width: 85%;" type="email" id="email" placeholder="Email ID"  name="email"></td>
              </tr>
              <tr>
                  <td><label>Address</label></td>
                  <td><input style="width: 85%;" type="text" name="s_address"> <td><label>State</label></td>
                  <td><select style="width: 85%;" name="s_state"> 
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
                      <td><select name="s_city">
                          <option value="---select---">--select--</option>
                          <option value="bengalur"> Bengaluru</option>
                          <option value="bengalur"> Mandiya</option>
                          <option value="bengalur"> Mysore</option>
                          <option value="bengalur"> Delhi</option>
                          </select></td>
                      <td><label>Pin Code</label></td>
                      <td><input  style="width: 85%;"type="text"  name="pincode" placeholder="Enter Pin code"></td>
                  </tr>
                  </table>
           
          <!--Parent Details Tab-->
               <h1 style="margin-left: -75%; margin-top: 15px;">Parent Details</h1>
                  <table  style="width: 96%";>
                      <tr>
                          <td><label>Father Name</label></td>
                          <td><input type="text"onkeypress="validfield();" name="father_name" placeholder="Father Name"></td>
                          <td><label>Mobile No</label></td>
                          <td><input type="text" name="father_no"  placeholder="Mobile No"></td>
                      </tr>

                      <tr>
                          <td><label>Mother Name :</label></td>
                          <td><input type="text" name="mother_name" onkeypress="validfield();" placeholder="Mother Name"></td>
                          <td><label>Mobile No :</label></td>
                          <td><input type="text" name="mother_no" placeholder="Mobile"></td>
                      </tr>

                      <tr>
                          <td><label>Email Id :</label></td>
                          <td><input type="text" name="father_email" placeholder="Email ID"></td>
                          <td><label>Address :</label></td>
                          <td><input type="text" name="p_address" placeholder="Address"></td>
                      </tr>

                      <tr>
                          <td><label>State</label></td>
                        <td><select style="width: 80%;" name="fstate">
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
                          <td><label>City</label></td>
                          <td><select style="width: 80%;" name="fcity">
                              <option value="--select--">--select--</option>
                              <option value="Bengalur"> Bengaluru</option>
                              </select></td>
                      </tr>
                      <tr>
                          <td><label>Pin Code</label></td>
                          <td><input type="text" name="fpincode"  placeholder="Enter Pin code"></td>
                      </tr>
                  </table>
                <!--Addmision Tab-->
                          <h1 style="margin-left: -78%; margin-top: 15px;">Addmission</h1>
                            <table style="width: 96%;">
                                <tr>
                                  <td><label>Combination</label></td>
                                  <td><select name="ad_comb" style="width: 80%;">
                                  <option value="--select--">---select---</option>
                                  <option value="BCA">BCA</option>
                                  <option value="MCA">MCA</option>
                                  </select></td>
                                  <td><label>Year</label></td>
                                  <td><select name="ad_yr" style="width: 60%;">
                                    <option value="--select--">---select---</option>
                                    <option value="1">1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3">3rd Year</option>
                                  </select></td>
                                  <td><label>Sem</label></td>
                                  <td><select name="ad_sec" style="width: 80%;">
                                    <option value="--select--">---select---</option>
                                    <option value="A">1st Sem</option>
                                    <option value="B">2nd Sem</option>
                                    <option value="A">3rd Sem</option>
                                    <option value="B">4th Sem</option>
                                    <option value="A">5th Sem</option>
                                    <option value="B">6th Sem</option>
                                  </select></td>
                                </tr>
          <!--Fee Structure -->
                              <tr>
                                <td><label>Total Fee</label></td>
                                <td><input type="text" name="totalfee" placeholder="Total Fee"></td>
                                <td><label>Paid Fee</label></td>
                                <td><input type="text"  name="paidfee" placeholder="Enter Amount"></td>
                                <td><label>Balance :</label></td>
                                <td><lable><?php echo "Balance";?></lable></td>
                              </tr>
                              <br>
                          </table>
               
                <br><br>            

          <!--Buttons Tab-->
                <div style="position: relative; margin-top: 40px; float: left;" align="center">
                         
                          <button type="submit" id="sub"   name="submit">Register Student</button>
                </div>           
     </form>    
    </div>
  </div>
</body>
</html>


