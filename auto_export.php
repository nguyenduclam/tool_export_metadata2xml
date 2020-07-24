<?php

// http://localhost:999/tool_export_metadata2xml/auto_export.php

include('metadata_template.php');

function generateRandomString($length = 10) {
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $charactersLength = strlen($characters);
   $randomString = '';
   for ($i = 0; $i < $length; $i++) {
       $randomString .= $characters[rand(0, $charactersLength - 1)];
   }
   return $randomString;
}

function writexml($fname,$xml){
   $myfile = fopen($fname, 'w') or die("Unable to open file!");
   fwrite($myfile, $xml);
   fclose($myfile);
}

// ----------------------------------------------

$nhomdulieu='Nhóm ngành trồng trọt';
$loaibando='Bản đồ chuyên đề trồng trọt';
$tilearr=['Danh mục các nhóm cây trồng','Tình hình dịch bệnh trên cây trồng'];

$tennguoi_daidien_src='Nguyễn Trọng Tùng';
$tochuc_src='SỞ Nông nghiệp và Phát triển Nông thôn tỉnh Phú Yên';
$chucdanh_src='Giám đốc';
$vaitro_src='Đơn vị cung cấp dữ liệu';
$dt_src='0257.3841664';
$fax_src='0257.3842456';
$diachi_src='Số 64, Lê Duẩn, phường 7';
$tinhthanh_src='Phú Yên';
$quanhuyen_src='TP Tuy Hòa';

$nguon_dulieu=[$tennguoi_daidien_src,$tochuc_src,$chucdanh_src,$vaitro_src,$dt_src,$fax_src,$diachi_src,$tinhthanh_src,$quanhuyen_src];

for($i=0;$i<count($tilearr);$i++){
   // echo $tilearr[$i];
   $fname='xml_out/'.$tilearr[$i].'.xml';
   $xmlstr=prepare_metadata($nhomdulieu,$loaibando,$tilearr[$i],$nguon_dulieu);
   writexml($fname,$xmlstr);
   echo ($i+1).'/ Đã ghi file <b>'.$tilearr[$i].'</b><br>';
}



?>