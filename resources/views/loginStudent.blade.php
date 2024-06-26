@include('templates.header')
<x-navlog />

<div class="login-container">
    <h4>Basic Education Students Information System</h4>
    <form action="/loginStudent" method="POST">
        @csrf
        <div class="form-group">
            <figure>
                <img src="../images/University-of-Cebu-Logo.jpg" alt="">
            </figure>
        </div>
        <div class="btn-group">
            <a href="/loginStudent" class="btn btn-primary">Student</a>
            <a href="/loginTeacher" class="btn btn-primary">Teacher</a>
            <a href="/'loginParents" class="btn btn-primary">Parents</a>
        </div>

        <div class="form-group">
            <input type="text" id="email" name="email" placeholder="Student ID Number or Email" required
                class="form-control">

            <input type="password" id="password" name="password" placeholder="Enter your password" required
                class="form-control">



            <button type="submit" name="submit" class="btn btn-primary">Login</button>

        </div>
        <div class="form-group text-center">
            <a href="/StudentRegister" class="btn btn-link">Register</a>
            <a href="/forgotpassowrd" class="btn btn-link">Forgot Password</a>
        </div>
    </form>
</div>

@include('templates.footer')
