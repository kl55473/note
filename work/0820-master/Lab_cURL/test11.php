<?php
header("content-type: text/html; charset=utf-8");

// 1. 初始設定
$ch = curl_init();
var_dump($ch);

// 2. 設定 / 調整參數
curl_setopt($ch, CURLOPT_URL, "https://tw.appledaily.com/home/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//發出請求，在想需不需要傳回網頁結果 １要０不要
curl_setopt($ch, CURLOPT_HEADER, 0);//要不要出現標頭 １要０不要

// 3. 執行，取回 response 結果
$output = curl_exec($ch);

// 4. 關閉與釋放資源
curl_close($ch);

echo htmlspecialchars($output);//把<>印出來
//echo $output;

?>
