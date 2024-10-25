<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Student  information Form</title>
</head>
<body>
<div class="container">  
        <form id="Information"  method="post">
          <h3>Student Information Form</h3>
          <fieldset>
            <input placeholder="Name" type="text" name="name" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Email Address (optional)" type="email" name="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Phone Number" type="tel" name="phone" tabindex="3" required>
          </fieldset>
          <fieldset>
            <input placeholder="Department Name" type="text" name="dept" tabindex="4" required>
          </fieldset>
          <fieldset>
            <input placeholder="Batch No" type="text" name="batch" tabindex="5" required>
          </fieldset>
          <fieldset>
            <input placeholder="ID No" type="id" name="id" tabindex="6" required>
          </fieldset>
          <fieldset>
            <label>Gender:</label>
            <label><input type="radio" name="gender" value="male" tabindex="7" required> Male</label>
            <label><input type="radio" name="gender" value="female" tabindex="8" required> Female</label>
            
          </fieldset>
          <fieldset>
            <label>Country:</label>
            <select class="country" name="country" tabindex="9" required>
                <option value="" disabled selected>Select a country</option>
                <option value="BD">Bangladesh</option>
            </select>
          </fieldset>
          <fieldset>
            <label>District:</label>
            <input type="text" name="distric" placeholder="District" tabindex="10" required>
          </fieldset>
          <fieldset>
            <label>Address:</label>
            <textarea name="address" placeholder="Address" tabindex="11"></textarea>
          </fieldset>

          
          <fieldset>
            <button name="submit" type="submit" id="Informtion-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
    </div>



</body>
</html>