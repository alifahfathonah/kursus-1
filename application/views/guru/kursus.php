<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include './application/views/header.php'; ?> 
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
            <form class="form-inline">
                
            <div class="input-group mb-3">
           
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari" >
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
                </div>
            </div>
            </form>
            </div>
        </div>
        <div class="row">
            <div class="scroll-menu">
            <div class="media list-kursus">
                <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0">Media heading</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
            </div>
        </div>
    </div>
    
</body>
<?php include './application/views/footer.php' ?>
</html>