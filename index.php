<?php
$arr = [];
$evenOdd = [];

for ($i = 0; $i <= 9; $i++) {
    $arr[] = random_int(1, 50);
}

echo "<pre>";
print_r($arr);
echo "</pre>";

foreach ($arr as $key => $value) {
    if ($value % 2 === 0 && $key  % 2 === 0) {
        $num = $value * 100;
        $evenOdd[] = $num;
        echo "The number is EVEN and the index is EVEN: " . $value . ", " . $key . ", " . $num;
        echo "<br>";
    }

    if ($value % 2 === 0 && $key  % 2 === 1) {
        // $num = $value - $value * 2; HUOM, se on sama kuin $value * (-1);
        $num = $value * (-1);
        $evenOdd[] = $num;
        echo "The number is EVEN and the index is ODD: " . $value . ", " . $key . ", " . $num;
        echo "<br>";
    }

    if ($value % 2 === 1 && $key  % 2 === 0) {
        $num = $value / 100;
        $evenOdd[] = $num;
        echo "The number is ODD and the index is EVEN: " . $value . ", " . $key . ", " . $num;
        echo "<br>";
    }

    if ($value % 2 === 1 && $key  % 2 === 1) {
        $num = $value * (-0.01);
        $evenOdd[] = $num;
        echo "The number is ODD and the index is ODD: " . $value . ", " . $key . ", " . $num;
        echo "<br>";
    }
}

rsort($evenOdd);
echo "<pre>";
print_r($evenOdd);
echo "</pre>";

foreach ($evenOdd as $key => $value) {
    switch (true) {
        case ($value < -1):
            echo "<div style='display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; background-color: blue;'>" . $value . "</div>";
            echo "<br>";
            break;

        case ($value > -1 && $value < 0):
            echo "<div style='display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; background-color: red;'>" . $value . "</div>";
            echo "<br>";
            break;

        case ($value > 0 && $value < 1):
            echo "<div style='display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; background-color: yellow;'>" . $value . "</div>";
            echo "<br>";
            break;

        default:
            echo "<div style='display: flex; justify-content: center; align-items: center; width: 100px; height: 100px; background-color: green;'>" . $value . "</div>";
            echo "<br>";
            break;
    }
}
