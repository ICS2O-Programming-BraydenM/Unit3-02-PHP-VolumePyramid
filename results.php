<?php
// get the base length (side a) and height (side b) of the base and the height of the triangular prism from the textfields
$side_a = $_POST["side-a"];
$side_b = $_POST["side-b"];
$height = $_POST["height"];

// calculate the volume of the triangular prism
$volume =  (1/6) * $side_a * $side_b * $height;
$volume_rounded = number_format($volume, 2);
?>

The volume of the triangular prism is <?php echo "$volume_rounded"; ?> cm<sup>3</sup>.