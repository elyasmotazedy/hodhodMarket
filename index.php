<!DOCTYPE html>
<html lang="fa">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        *{
            padding:0;
            margin: 0;
        }
        img{
            width: 100%;
            height: 100% !important;
            min-height: 100%;
        }
        .col-md-8{
            padding: 0 !important;
            margin: 0 !important;
            min-height: 100%;

        }
        .col-md-4{
            padding: 0 !important;
            margin: 0 !important;
            min-height: 100%;

        }
    </style>

</head>
<body>

<div class="container-fluid">
    <nav style="background-color: aqua">
        <p>This example demonstrates a 50%/50% split on small, medium and large devices. On extra small devices, it will stack (100% width).</p>
        <ul>
            <li class="col-sm-1">dfjsldjf</li>
            <li class="col-sm-1">dfjsldjf</li>
            <li class="col-sm-2">dfjsldjf</li>
            <li class="col-sm-1">dfjsldjf</li>
            <li class="col-sm-1">dfjsldjf</li>
            <li class="col-sm-2">dfjsldjf</li>
            <li class="col-sm-2">dfjsldjf</li>
            <li class="col-sm-1">dfjsldjf</li>
            <li class="col-sm-1">dfjsldjf</li>
        </ul>
    </nav>
</div>

<div class="container">
    <h1>Grid</h1>
    <p>This example demonstrates a 50%/50% split on small, medium and large devices. On extra small devices, it will stack (100% width).</p>
    <p>Resize the browser window to see the effect.</p>
    <div class="row">
        <div class="col-sm-6" style="background-color:yellow;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div class="col-sm-6" style="background-color:pink;">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
        </div>
    </div>
    <div style="background-color: darkgray" class="row">
        <div class="col-sm-12"><img src="img_fjords_wide.jpg" alt="test"  ></div>
    </div>
    <div style="background-color: blueviolet;" class="row">
        <div  class="col-md-4 " style="background-color: aqua">
            <img class="img_responsive" src="img_mountains_wide.jpg" alt="sa">
        </div>
        <div style="background-color: brown;" class="col-md-8">
            <img class="img_responsive" src="img_nature_wide.jpg" alt="sa">
        </div>
    </div>
</div>
</body>


</html>
