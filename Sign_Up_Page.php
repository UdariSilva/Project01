<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            background-image: url("images/pexels-mccutcheon-1209843.jpg");  
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;  
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: sans-serif;
            color: rgb(252, 255, 250);  
        }

         /*title bar styles*/
      .title-bar {
            background-color: #1a1a1a;
            padding: 10px;
            text-align: left;
            color: #eee;
            margin-bottom: 0px;
            font-family:'Raleway', sans-serif;
        }

        .title-bar img {
            max-height: 100px;  
            margin-right: 10px;  
        }

        .title-bar h1 {
            color: #eee;
            margin: 0;  
            font-size: 1.5em;  
        }

        .signup-container {
            background-color: rgba(0, 0, 0, 0.6);  
            padding: 40px;
            border-radius: 10px;
            backdrop-filter: blur(5px);  
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            color: white;
        }
        .form-control::placeholder{
            color: white;
        }

        .btn-primary {
            background-color: rgba(4, 163, 142, 0.7);  
            border: none;
            transition: background-color 0.3s ease;
            color: aliceblue;
        }

        .btn-primary:hover {
            background-color: rgb(49, 103, 253);
        }

        .social-buttons {
            margin-top: 20px;
        }

        .social-buttons button {
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            margin: 0 5px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;

        }
        .social-buttons button:hover{
            background-color: rgba(255, 255, 255, 0.8);
        }
        .form-check-label, .form-check-input{
            cursor: pointer;
        }
        .form-check{
            display: flex;
            justify-content: left;
        }

        .link{
            color:rgb(255, 255, 255);
            text-decoration: none;
        }
    </style>
</head>

<body>
    


    <div class="signup-container">
        <h2>Have an account?</h2>
        <form id="signupForm">
            <div class="mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Email Address" required>
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
                <a href="#" style="margin-left: 50px; color: white; text-decoration: none;">Forgot Password</a>
            </div>
            <button type="button" class="btn btn-primary w-100" onclick="signUp()">SIGN UP</button>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function signUp() {

            var username = document.getElementById("username");
            var email = document.getElementById("email_address");
            var phone = document.getElementById("phone_number");
            var password = document.getElementById("password");
            var confirmPassword = document.getElementById("confirmPassword");

            if (password.value !== confirmPassword.value) {
                alert("Passwords do not match!");
                return;
            }

            var form = new FormData();
            form.append("username", username.value);
            form.append("email_address", email.value);
            form.append("phone_number", phone.value);
            form.append("password", password.value);
            form.append("confirmPassword", confirmPassword.value);

            var request = new XMLHttpRequest();

            request.onreadystatechange = function () {
                if (request.readyState == 4) {
                    var response = request.responseText;
                    if (response === "success") {
                        alert("Sign-up successful! You can now sign in to your account.");
                        window.location.href = "Home_Page.php"; 
                    } else {
                        alert(response); 
                    }
                }
            };

            request.open("POST", "sign_Up_Process.php", true);
            request.send(form);
        }
    </script>
</body>

</html>