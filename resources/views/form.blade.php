<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Form</h2>
<form action="{{route('store')}}" method="POST">
    @csrf
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control"  name="email">
    </div>
    <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password">
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

</body>
</html>
