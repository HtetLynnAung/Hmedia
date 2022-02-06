<?php
require_once '../admin/core/init.php';

$properties = $user->getAllNewsTitles();

$featuresAry = array();

foreach ($properties as $key => $value) {
    $place =array(
        "id" => trim($value['id']," "),
        "title" => trim($value['title']," "),
        "body" => trim($value['body']," "),
        "image" => trim($value['image']," "),
        "date" => trim($value['date']," ")
    );
    
    $featuresAry[] = $place;
}
$finalAry =  json_encode($featuresAry);

?>

<!-- <?php print_r($featuresAry)  ?> -->



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    
    <ul>
        <?php foreach ($featuresAry as $singleTitle): ?>
        <li><h3><?php echo $singleTitle["id"]  ?></h3></li>    
        <?php endforeach; ?>
    </ul>
</body>
</html>