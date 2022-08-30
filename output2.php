<?php
function item($itemName, $itemPrice, $itemImage)
{
    echo "<div class='card' style='width: 18rem;'>";
    echo "<img class='card-img-top' src='{$itemImage}' alt='Card image cap'>";
    echo "<div class='card-body'>";
    echo "<p class='card-title font-weight-bold'>{$itemName}</p>";
    echo "<p class='card-text text-primary'>{$itemPrice}</p>";
    echo "</div>";
    echo "</div>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Output 2 Function</title>
</head>

<body>
    <div class="container">
        <div class="row bg-primary">
            <div class="col-12">
                <h3 class="text-light">Niko</h3>
            </div>
        </div>

        <div class="row  pt-4">
            <div class="col-4">
                <?php item('Shoes Tokyo Aerostreet Green', 129900, 'aero tokyo.jpg') ?>
            </div>
            <div class="col-4">
                <?php item('Shoes Riku Aerostreet', 129900, 'aero riku.jpg') ?>
            </div>
            <div class="col-4">
                <?php item('Shoes Fushia Aerostreet', 129900, 'aero fushia.jpg') ?>
            </div>
        </div>
    </div>

</body>

</html>