<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-3-7a.php</title>
</head>
<body>
<?php 
function square(mixed $v): mixed {
    return $v ** 2;
}
// 函數呼叫
echo "square(2) = ".square(2)."<br/>";
echo "square(2.5) = ".square(2.5)."<br/>";
?>
</body>
</html>