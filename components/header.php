<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--cdn-> contanet delivery network css file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>
<style>
   body {
        background-color: #948DA6 !important;
    }

    .name {
        color: #4B3F6E;
        text-transform: uppercase;
    }

    .navbar {
        background-color: #4B3F6E;

    }
    
    #navbarCollapse a {
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        color: #ffff;
    }

    a {
        margin-right: 10px;
    }

    .text-sm-center {
        text-align: center;
    }

</style>
<body>
<div class="container-fluid">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-3 col-sm-6 col-12 d-flex justify-content-center p-2">
                    <img class="img-responsive" src="images/logoicon.png" width="120" height="120" alt="" srcset="">
                </div>
                <div class="col-lg-3 col-sm-6 col-12 text-lg-start text-md-start text-sm-center">
                    <p>Shahajirao Patil Vikas Pratishthan's <br>
                        <span class="h5 name">S B PATIL COLLEGE OF Diploma</span><br>
                        Vangali Indapur Dist - Pune - 413106
                        Approved by PCI New Delhi, DTE Govt. of Maharashtra.
                        MSBTE, Mumbai.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- navbar secation  -->

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg  px-4 px-lg-5 py-3 py-lg-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav py-0 pe-5 ">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa-solid fa-house pe-2"></i>Home</a>
                    <a href="aboutus.php" class="nav-item nav-link"><i class="fa-solid fa-user pe-2"></i>About Us</a>
                    <a href="department.php" class="nav-item nav-link"><i
                            class="fa-sharp fa-solid fa-clipboard-list pe-2"></i>Department</a>
                    <a href="gallery.php" class="nav-item nav-link"><i class="fa-solid fa-image pe-2"></i>Gallery</a>
                    <a href="#" class="nav-item nav-link"><i class="fa-solid fa-headphones pe-2"></i>Facilities</a>
                    <a href="contactus.php" class="nav-item nav-link"><i class="fa-solid fa-phone pe-2"></i>Contact Us</a>
                </div>
            </div>
        </nav>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</html>