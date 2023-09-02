
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1>Create Account</h1>
     

        <?php echo form_open_multipart('users/registration'); ?>
        <!-- <form action="registration" method="post" enctype="multipart/form-data"> -->
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo set_value('email'); ?>" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted alert-danger"><?php echo form_error('email'); ?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo set_value('password'); ?>" placeholder="Password">
                <small id="emailHelp" class="form-text text-muted alert-danger"><?php echo form_error('password'); ?></small>
            
            </div>
            <h5>Password Confirm</h5>
            <input type="text" name="passconf" value="" size="50" class="form-control" value="<?php echo set_value('password'); ?>"/>
            <small id="emailHelp" class="form-text text-muted alert-danger"><?php echo form_error('passconf'); ?></small>
            
            <div class="form-group">
                <label for="exampleInputMoblie">Profile Picture</label>
                <input type="file" name="profilepic" class="form-control" id="mobile" aria-describedby="emailHelp" value="<?php echo set_value('profilepic'); ?>" placeholder="Enter Mobile">
                <small id="emailHelp" class="form-text text-muted alert-danger"><?php echo form_error('profilepic'); ?></small>
                <!-- <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

           
            <div class="form-group">
                <label for="exampleInputMoblie">Name</label>
                <input type="text" name="name" class="form-control" id="mobile" value="<?php echo set_value('name'); ?>" aria-describedby="emailHelp" placeholder="Enter Name">
                <!-- <small id="emailHelp" name="mobile" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                <small id="emailHelp" class="form-text text-muted alert-danger"><?php echo form_error('name'); ?></small>
            
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
        <div class="col-sm-3"></div>
    </div>

</body>
</html>