<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add User - CRUD</title>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">Add New User</div>
        @if(Session::has('fail'))
            <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
        @endif
        <div class="card-body">
            <form action="{{ route('AddUser') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" name="full_name" class="form-control" id="full_name" value="{{old('full_name')}}"
                           placeholder="Enter FullName">
                    @error('full_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Enter Email">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control" id="phone_number" value="{{old('phone_number')}}"
                           placeholder="Enter Phone Number">
                    @error('phone_number')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                           placeholder="Enter Password">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                           placeholder="Enter Re-Password">
                    @error('re-password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
