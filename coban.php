<?php
// Khai báo biến
// KN: bien la noi dung de luu tru gia tri
// $ten bien; (Khai bao dung sau)
// $ten bien = gia trị;
//$a = 5;
//$b = 6.5;
//$c = "Nguyen Van A";
//$d = true;
// Cau dieu kien
// if, else, else if, switch case
// cho so a va b. hay kiem tra tinh chan le của 2
// cua 2 tren (if, else)
// Cach 1: dung toan if
$soThuNhat = 5;
$soThuHai = 10;
    if($soThuNhat % 2 == 0){
        echo "So thu nhat la so chan";
    }
    if($soThuNhat % 2 != 0){
        echo "So thu nhat la so le";
    }
    if($soThuHai % 2 == 0){
        echo "So thu hai la so chan";
    }
    if($soThuHai % 2 != 0){
        echo "So thu hai la so le";
    }
    // dung if else

    if($soThuNhat % 2 == 0){
        echo "So thu nhat la so chan";
    }else{
        echo "So thu nhat la so le";
    }
    if($soThuHai % 2 == 0){
        echo "So thu hai la so chan";
    }else{
        echo "So thu hai la so le";
    }
//    dung toan tu 3 ngoi
    echo $checkThuNhat = $soThuNhat % 2 == 0 ? "So thu nhat la so chan" : "So thu nhat la so le";
    echo $checkThuHai = $soThuHai % 2 == 0 ? "So thu hai la so chan" : "So thu hai la so le";
