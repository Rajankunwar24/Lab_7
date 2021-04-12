<html>
<body>
<form action="display.php" method="post">
<div>
    <span><h2>Personal Information</h2></span>
    <div>
        <label>First Name</label>
        <input type="text" name="first_name" required>
    </div>
    <br>
    <div>
        <label>Last Name</label>
        <input type="text" name="last_name" required>
    </div>
    <br>
    <div>
        <label>Date of Birth</label>
        <input type="date" name="dob" required>
    </div>
    <br>
    <div>
        <label>Gender</label>
       <select name="gender" required>
       <option value="">Select Gender</option>
       <option value="male">Male</option>
       <option value="female">Female</option>
       </select>
    </div>
</div>
<br>
<div>
    <span><h2>Account Information</h2></span>
    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>
    <br>
    <div>
        <label>Retype Email</label>
        <input type="email" name="con_email" required>
    </div>
    <br>
    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <br>
    <div>
        <label>Re-type Password</label>
        <input type="password" name="con_password" required>
    </div>
    <div>
        <label>Secutity Question</label>
        <input type="text" name="security_question" required>
    </div>
    <div>
        <label>Secutity Answer</label>
        <input type="text" name="security_answer" required>
    </div>
    <br>
</div>
<div>
    <span><h2>Contact Information</h2></span>
    <div>
        <label>Address</label>
        <input type="text" name="address" required>
    </div>
    <br>
    <div>
        <label>City</label>
        <input type="text" name="city" required>
    </div>
    <br>
    <div>
        <label>State</label>
       <select name="state" required>
       <option value="">Select Gender</option>
       <option value="pokhara">Pokhara</option>
       <option value="lekhnath">Lekhnath</option>
       </select>
    </div>
    <br>
    <div>
        <label>Zip Code</label>
        <input type="text" name="zip_code" required>
    </div>
    <br>
    <div>
        <label>Phone Number</label>
        <input type="number" name="phone" required>
        <select name="phone_type" required>
       <option value="mobile">Mobile</option>
       <option value="telephone">Telephone</option>
       </select>
    </div>
    <br>
    <div>
        <input type="submit" value="Save" name="submit">
    </div>
</div>
</form>
</body>
</html>