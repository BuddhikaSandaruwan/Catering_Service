

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/logInCSS.css" >
    <link rel="shortcut icon" href="https://alpineeventrentals.com/wp-content/uploads/2018/03/Alpine_Events_Logo_Small_4.png">
    <title>ALPINE EVENT CATARINGS</title>

</head>
<body>

<style>

    /*#aa {*/
        /*background-color:transparent !important;*/
        /*border-color:transparent;*/
        /*background-image:none;*/
        /*box-shadow:none;*/
    /*}*/
</style>

<nav id="aa" class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <img src="https://alpineeventrentals.com/wp-content/uploads/2018/03/Alpine_Events_Logo_Small_4.png">
    <H1>LPINE EVENT CATARINGS</H1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">

            <form id="passwordForm" class="modal-content animate" action="Order.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <h2>Log In</h2>
                </div>
                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <a href="Order.php">
                        <button id="butLog" type="submit">Login</button>
                    </a>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me</label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="SignUp.php">password?</a></span>
                </div>
            </form>
        </div>
    </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="dist/img/4187.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="dist/img/562.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="dist/img/4937.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="card">
    <div class="card-header">
Importent
    </div>
    <div class="card-body">
        <h5 class="card-title">Special Offer</h5>
        <p class="card-text">Sign up today and get spicial offers.</p>
        <a href="SignUp.php" class="btn btn-primary">Sign Up</a>
    </div>
</div>


<div class="card-group">
    <div class="card">
        <img class="card-img-top" src="https://84kdh16arfp3ey9ym1stx0dj-wpengine.netdna-ssl.com/wp-content/uploads/2015/01/can2.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Canopies & Tents</h5>
            <p class="card-text">High Peak canopies and tents create an open and elegant look. They are perfect for weddings, graduations, anniversary parties, or any outdoor gathering. Aluminum metal frame and vinyl top. Price includes set-up and take down.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://84kdh16arfp3ey9ym1stx0dj-wpengine.netdna-ssl.com/wp-content/uploads/2015/01/table2.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Tables</h5>
            <p class="card-text">Dark Walnut 8′ Table. Using chairs, it seats 8-10 comfortably (10 when using ends). You may be able to seat up to 5 people per side when using benches. Dimensions: 96″ long, 48″ wide, 31.25″ high.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://84kdh16arfp3ey9ym1stx0dj-wpengine.netdna-ssl.com/wp-content/uploads/2015/01/chair2.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Chairs & Seating</h5>
            <p class="card-text">High end classic Chiavari chair.

Padded seat cushion available in black, ivory, or white.

                For the same number of cushions, select your seat cushion color preference below. You will then be prompted to select the number of chairs. For an alternate number, you may add to your quote here.</p>
        </div>
    </div>
</div>

<div class="card-group">
    <div class="card">
        <img class="card-img-top" src="https://84kdh16arfp3ey9ym1stx0dj-wpengine.netdna-ssl.com/wp-content/uploads/2015/01/l3.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Lighting</h5>
            <p class="card-text">This product also requires Vintage Gold Light Stands or similar structure for hanging the lights. Options include: Edison Bulbs – 18 per table ($60 per table); Clear bulb bistro strand – 45 bulbs per table on black cord ($35 per table); Clear bulb bistro strand – 45 bulbs per table on white cord ($35 per table).</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://84kdh16arfp3ey9ym1stx0dj-wpengine.netdna-ssl.com/wp-content/uploads/2015/11/electronics1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Electronics & Entertainment</h5>
            <p class="card-text">Dual speaker system provides superb sound quality from 500w, 8-channel mixer. USB & MP3 ready. Includes 2 25′ speaker cables. Includes a wired Mic. Wireless Mic Not Included. Speaker stands available for rent separately.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://84kdh16arfp3ey9ym1stx0dj-wpengine.netdna-ssl.com/wp-content/uploads/2015/12/Table-and-napkin-linens.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Linens</h5>
            <p class="card-text">Vintage Ivory material. Perfect on the Farmhouse Table.</p>
        </div>
    </div>
</div>


<div class="card bg-dark text-white">
    <img class="card-img" src="https://www.die-menue-manufaktur.de/fileadmin/Bilder_Layout/Unser_Angebot/Catering_Footer.jpg" alt="Card image">
    <div class="card-img-overlay">
        <!--<h5 class="card-title">Card title</h5>-->
        <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
        <!--<p class="card-text">Last updated 3 mins ago</p>-->
    </div>
</div>


<div class="card text-center">
    <div class="card-header">

    </div>
    <div class="card-body">
        <h5 class="card-title">TP - 0774404553</h5>
        <p class="card-text">Copyright © 2018 - Buddhika.tech - All rights reserved.</p>
        <a href="http://buddhika.tech/" class="btn btn-primary">Buddhika.tech</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>

    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>
</body>
</html>