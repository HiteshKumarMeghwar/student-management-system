<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/crumbs') ?>
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <img src="<?=ASSETS?>/logo.png" alt="logo" class="d-block mx-auto rounded-circle border border-primary" style="width:150px;">
                <h3 class="text-center">Hitesh Kumar</h3>
            </div>
            <div class="col-sm-8 col-md-9 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>First Name</th><td>Hitesh</td></tr>
                    <tr><th>Last Name</th><td>Kumar</td></tr>
                    <tr><th>Email</th><td>hiteshkumar@gmail.com</td></tr>
                    <tr><th>Gender</th><td>Male</td></tr>
                    <tr><th>Date Created</th><td>09/04/2023s</td></tr>
                </table>
            </div>
            <br>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Classes</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Tests</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                    </div>
                </form>
            </nav>
        </div>
    </div>
    
<?php $this->view('includes/footer') ?>