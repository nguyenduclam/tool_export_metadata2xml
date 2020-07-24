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

$nhomdulieu='Nhóm ngành phát triển nông thôn';
$loaibando='Bản đồ chuyên đề phát triển nông thôn';
$tilearr=['Hợp tác xã nông nghiệp','Làng nghề'];

$tochuc_src='Chi cục Phát triển nông thôn tỉnh Phú Yên';
$diachi_src='Số 76, Lê Duẩn, phường 7';
$dt_src='0257.3843542';
$fax_src='0257.3841367';
$tennguoi_daidien_src='Trần Hưng Lợi';
$chucdanh_src='Chi cục trưởng';
$vaitro_src='Đơn vị cung cấp dữ liệu';
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