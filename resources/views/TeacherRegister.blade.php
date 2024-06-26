@include('templates.header')
<x-navreg />

<div class="register-container">
    <form action="/TeacherRegister" method="POST">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        @csrf
        <div class="student-img">
            <h4>Teacher Registration</h4>
        </div>
        <div class="student-img">
            <figure>
                <img src="../images/concord.png" alt="Logo">

            </figure>
        </div>

        <div class="form-group">
            <label for="fullname">Full Name:</label>
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your full name">

            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" name="dateofbirth" id="dob"
                placeholder="Enter your date of birth">

            <label for="gender">Gender:</label>
            <select class="form-select" name="gender" id="gender" aria-label="Select Gender">
                <option selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">

            <label for="phone">Phone Number:</label>
            <input type="phone" class="form-control" id="phonenumber" name="phonenumber"
                placeholder="Enter your Phone Number">

            <label for="address">Address:</label>
            <input type="address" class="form-control" name="address" id="address" placeholder="Enter your email">

            <label for="employeeid">Employee ID:</label>
            <input type="address" class="form-control" name="employeeid" id="employeeid"
                placeholder="Enter your Employee ID">




            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password"
                placeholder="Enter your password">

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                placeholder="Confirm your password">
        </div>

        <div class="form-group text-center">
            <input type="submit" name="submit" class="btn btn-primary" value="Register">
        </div>
    </form>
</div>

@include('templates.footer')
