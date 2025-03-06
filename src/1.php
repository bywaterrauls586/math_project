 <?php
  // function to calculate area of triangle
function triangleArea($base, $height) {
    return ($base * $height) / 2;
}

// function to calculate perimeter of triangle
function trianglePerimeter($side1, $side2, $side3) {
    return $side1 + $side2 + $side3;
}

// function to calculate area of circle
function circleArea($radius) {
    return pi() * $radius ** 2;
}

// function to calculate circumference of circle
function circleCircumference($radius) {
    return 2 * pi() * $radius;
}

// function to calculate area of rectangle
function rectangleArea($width, $height) {
    return $width * $height;
}

// function to calculate perimeter of rectangle
function rectanglePerimeter($length, $width) {
    return 2 * ($length + $width);
}

// function to calculate volume of cube
function cubeVolume($sideLength) {
    return $sideLength ** 3;
}

// function to calculate surface area of sphere
function sphereSurfaceArea($radius) {
    return 4 * pi() * $radius ** 2;
}

// function to calculate volume of sphere
function sphereVolume($radius) {
    return (4 / 3) * pi() * $radius ** 3;
}

// function to calculate area of triangle given 3 sides
function triangleAreaGivenSides($side1, $side2, $side3) {
    $s = ($side1 + $side2 + $side3) / 2;
    return sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));
}

// function to calculate perimeter of triangle given 3 sides
function trianglePerimeterGivenSides($side1, $side2, $side3) {
    return $side1 + $side2 + $side3;
}

// function to calculate area of rectangle given 2 sides
function rectangleAreaGivenSides($length, $width) {
    return $length * $width;
}

// function to calculate perimeter of rectangle given 2 sides
function rectanglePerimeterGivenSides($length, $width) {
    return 2 * ($length + $width);
}

// function to calculate volume of cube given side length
function cubeVolumeGivenSideLength($sideLength) {
    return $sideLength ** 3;
}

// function to calculate surface area of sphere given radius
function sphereSurfaceAreaGivenRadius($radius) {
    return 4 * pi() * $radius ** 2;
}

// function to calculate volume of sphere given radius
function sphereVolumeGivenRadius($radius) {
    return (4 / 3) * pi() * $radius ** 3;
}
?>