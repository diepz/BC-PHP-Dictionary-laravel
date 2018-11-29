<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@csrf
<?php
$flag = 0;
foreach ($dictionary as $word => $description): {
    if ($word == $searchWord) {
        echo "Từ: " . $word . " <br/>Nghĩa của từ: " . $description;
        echo "<br/>";
        $flag = 1;
    }
}
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra.";
    }
    ?>
<?php endforeach ?>

</body>
</html>