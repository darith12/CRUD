<?php
    include('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="/Style/Style.css">

    <!-- link to bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-3 border border-2 rounded-3 mt-5">
        <center><h1>Product Form</h1></center>
        <form method="POST" class="mt-3">
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Name: </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Enter Name" name = "name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Category: </label>
                <div class="col-sm-9">
                    <select  class="form-select" name = "category">
                        <option value="Food">Food</option>
                        <option value="Drink">Drink</option>
                        <option value="Cloths">Dessert</option>
                        <option value="Accessories">Snack</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Qty: </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Enter Name" name = "qty">
                </div>
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Price: </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Enter Name" name = "price">
                </div>
            </div>

            <div class="buttons d-flex justify-content-between">
                <input type="submit" value="Cancel" class="btn btn-danger" name = "btncancel">
                <input type="submit" value="Payment" class="btn btn-success" name = "btnadd">
            </div>
        </form>
    </div>

    <div class="Contianer">
        <table class="table text-center" style="table-layout: fixed;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Create At</th>
                <th>Action</th>
            </tr>
            <?php showData(); ?>
        </table>
    </div>
</body>
</html>