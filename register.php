<html>  
<head>   
<title>  
Registration Page  
</title>  
</head>  
<body bgcolor="Lightskyblue">  

<img src="https://www.auf.edu.ph/home/images/logo2.png" />
<hr />

<form action="summary.php" method="POST"> 
    <label> First Name </label>         
    <input type="text" name="firstname" size="15" required/>
    <label> Middle Name: </label>     
    <input type="text" name="middlename" size="15" required/>
    <label> Last Name: </label>         
    <input type="text" name="lastname" size="15" required/> <br> <br>  
    Email:  
    <input type="email" name="email" required/> 
    
    <label>Phone:</label>  
    <input type="text" name="country code"  value="+63" size="2"/>   
    <input type="number" name="phone_number" size="10"/> <br> <br> 

    <label>Sex:</label><br>  
    <input type="radio" name="sex" value="male" checked="checked" /> Male <br>  
    <input type="radio" name="sex" value="female" /> Female
    <br>  <br>
    Birthdate:  
    <input type="date" name="birthdate"/> <br>   
    <br>  

    <label>Program:</label>   
    <select name="program">
    <option value="BSA">BS Accountancy</option>  
    <option value="BSBA">BS Business Administration</option>  
    <option value="BSEE">BS Electronics Engineering</option>  
    <option value="BSIT">BS Information Technology</option>  
    <option value="BSCS">BS Computer Science</option>
    </select>  
    
    <br>  
    <br>  
     
    Address  
    <br>  
    <textarea cols="80" rows="5" name="address"></textarea>  
    <br> <br>     
    <input type="reset" value="Clear"/>  
    <input type="submit" value="Register Now"/>  
</form>  

</body>  
</html>  