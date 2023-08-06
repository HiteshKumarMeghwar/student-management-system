<?php $this->view('includes/header') ?>

    <div class="container-fluid">
        <div class="p-4 mx-auto shadow rounded" style="width: 100%; max-width: 310px; margin-top: 50px">
            <h5 class="text-center text-success" style="font-family: cursive;">Student Management System</h5>
            <img src="<?=ROOT?>/assets/logo.png" alt="logo" class="d-block mx-auto rounded-circle border border-success" style="width:100px;">
            <h3>Add User</h3>
            <input type="text" placeholder="First Name" name="first_name" class="form-control my-2">
            <input type="text" placeholder="Last Name" name="last_name" class="form-control my-2">
            <input type="email" placeholder="Email" name="email" class="form-control my-2">
            <select name="gender" class="my-2 form-control">
                <option>-- Select a Gender --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <select name="rank" class="my-2 form-control">
                <option>-- Select a Rank --</option>
                <option value="student">Student</option>
                <option value="reception">Reception</option>
                <option value="lecturer">Lecturer</option>
                <option value="admin">Admin</option>
                <option value="super_admin">Super Admin</option>
            </select>
            <input type="text" placeholder="Password" name="password" class="form-control my-2">
            <input type="text" placeholder="Retype Password" name="password2" class="form-control my-2">
            <br>
            <button class="btn btn-primary float-end text-white">Add User</button>
            <button class="btn btn-warning">Cancel</button>
        </div>
    </div>
    
<?php $this->view('includes/footer') ?>