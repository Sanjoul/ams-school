<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create </title>
</head>

<body>
    @if ($errors->any())
        <div class="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div>
            <label for="name"> Full Name</label>
            <input type="text" name="name" placeholder="Enter Grade Name" required>
        </div>
        <div>
            <label> Email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div>
            <label> Password</label>
            <input type="password" name="password" placeholder="password" required>
        </div>
        <div class="col-md-8 mt-5">
            <div class="row align-items-center">
                <label for="role" class=" col-md-3 form-label" required>Role</label>
                <div class="col-md-2 form-check form-check-inline">
                    <input class="form-check-input" id="admin" type="radio" name="role[]" value="1" >
                    <label class="form-check-label" for="admin">
                        Admin
                    </label>
                </div>
                <div class="col-md-3 form-check form-check-inline ms-1">
                    <input class="form-check-input" id="teacher" type="radio" name="role[]" value="2" >
                    <label class="form-check-label" for="teacher">
                        Teacher
                    </label>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Add</button>

    </form>

</body>
<script>
    setTimeout(() => {
        document.querySelector('.alert').style.display = 'none';
    }, 2000);
</script>

</html>
