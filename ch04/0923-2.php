<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name="陳柏均";//姓名
    $age=21;//年齡
    $number=16;//學號
    $h=172.8;//身高
    $w=65;//體重
    $sex=true;//性別
    $phone="0981570113"; //電話號碼
    $city="新竹縣";//居住地
    $school="明新科大";//學校
    $department="資管系";//科系

    echo"基本資料:<br/>"."姓名:   ".$name."  年齡:   ".$age."  學號:   ".$number. 
        "  身高:  ".$h."  體重:   ".$w."  性別男性?:  ". $sex."  電話號碼:   ".$phone.
        "  學校:  ".$school."  科系:   ".$department."<br/>";




    print"基本資料<br/>";
   print"姓名=$name<br/>";
   print"年齡=$age<br/>";
   print"學號=$number<br/>";
   print"身高=$h<br/>";
   print"體重=$w<br/>";
   print"性別男性?=$sex<br/>";
   print"電話號碼=$phone<br/>";
   print"學校=$school<br/>";
   print"科系=$department<br/>";


    
    ?>
</body>
</html>