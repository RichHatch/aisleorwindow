<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
        }
        h2 {
            font-size: 16px;
            margin: 16px 0 0 0;
        }
	</style>
</head>
<body>
    <div class="welcome">
        <h1>Welcome to aisle or window</h1>
        <h2>Please enter your information to allow posting of confirmation</h2><br>
        <form method="post" action="/store/">
            <label>
                Email:
                <input type="text" name="email" placeholder="test@example.com" /> 
            </label>
            <br>
            <label>
                First Name:
                <input type="text" name="first_name" placeholder="John" />
            </label>
            <br>
            <label>
                Last Name:
                <input type="text" name="last_name" placeholder="Smith" />
            </label>
            <br>
            <label>
                Flight Number:
                <input type="text" name="flight_number" placeholder="1234" />
            </label>
            <br>
            <label>
                Southwest Confirmation Code:
                <input type="text" name="confirmation_value" placeholder="ABC123" />           
            </label>
            <br>
        </form>
	</div>
</body>
</html>
