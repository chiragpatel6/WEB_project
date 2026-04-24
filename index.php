

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ApexGear</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      
      <!-- end loader -->
     <?php
        include 'header.php';
     ?>
            <!-- banner -->
            <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1>Unleash Your<br>Apex Potential</h1>
                           <strong>Gaming laptops</strong>
                           <span>Get New One</span>
                           <a href="#">Buy Now</a>
                        </div>
                     </div>
                     <div class="col-md-7 padding_right1">
                        <div class="text-img">
                           <figure><img src="images/top_img.png" alt="#"/></figure>
                           <h3>01</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
      <h1 class="text-warning font-monospace  text-center my-3">Home</h1>
    <div class="container-fluid">
        <div class="col-md-12">
        <div class="row">
            
            
    <?php
    $con = new mysqli('localhost','root','','apexgear');
     $Record = mysqli_query($con,"select * from product");
     while($row=mysqli_fetch_array($Record)){
        $check_page=$row['Pcategory'];
        if($check_page ==='Home'){

            
            echo"
            <div class='col-md-6 col-lg-4 m-auto mb-3'>
            <form action='insertcart.php' method='post'>
            <div class='card m-auto' style='width: 18rem;'>
            <img src='../admin/product/$row[Pimage]' class='card-img-top m-auto'>
            <div class='card-body text-center'>
            <h5 class='card-title text-danger fs-4 fw-bold'>$row[Pname]</h5>
            <p class='card-text text-danger fs-4 fw-bold'>";?>RS:<?php echo number_format($row['Pprice'],2)?><?php echo" </p>
            <input type='hidden' name='Pname' value='$row[Pname]'>
            <input type='hidden' name='Pprice' value='$row[Pprice]'>
            <input type='number' name='Pquantity' value='min='1' max='15'' placeholder='quantity'><br><br>
            <input type='submit'  name= 'addcart' class='btn btn-success text-warning w-100' value='buy'>
            </div>
            </div>
            </form>
            </div>
            ";
        }
     }
?>
</div>
   </div>
    </div>

     <?php
        include 'footer.php';
        
     ?>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

