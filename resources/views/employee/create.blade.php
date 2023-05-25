<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data
                Master</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}"
                            class="nav-link">Employee List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn
btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i>
                    My Profile</a>
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Create Employee</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input class="form-control" type="text" name="firstName" id="firstName" value=""
                            placeholder="Enter First Name">
                        @error('firstName')
                            <p style="color:red; margin-bottom:25px;">"{{ $message }}"</p>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Last
                            Name</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value=""
                            placeholder="Enter Last Name">
                        @error('lastName')
                            <p style="color:red; margin-bottom:25px;">"{{ $message }}"</p>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" name="email" id="email" value=""
                            placeholder="Enter Email">
                        @error('email')
                            <p style="color:red; margin-bottom:25px;">"{{ $message }}"</p>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input class="form-control" type="text" name="age" id="age" value=""
                            placeholder="Enter Age">
                        @error('age')
                            <p style="color:red; margin-bottom:25px;">"{{ $message }}"</p>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="position" class="form-label">Position</label>
                        <select name="position" id="position" class="form-select">
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}"
                                    {{ old('position') == $position->id ? 'selected' : '' }}>
                                    {{ $position->code .
                                        ' -
                                                                ' .
                                        $position->name }}</option>
                            @endforeach
                        </select>
                        @error('position')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle
me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark
btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                            Save</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
