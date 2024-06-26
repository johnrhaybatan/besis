@include('templates.header')
<x-navreg />

<div class="register-container">
    <form action="/StudentRegister" method="POST">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        @csrf
        <div class="student-img">
            <h4>Student Registration</h4>
        </div>
        <div class="student-img">
            <figure>
                <img src="../images/University-of-Cebu-Logo.jpg" alt="Logo">

            </figure>
        </div>
        @csrf
        <div>
            <label for="fullname">Full Name:</label>
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your full name">
        </div>

        <div>
            <label for="year-level">Year Level:</label>
            <select class="form-select" name="yearlevel" id="yearlevel" aria-label="Select Year Level">
                <option selected>Select Year Level</option>
                <option value="11">Grade 7</option>
                <option value="12">Grade 8</option>
                <option value="11">Grade 9</option>
                <option value="12">Grade 10</option>
            </select>
        </div>

        <div>
            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" name="dateofbirth" id="dateofbirth"
                placeholder="Enter your date of birth">
        </div>

        <div>
            <label for="gender">Gender:</label>
            <select class="form-select" name="gender" id="gender" aria-label="Select Gender">
                <option selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password"
                placeholder="Enter your password">
        </div>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                placeholder="Confirm your password">
        </div>

        <div class="form-group text-center">
            <input type="submit" name="submit" class="btn btn-primary" value="Register">
        </div>
    </form>
</div>

@include('templates.footer')
