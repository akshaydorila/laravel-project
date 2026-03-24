<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">Form</h2>

        <form method="POST" action="/submit">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-success   w-100">Submit</button>
        </form>
    </div>
</div>

</body>
</html>