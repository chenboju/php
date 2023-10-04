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
    $year="2002";
    $month=8;
    $day=18;

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
    print"出生年月日:"."西元:$year"."年".$month."月".$day."號，".
        "民國:".$year-1911 . "年" . $month."月".$day."號<br/>";
    print"年齡:" . 2023-$year."<br/>";

    print("<br/>");
    print("<br/>");
    print("<br/>");

    print("4-1<br/>");
    if($year-1995==7){
        print"生肖屬馬<br/>";
    }else{
        print"錯誤";
    }

        switch($year-1995){
            case 1:
                print"生肖屬鼠<br/>";
            break; 
            case 2:
                print"生肖屬牛<br/>";
            break; 
            case 3:
                print"生肖屬虎<br/>";
            break; 
            case 4:
                print"生肖屬兔<br/>";
            break; 
            case 5:
                print"生肖屬龍<br/>";
            break; 
            case 6:
                print"生肖屬蛇<br/>";
            break; 
            case 7:
                print"生肖屬馬<br/>";
            break; 
            case 8:
                print"生肖屬羊<br/>";
            break; 
            case 9:
                print"生肖屬猴<br/>";
            break; 
            case 10:
                print"生肖屬雞<br/>";
            break; 
            case 11:
                print"生肖屬狗<br/>";
            break; 
            case 12:
                print"生肖屬豬<br/>";
            break; 
        }

    //星座
    if($month==8 && $month-1==7){
        if($day<=23){
            print"星座:獅子座<br/>";
        }
    }

    
    print("<br/>");
    print("<br/>");
    print("<br/>");




    print("4-2<br/>");
    $money=100000;
    $SUM=0;
    for($i=1;$i<=10;$i++){
        $yearM=0;
        $yearM = $money * 0.12; 
        $money += $yearM; 
        
    }
    print($money."元<br/>");
    
    $length=180;
    $count=0;
    for($i=1;$i<=10;$i++){
        if($length>=20){
        $length=$length/2;
        $count++;
        }
    }
    print($count."次<br/>");
    $length=180;
    $count1=0;
    while($length>=20){
        $length=$length/2;
        $count1++;
    }
    print($count1."次<br/>");


    //4-3
    function getChineseZodiac($year) {
        $startYear = 1995;
        $offset = ($year - $startYear) % 12;
        switch($offset){
            case 1:
                print"生肖屬鼠<br/>";
            break; 
            case 2:
                print"生肖屬牛<br/>";
            break; 
            case 3:
                print"生肖屬虎<br/>";
            break; 
            case 4:
                print"生肖屬兔<br/>";
            break; 
            case 5:
                print"生肖屬龍<br/>";
            break; 
            case 6:
                print"生肖屬蛇<br/>";
            break; 
            case 7:
                print"生肖屬馬<br/>";
            break; 
            case 8:
                print"生肖屬羊<br/>";
            break; 
            case 9:
                print"生肖屬猴<br/>";
            break; 
            case 10:
                print"生肖屬雞<br/>";
            break; 
            case 11:
                print"生肖屬狗<br/>";
            break; 
            case 12:
                print"生肖屬豬<br/>";
            break; 
        }
    }

function getZodiacSign($month, $day) {
    switch ($month) {
        case 1:
            if ($day <= 19) return '摩羯座';
            if ($day >= 20) return '水瓶座';
            break;
        case 2:
            if ($day <= 18) return '水瓶座';
            if ($day >= 19) return '双鱼座';
            break;
        case 3:
            if ($day >= 21) return '白羊座';
            break;
        case 4:
            if ($day <= 19) return '白羊座';
            if ($day >= 20) return '金牛座';
            break;
        case 5:
            if ($day <= 20) return '金牛座';
            if ($day >= 21) return '双子座';
            break;
        case 6:
            if ($day <= 20) return '双子座';
            if ($day >= 21) return '巨蟹座';
            break;
        case 7:
            if ($day <= 22) return '巨蟹座';
            if ($day >= 23) return '狮子座';
            break;
        case 8:
            if ($day <= 22) return '狮子座';
            if ($day >= 23) return '处女座';
            break;
        case 9:
            if ($day <= 22) return '处女座';
            if ($day >= 23) return '天秤座';
            break;
        case 10:
            if ($day <= 22) return '天秤座';
            if ($day >= 23) return '天蝎座';
            break;
        case 11:
            if ($day <= 21) return '天蝎座';
            if ($day >= 22) return '射手座';
            break;
        case 12:
            if ($day <= 21) return '射手座';
            if ($day >= 22) return '摩羯座';
            break;
        
    }
    
    return '未知';
}



$chineseZodiac = getChineseZodiac($year);
$zodiacSign = getZodiacSign($month, $day);

echo "$chineseZodiac\n";
echo "星座：$zodiacSign\n";


    
    ?>
</body>
</html>