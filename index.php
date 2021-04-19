    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Jack & Jones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    </head>
    <body class="container ">
        <h1 class="text-center text-white  mb-6 p-1" style="background-color:#000066;"> Jack & Jones</h1>

    <div class="row">

    <?php 

    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'shoppingphp');

    // if($con){
    //     echo "Connection successful";
    // }
    // else{
    //     echo "not connected";
    // }

    $query="SELECT  `brand`, `name`, `image`, `price`, `off` FROM `shoppinginfo` order by id asc";
    $qfire = mysqli_query($con,$query);

    $num = mysqli_num_rows($qfire);

    if($num>0)
    {
        while($product=mysqli_fetch_array($qfire)){
            ?>
        
            <div class="col-lg-3 col-md-3 col-sm-12 mt-5 hover-shadow">
            <form>
                <div class="card" style="border-color:#000066;"> 
                <div class="card-body">
                <img src="<?php echo $product['image']; ?>" alt="tshirt image" class="img-fluid">           
                </div>
                <div class="card-info ml-3">
                <h6 class="card-title"><?php echo $product['brand']; ?></h6>
                <p class="card-details 'a' small mt-0 text-muted"><?php echo $product['name']; ?> <br>
                &#8377; <?php echo $product['price']; ?> <span class="text-danger">(<?php echo $product['off']; ?>% Off)</span>
                <span class="badge badge-success small">4.5 <i class="fa fa-star fa-spin"></i></span></p>
                </div>
                <a href="#" class="btn text-light rounded-bottom" style="background-color:#000066">Add To Cart</a>
                </div>
            </form>
            </div> 

           
    <?php    
        }
    }

    ?>
    </div>
    <footer class=" text-light text-center mt-5" style="background-color:#000066;"><h5>J & J</h5><p class="small"> Copyright@ 2021 By Nipan Pradhan.</p></footer>
    </body>
    </html>
