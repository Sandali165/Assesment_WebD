
<html>
<body>

<?php
$currentHour = (int)date('H'); 

if ($currentHour >= 2 && $currentHour < 11) {
    $greeting = "Morning";
} elseif ($currentHour >= 11 && $currentHour < 16) {
    $greeting = "Afternoon";
} elseif ($currentHour >= 16 && $currentHour < 21) {
    $greeting = "Evening";
} else {
    $greeting = "Night";
}
?>


Good <?php echo $greeting; ?> <?php echo $_POST["name"]; ?>
. Your favourite food is <?php echo $_POST["food"]; ?>

</body>
</html>
