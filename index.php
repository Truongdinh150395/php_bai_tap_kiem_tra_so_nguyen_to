
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
<?php
function isPrimeNumber($n)
{
        //so nguyen < 2, khong la so nguyen to
        if($n < 2){
            return false;
        }
        //kiem tra so nguyen to khi n > 2
        $squaRoot = sqrt($n);
        for($i = 2; $i <= $squaRoot; $i++)
        {
            if($squaRoot % $i == 0)
            {
                return false;
            }
        }
        return true;
}

    echo "Cac so nguyen to nho hon 100" ."</br>";
    for($i = 2;$i < 100;$i++)
    {
        if(isPrimeNumber($i)){
            echo ($i . " ");
        }
    }

?>
</body>
</html>
