<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Todone | Sing In</title>
</head>
<body>
<div class="form-wrapper">
    <h1>Sign In</h1>
    <form action="/home" method="post">
        <div class="form-item">
            <label for="email"></label>
            <input type="email" name="email" required="required" placeholder="Email Address"></input>
        </div>
        <div class="form-item">
            <label for="password"></label>
            <input type="password" name="password" required="required" placeholder="Password"></input>
        </div>
        <div class="button-panel">
            <input type="submit" class="button" name="sign-in" title="Sign In" value="Sign In"></input>
        </div>
    </form>
    <div class="form-footer">
        <p><a href="#">Create an account</a></p>
        <p><a href="#">Forgot password?</a></p>
    </div>
</div>
</body>
</html>