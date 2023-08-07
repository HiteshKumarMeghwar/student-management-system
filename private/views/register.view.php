<?php $this->view('includes/header') ?>
    <div class="container-fluid">
        <form action="" method="post">
            <div class="p-4 mx-auto shadow rounded" style="width: 100%; max-width: 310px; margin-top: 50px">
                <h5 class="text-center text-success" style="font-family: cursive;">Student Management System</h5>
                <img src="<?=ROOT?>/assets/logo.png" alt="logo" class="d-block mx-auto rounded-circle border border-success" style="width:100px;">
                <h3>Add User</h3>

                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Errors!</strong>
                        <?php foreach($errors as $error): ?>
                        <br> <?= $error ?>
                        <?php endforeach ?>
                        <button type="button" class="btn-close btn btn-danger btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif ?>

                <input type="text" placeholder="First Name" value="<?= get_var('first_name') ?>" name="first_name" class="form-control my-2">
                <input type="text" placeholder="Last Name" value="<?= get_var('last_name') ?>" name="last_name" class="form-control my-2">
                <input type="email" placeholder="Email" value="<?= get_var('email') ?>" name="email" class="form-control my-2">
                <select name="gender" class="my-2 form-control">
                    <option <?= get_select('gender','') ?> >-- Select a Gender --</option>
                    <option <?= get_select('gender','male') ?> value="male">Male</option>
                    <option <?= get_select('gender','female') ?> value="female">Female</option>
                </select>
                <select name="rank" class="my-2 form-control">
                    <option <?= get_select('rank','') ?>>-- Select a Rank --</option>
                    <option <?= get_select('rank','student') ?> value="student">Student</option>
                    <option <?= get_select('rank','reception') ?> value="reception">Reception</option>
                    <option <?= get_select('rank','lecturer') ?> value="lecturer">Lecturer</option>
                    <option <?= get_select('rank','admin') ?> value="admin">Admin</option>
                    <option <?= get_select('rank','super_admin') ?> value="super_admin">Super Admin</option>
                </select>
                <input type="text" value="<?= get_var('password') ?>" placeholder="Password" name="password" class="form-control my-2">
                <input type="text" value="<?= get_var('password2') ?>" placeholder="Retype Password" name="password2" class="form-control my-2">
                <br>
                <button class="btn btn-primary float-end text-white">Add User</button>
                <button class="btn btn-warning">Cancel</button>
            </div>
        </form>
    </div>
    
<?php $this->view('includes/footer') ?>