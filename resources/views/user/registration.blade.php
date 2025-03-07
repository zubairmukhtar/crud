<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>

<body>

    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <input type="text" name="email" placeholder="Enter Email Address">
        <input type="text" name="password" placeholder="Enter Password">
        <button type="submit">Register</button>
    </form>

</body>

</html>
