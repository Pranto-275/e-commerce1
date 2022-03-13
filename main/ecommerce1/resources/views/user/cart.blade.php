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
                        <a class="nav-link active" aria-current="page" href="index.html"> <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="fa-solid fa-list-check"></i> Products</a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>

    <!-- Navbar End -->



    <!-- main part start -->
    <div class="container mymargintop">
        <div class="card">
            <div class="text-center card-header bg-warning">
                <h5>Cart Checkout </h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Price in TK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-info">Update</button>
                            </td>
                            <td> <img src="images/item1.jpg" alt="" style="width: 120px;"></td>
                            <td>Samsung A22</td>
                            <td>
                                <input type="number" class="form-control" style="width: 90px;"></td>
                            <td><input placeholder="2554" type="number" class="form-control" style="width: 90px;" disabled></td>
                            </td>
                            <td><input placeholder="2554" type="number" class="form-control" style="width: 90px;" disabled></td>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <h4>Total: Tk. 1257</h4>
                <button class="btn btn-info">Checkout</button>
            </div>


        </div>
        <!-- main part end -->



        <script src=" jquery-3.6.0.js "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
        <!-- <script src="https://kit.fontawesome.com/30dfa10dbe.js" crossorigin="anonymous"></script> -->
</body>

</html>
