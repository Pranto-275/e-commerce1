<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .imagesize {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .mymargintop {
            margin-top: 100px !important;
        }
    </style>


</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Grabnow</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="fa-solid fa-list-check"></i> Products</a>
                    </li>



                </ul>
                <div class="ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="cart.html" class="nav-link"><i class="fa-solid fa-cart-arrow-down"></i> <span class="badge  rounded-pill  bg-warning">0</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login/Register</a>
                            <ul class="dropdown-menu">
                                <div style="width: 200px;">
                                    <div style="padding: 20px;">
                                        <h6>Already Registered??</h6>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login">
                                       Login
                                      </button>
                                        <hr>
                                        <h6>Haven't Registered??</h6>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg">
                                       Registered
                                      </button>

                                    </div>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->
    <!-- login model start -->
    <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                </div>
                <form>
                    <div class="modal-body">

                        <div class="mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="" id="" class="form-control">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning"><b>Login</b></button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login model end -->
    <!-- reg model start -->
    <div class="modal fade" id="reg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Register</h5>

                </div>
                <form>
                    <div class="modal-body">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="">First name</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <label for="">Last name</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Email</label>
                                <input type="email" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Phone</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Address</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Password</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><b>Signup</b></button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- reg model end -->

    <!-- main part start -->
    <div class="container mymargintop">
        <div class="row mt-5">
            <div class="col-md-12 col-lg-3">
                <div class="card mb-3 text-center">
                    <div class="card-header bg-warning">
                        <h5>Electornics</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Electronics</td>
                                </tr>
                                <tr>
                                    <td>Home & Kitchen</td>
                                </tr>
                                <tr>
                                    <td>Tools</td>
                                </tr>
                                <tr>
                                    <td>CDs & Vinyl</td>
                                </tr>
                                <tr>
                                    <td>Cloth</td>
                                </tr>
                                <tr>
                                    <td>Toys</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-warning text-center">
                        <h5>Brands</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Hp</td>
                                </tr>
                                <tr>
                                    <td>Samasung</td>
                                </tr>
                                <tr>
                                    <td>Apple</td>
                                </tr>
                                <tr>
                                    <td>Sony</td>
                                </tr>
                                <tr>
                                    <td>LG</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="card">
                    <div class="text-center card-header bg-warning">
                        <h5>Products</h5>
                    </div>
                    <div class="card-body">
                        <!-- PRODUCTS START -->
                        <div class="row ">
                            <div class="col-md-4 mb-2">
                                <div class="card">
                                    <div class="text-center card-header bg-warning">
                                        <h5>Samsung </h5>
                                    </div>
                                    <div class="card-body">
                                        <img src="images/item1.jpg" class="card-img-top imagesize " alt="... ">
                                    </div>
                                    <div class="card-footer bg-warning d-flex justify-content-between">
                                        <span>Price: 20990 TK</span>
                                        <a href="#" class="btn badge bg-danger">Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-2">
                                <div class="card">
                                    <div class="text-center card-header bg-warning">
                                        <h5>Samsung </h5>
                                    </div>
                                    <div class="card-body">
                                        <img src="images/item1.jpg" class="card-img-top imagesize " alt="... ">
                                    </div>
                                    <div class="card-footer bg-warning d-flex justify-content-between">
                                        <span>Price: 20990 TK</span>
                                        <a href="#" class="btn badge bg-danger">Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-2">
                                <div class="card">
                                    <div class="text-center card-header bg-warning">
                                        <h5>Samsung </h5>
                                    </div>
                                    <div class="card-body">
                                        <img src="images/item1.jpg" class="card-img-top imagesize " alt="... ">
                                    </div>
                                    <div class="card-footer bg-warning d-flex justify-content-between">
                                        <span>Price: 20990 TK</span>
                                        <a href="#" class="btn badge bg-danger">Add To Cart</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mb-2">
                                <div class="card">
                                    <div class="text-center card-header bg-warning">
                                        <h5>Samsung </h5>
                                    </div>
                                    <div class="card-body">
                                        <img src="images/item1.jpg" class="card-img-top imagesize " alt="... ">
                                    </div>
                                    <div class="card-footer bg-warning d-flex justify-content-between">
                                        <span>Price: 20990 TK</span>
                                        <a href="#" class="btn badge bg-danger">Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-2">
                                <div class="card">
                                    <div class="text-center card-header bg-warning">
                                        <h5>Samsung </h5>
                                    </div>
                                    <div class="card-body">
                                        <img src="images/item1.jpg" class="card-img-top imagesize " alt="... ">
                                    </div>
                                    <div class="card-footer bg-warning d-flex justify-content-between">
                                        <span>Price: 20990 TK</span>
                                        <a href="#" class="btn badge bg-danger">Add To Cart</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mb-2">
                                <div class="card">
                                    <div class="text-center card-header bg-warning">
                                        <h5>Samsung </h5>
                                    </div>
                                    <div class="card-body">
                                        <img src="images/item1.jpg" class="card-img-top imagesize " alt="... ">
                                    </div>
                                    <div class="card-footer bg-warning d-flex justify-content-between">
                                        <span>Price: 20990 TK</span>
                                        <a href="#" class="btn badge bg-danger">Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- PRODUCTS END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main part end -->



    <script src="jquery-3.6.0.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="https://kit.fontawesome.com/30dfa10dbe.js" crossorigin="anonymous"></script>
</body>

</html>
