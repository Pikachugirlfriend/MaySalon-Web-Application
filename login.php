<!DOCTYPE html>
<?php
session_start();
include 'setup.php';
include 'header.php';

if (isset($_POST['ic']) && isset($_POST['cust_pwd'])) {
    $user = mysqli_real_escape_string($con, $_POST['ic']);
    $password = mysqli_real_escape_string($con, $_POST['cust_pwd']);

    $query = mysqli_query($con, "SELECT * FROM customers WHERE CustomerID='$user'");
    $row = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) == 0) {
        echo "<script>alert('IC number not found');</script>";
    } else {
        if ($row['Password'] === $password) {
            $_SESSION["CustomerID"] = $row['CustomerID'];
            header("Location: index2.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password');</script>";
        }
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <link href="resolution.css" rel="stylesheet">

    <title>May Salon Login Page</title>
</head>

<body>
    
    
    <section class="sign-up-container">
        <div class="container" id="container">
            <div class="form-container sign-up">
                <form action="cust_save.php" method="POST">
                    <h1>Let's create your account</h1><br>
                    
                    <input type="text" name="cust_id" placeholder="Ic number" maxlength="12" class="input-field" required>
                    <input type="text" name="cust_name" placeholder="Name" class="input-field" required>
                    <input type="email" name="cust_mail" placeholder="Email" class="input-field" required>
                    <input type="password" name="cust_pwd" placeholder="Password" maxlength="8" class="input-field" required>
                    <input type="tel" name="cust_num" placeholder="Phone Number" maxlength="11" class="input-field" required>
                    <input type="date" name="cust_dob" placeholder="Date of Birth" class="input-field" required>
                    <select name="gender" class="input-field" required>
                        <option value="" disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    
                    <button type="submit" class="button">Sign Up</button>
                </form>
            </div>

            <div class="form-container sign-in">
                
                    <h1>Sign In</h1>

                    <form method="post">
                    <div><input onblur="checkLength(this)" type="text" name="ic" placeholder="IC number without -" maxLength='13' required autofocus />
                    
                        <script>
                        function checkLength(el){
                        if (el.value.length < 12){
                        alert("Write your IC number")
                        }
                        }

                        function checkLength(el){
                        if (el.value.length > 12){
                        alert("IC number invalid")
                        }
                        }
                        </script>
                    </div>
                        <div>
            <input type="password" name="cust_pwd" placeholder="Password" maxlength="8" required />
        </div>
                    <div>
                    <button type="submit" class="button">SIGN IN</button>
</div>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Already have an account?</h1>
                        <p>Login here</p>
                        <button class="hidden" id="login">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Not have an account? </h1>
                        <p>Sign up here</p>
                        <button class="hidden" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>


</html>
