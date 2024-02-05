<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page Administrator for Seni Kebudayaan Dunia Sarjana (SKEDSA)</title>
    <link rel="stylesheet" href="style.css">

    <style>

        html, body {
            background-image: url('photo/bg4.png');
        background-size: 100% 100%; /* Make the background image cover the entire viewport */
        background-repeat: no-repeat;
        margin: 0; /* Remove default body margin for a cleaner look */
        height: 100vh;
		}
		
		    input[type="text"],
            input[type="password"] {
        border-radius: 5px; /* Add rounded corners to the input boxes */
        padding: 8px; /* Adjust padding based on your preference */
        margin-bottom: 10px; /* Add some space between the input boxes */
    }
		
		button {
        background-color: black;
        color: white; /* Set the text color to white for better visibility */
        padding: 10px 15px; /* Adjust padding based on your preference */
        border: none;
        border-radius: 5px; /* Add rounded corners for a better appearance */
        cursor: pointer;
    }

    button:hover {
        background-color: darkslategray; /* Change the color on hover if desired */
    }
	</style>
</head>


<body>
<script>
var nama=prompt("Please Enter Your Name")
alert("Welcome To SKEDSA's Admin Page, "+nama);


decision=confirm("Are You A SKEDSA Member, "+ nama + "?")


if (decision==true)
{
alert ("Access Granted! Welcome To SKEDSA's Admin Page, "+ nama); 
}
else
{
alert ("Access Denied! This Website is strictly For Members of Seni Kebudayaan Dunia Sarjana");
}

</script>

        <form action="login2.php" method="post" align="center">
            <h2>Login</h2>
            <h3><label for="username">Username:</label></h3>
            <input type="text" name="username" required>

            <h3><label for="password">Password:</label></h3>
            <input type="password" name="password" required>

            
			<button type="submit">Login</button>
			
        </form>
    </div>
</div>

</body>
</html>