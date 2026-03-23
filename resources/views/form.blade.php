<!DOCTYPE html>
<html>
<head>
    <title>Laravel Form</title>
</head>
<body>

<h2>Simple Form</h2>

<form method="POST" action="/submit">
    @csrf

    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>

    <button type="submit">Submit</button>
</form>

<hr>

@if(isset($data))
    <h3>Submitted Data:</h3>
    Name: {{ $data['name'] ?? '' }} <br>
    Email: {{ $data['email'] ?? '' }}
@endif

</body>
</html>