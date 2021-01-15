<?php
//Defining all properties of a car (and repeat for every new one
$engine1 = "V8";
$wheels1 = "Winter";
$model1 = "Hatchback";
$brand1= "WolksVagen";
$body1_colour = "Red";
$body1_colour_property = "metallic";

$engine2 = "Wankel";
$wheels2 = "All-Season";
$model2 = "Limo";
$brand2= "Hando";
$body2_colour = "Black";
$body2_colour_property = "Matte";

function printCar($engine, $wheels, $model, $brand, $body_colour, $body_colour_property){
    $return = "===Car===\n";
    $return .= "Engine: {$engine} \n";
    $return .= "Wheels: {$wheels} \n";
    $return .= "Model: {$model} \n";
    $return .= "Brand: {$brand} \n";
    $return .= "Colour: {$body_colour} \n";
    $return .= "Colour type: {$body_colour_property} \n";

    return $return;
}

//Building an array with "cars"
$cars = array(
        "car1" => array(
            $engine1,
            $wheels1,
            $model1,
            $brand1,
            $body1_colour,
            $body1_colour_property
        ),
        "car2" => array(
            $engine2,
            $wheels2,
            $model2,
            $brand2,
            $body2_colour,
            $body2_colour_property
        )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>The procedural car factory</h1>
    <h2>Printing one by one</h2>
    <pre><?php echo printCar($engine1, $wheels1, $model1, $brand1, $body1_colour, $body1_colour_property ); ?></pre>
    <pre><?php echo printCar($engine2, $wheels2, $model2, $brand2, $body2_colour, $body2_colour_property ); ?></pre>
    <h2>Printing array</h2>
    <pre>
        <?php
            foreach ($cars as $car){
                echo printCar($car[0], $car[1], $car[2], $car[3], $car[4], $car[5]);
            }
        ?>
    </pre>
</body>
</html>