<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Đếm số lần xuất hiện của phần tử</title>
</head>
<body>

<?php
$numbers = [];
for ($i = 0; $i < 100; ++$i) {
    $numbers[$i] = rand(1, 101);
}

foreach ($numbers as $number) {
    echo $number . "-";
}

function countsOccurrences($array, $value)
{
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $value) {
            $count+=1;
        }
    }
    return $count;
}

$count = countsOccurrences($numbers, 15);

echo "<pre>";
echo "Number occurrences of 15 = $count" ;
?>

</body>
</html>
