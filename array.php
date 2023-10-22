<form action="array.php" method="GET">
    <input type ="text" name="xname">
    <input type="submit">
</form>

<?php 
$xname = $_GET["xname"];



$family = 
[
    "Designer" => "nour",
    "Prgorammer" => "majed",
    "Gamer" => "anas"
];
    
echo $family[$xname];

?>