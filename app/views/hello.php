<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aisle or Window</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 600px;
			top: 50%;
            margin-left: auto;
            margin-right: auto;
			margin-top: 50px;
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
        h6 {
            font-size: 8px;
            margin: 8px 0 0 0;
        }
        .left {
            width:300px;
            text-align:right;
            display:block;
            float:left;
            line-height:145%;
        }
        .right {
            width:300px;
            display:block;
            float:left;
            text-align:left;
        }
	</style>
</head>
<body>
    <div class="welcome">
        <h1>Welcome to aisle or window</h1>
        <h2>Enter your info and we'll check you in.  That's all. Promise.</h2>
        <h6>Email is optional. We'll just notify you when we've checked you in.</h6>
        <br>
        <div class="left">
            <label>Email</label>
            <br>
            <label>First Name</label>
            <br>
            <label>Last Name</label>
            <br>
            <label>Flight Number:</label>
            <br>
            <label>Southwest Confirmation Code</label>
        </div>
        <div class="right">
            <form method="post" action="/store/">
                <input type="text" name="email" placeholder="test@example.com" />
                <br>
                <input type="text" name="first_name" placeholder="Lloyd" />
                <br>
                <input type="text" name="last_name" placeholder="Christmas" />
                <br>
                <input type="text" name="flight_number" placeholder="1234" />
                <br>
                <input type="text" name="confirmation_value" placeholder="ABC123" />
                <br>
                <input type="submit" />
            </form>
        </div>
	</div>
</body>
</html>
