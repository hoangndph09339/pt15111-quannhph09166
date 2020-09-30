<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="{{route('postLogin')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">User name</label>
                        <input type="text" name="username" class="form-control" id="" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id="" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
