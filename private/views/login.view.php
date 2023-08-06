<?php $this->view('includes/header') ?>

    <div class="container-fluid">
        <div class="p-4 mx-auto shadow rounded" style="width: 100%; max-width: 310px; margin-top: 50px">
            <h5 class="text-center text-success" style="font-family: cursive;">Student Management System</h5>
            <img src="<?=ROOT?>/assets/logo.png" alt="logo" class="d-block mx-auto rounded-circle border border-success" style="width:100px;">
            <h3>Login</h3>
            <input type="email" placeholder="Email" name="email" class="form-control" autofocus>
            <br>
            <input type="password" placeholder="Password" name="password" class="form-control" autofocus>
            <br>
            <button class="btn btn-primary">Login</button>
        </div>
    </div>
    
<?php $this->view('includes/footer') ?>