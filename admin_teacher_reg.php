

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher_reg</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .header
    {
        position: relative; 
        top: -8px;
        left: -8px;
        width:110%;
        height:80px;
        background-color:#061150;
    }
    header a {
      font-family:viga;
      float: left;
      display: block;
      color: #eeeeee;
      text-align: center;
      padding: 5px 8px;
      text-decoration: none;
      font-size: 18px;
      border: 1.5px solid darkorange;
      border-radius: 8px;
      margin-top: 15px;
      margin-left: 20px;
    margin-right: 20px;

    }
    header b {
		color:#663399;
		font-size:25px;
		font-family:verdana;
		text-align:left;
		margin-top:0px;
		float:left;
		margin:0px;
		line-height:50px;
		padding-left:9px;
    }
    header a:hover {
        background-color: rgb(255, 255, 255);
      color: goldenrod;
    }
    </style>
</head>
<body>
    <header> 

        <div class="header">
            <b><img src="logo.png" height="80" width="80"></b>
            <a href="welcomeadmin.php"> Home </a>
            <a href="adminlogin.php"> Log out </a>
            
            </div>
        </header>
    <style>body{min-height:130vh;}</style>
    
    <div class="box">
    <form id="t_form" action="teacher_confirm.php" method="post" enctype="multipart/form-data">
        <span class="text-center">Teacher Registration</span>
        <div class="input-container">
        <span class="hovertext" data-hover="Upload jpeg/jpg file only">
        <label>Photo:</label><br>
        <input type="file" id="photo" name="photo" accept="image/jpg, image/jpeg"><br>
        </span>
        </div>
        <div class="input-container">
        <label>Full name:</label><br>
        <input type="text" id="f_name" name="f_name" placeholder="First Name">
        <input type="text" id="m_name" name="m_name" placeholder="Middle Name">
        <input type="text" id="l_name" name="l_name" placeholder="Last Name">
        </div>
        <div class="input-container">
        <label>Date of Birth:</label><br>
        <input type="date" id="dob" name="dob"><br>
        </div>
        <div class="input-container">
        <label>Gender:</label><br>
        <select id="gender" name="gender">
            <option value="" selected="selected" disabled="disabled">-- select one --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br></div>
        <div class="input-container">
        <label>Qualification:</label><br>
        <select id="qualification" name="qualification">
            <option value="" selected="selected" disabled="disabled">-- select one --</option>
            <option value="No formal education">No formal education</option>
            <option value="Primary education">Primary education</option>
            <option value="Secondary education">Secondary education or high school</option>
            <option value="Vocational qualification">Vocational qualification</option>
            <option value="Bachelors degree">Bachelor's degree</option>
            <option value="Masters degree">Master's degree</option>
            <option value="Doctorate or higher">Doctorate or higher</option>
        </select><br></div>
        <div class="input-container">
        <label>Experience:</label><br>
        <select id="experience" name="experience">
            <option value="No_exp">No Experience</option>
            <option value="1_yr">0-1 Yr</option>
            <option value="1-3_yrs">1-3 yrs</option>
            <option value="3-5_yrs">3-5 yrs</option>
            <option value="5_yrs">5+ yrs</option>
        </select><br>
        </div>
        <div class="input-container">
        <label>Address:</label><br>
        <input type="text" id="address" name="address" placeholder="Apartment/building number, Street name, Area"><br>
        <input type="text" id="country" name="country" placeholder="Country"><br>
        <input type="text" id="state" name="state" placeholder="State"><br>
        <input type="text" id="city" name="city" placeholder="City"><br> 
        </div>
        <div class="input-container">
        <label>Aadhar Card:</label><br>
        <input type="number" id="adhaar" name="adhaar" minlength="12" maxlength="12" placeholder="XXXXXXXXXXXX"><br>
        </div>
        <div class="input-container">
        <label>PAN Card:</label><br>
        <input type="number" id="pan" name="pan" minlength="10" maxlength="10" placeholder="XXXXXXXXXX"><br>
        </div>
        <div class="input-container">
        <label>Contact num (Mobile):</label><br>
        <input type="number" id="c_num" name="c_num" minlength="10" maxlength="10" placeholder="XXX-XXX-XXX" pattern="^\d{3}-\d{3}-\d{4}$"
        required="required"><br>
        </div>
        <button type="submit" name="submit" class="btn">submit</button>
    </form>


</body>
</html>