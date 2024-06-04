<?php
$image = $_FILES["image"];
// 上傳圖片至目標資料夾
if ($_FILES["image"]["error"] == 0) {
    // move_uploaded_file({上傳文件在服務器上的臨時文件名稱}, {你希望文件移動到的位置(包含文件名稱)})
    if (move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"])) {
        echo "upload success";
    } else {
        echo "upload FAIL";
    }
}
// 寫入products_images資料表
$filename = $_FILES["image"]["name"];
