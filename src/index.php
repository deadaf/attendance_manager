<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/index.css">

</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>


    <form class="login-form" action="/pages/dashboard.php">
        <div class="mb-3">
            <label for="Username" class="form-label">Email address</label>
            <input type="text" class="form-control" name="Username" id="Username" placeholder="Enter your Username...">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" name="Password" id="Password"
                placeholder="Enter your Password...">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</body>

</html>