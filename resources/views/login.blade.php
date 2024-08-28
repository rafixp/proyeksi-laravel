<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Laundry.id</title>
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="stylesheet" href="/assets/css-bs/bootstrap.min.css">
    <script src="/assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="card w-25 mx-auto bg-white rounded mt-5 shadow">
        <div class="card-body">
            <h5>Login Page</h5><br>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label class="fs-15">Email</label>
                    <input type="email" name="email" class="form-control form-sm">
                </div>
                <div class="form-group mt-2">
                    <label class="fs-15">Password</label>
                    <input type="password" name="pass" class="form-control form-sm">
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-sm btn-primary w-100">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>