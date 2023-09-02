<?php
// echo "this is registration page";
// print_r($data);
// echo "hii";
// exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .main-container{
            display: flex;
        }
        .left-container{
            width: 20%;
            margin: 0px;
            padding: 0px;
            flex-direction: column;
            /* height: 100px; */
            /* border: 1px solid red; */
            background-color: black;
        }
        .left-container,.right-container ul{
            margin: 0px;
            padding: 0px;
            list-style-type: none;
        }
        .left-container ul li{
            /* float: left; */
            width: 100%;
            height: 50px;
            color: white;
            text-align: center;
            line-height: 50px;

            border: 1px solid silver;
        }
        .right-container{
            width: 80%;
            flex-direction: row;
            height: 100px;
            background-color: gray  ;
            border: 1px solid silver;
        }
        .panel{
            width: 80%;
            /* flex-direction: column; */
            height: 100px;
            float: right;
            background-color: rgba(128, 128, 128, 0.167)  ;
            border: 1px solid red;
        }
        .right-container ul li{
            list-style-type: none;
            float: right;
            margin-right: 20px;
            line-height: 100px;
            text-align: center;

        }
        .imagebox{
            width: 100px;
            height: 100px;
            border-radius: 40px;

        }
    </style>
</head>
<body>
    <div class="container-fluid">

        <div class="main-container">
            <div class="left-container">

                    <ul>
                        <li><a href="index">Dashboard</a></li>
                        <li><a href="update_user/<?php echo $this->session->userdata('id');?>">Profile</a></li>
                        <li><a href="search">Search</a></li>
                    </ul>

            </div>
            <div class="right-container">
                <ul>
                <!-- <img src="bulboff.png" alt="" class="imagebox"> -->
                <li>
                  <button class="btn btn-danger"><?php echo anchor('users/logout','Logout') ?></button>

                   
    
                        </li>
                   

                    <li>
                    <h3><?php echo $this->session->userdata('name'); ?></h3>

                    </li>
                    <li>
                      <a href="update_user/4"><img src="<?php echo base_url("upload/".$this->session->userdata('photo'));?>" class="imagebox" alt="" style="width:100px;height:100px;border-radius:50px;">
                    </a>
                    </li>
                 
                </ul>

            </div>
            
        </div>
        <div class="panel">

        </div>
    </div>
</body>
</html>


        <?php echo $this->session->flashdata('success') ?>
      </div>
  
    
    


    </div>

</body>
</html>