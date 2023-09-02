
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>login here</title>
</head>
<body style="background-repeat: repeat;
  background-size: 100%;background-image:url('<?php echo base_url("images/login.avif");?>');">
    <div class="row">
        <!-- <img src="<?php //echo base_url("images/login.avif");?>" alt=""> -->
        <div class="col-sm-3"></div>
        <div class="col-sm-6" >
        <?php echo validation_errors(); ?>

        <?php echo form_open('users/login'); ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
        <div class="col-sm-3"></div>
    </div>

</body>
</html>