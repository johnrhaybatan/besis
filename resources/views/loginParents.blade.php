@include('templates.header')
<x-navlog />

<div class="login-container">
    <h4>Basic Education Students Information System</h4>
    <form>
        <div class="form-group">
            <figure>
                <img src="../images/University-of-Cebu-Logo.jpg" alt="">
            </figure>



        </div>
        <div class="btn-group">
            <a href="/loginStudent" class="btn btn-primary">Student</a>
            <a href="/loginTeacher" class="btn btn-primary">Teacher</a>
            <a href="/loginParents" class="btn btn-primary">Parents</a>
        </div>

        <div class="form-group">
            <input type="text" id="id" name="id" placeholder="Student ID" required class="form-control">
        </div>

        <div class="form-group">
            <input type="password" id="password" name="password" placeholder="Student Password" required
                class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

        <div class="form-group text-center">
            <a href="/register" class="btn btn-link">Register</a>
            <a href="/forgot-password" class="btn btn-link">Forgot Password</a>
        </div>
    </form>
</div>

@include('templates.footer')
