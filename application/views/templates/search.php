


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('css/search.css'); ?>" media="screen">
 

</head>
<body>
    <!-- Page Content -->
   <div class="container page-top">

        <?php echo form_open("users/search"); ?>
            <input type="text" name="searchValue" class="form-control" placeholder="enter search"><br/>
            <input type="submit" name="submit" value="search" class="btn btn-primary"><br/>

        </form></br>

        <div class="row">
        <?php
            if(isset($images)){
                foreach($images as $img){
               
                
        ?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php echo $img->webformatURL; ?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php echo $img->previewURL; ?>" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
        <?php
            }
            

        }
        ?>
           
            
           
           
       </div>

     
      

    </div>


<?php echo 'hii';?>
<script>
    $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    
</script>
</body>
</html>


