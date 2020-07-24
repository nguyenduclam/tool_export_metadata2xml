# tool_export_metadata2xml
Export Metadat to XML

http://localhost:999/tool_export_metadata2xml/auto_export.php

> How to run

* Edit info in `auto_export.php`
* Browse `auto_export.php` in a `webserver` (localhost is ok)
* Your results in `xml_out` folder

```php
// Trồng trọt
$nhomdulieu='Nhóm ngành trồng trọt';
$loaibando='Bản đồ chuyên đề trồng trọt';
$tilearr=['Danh mục các nhóm cây trồng','Tình hình dịch bệnh trên cây trồng'];

$tennguoi_daidien_src='Nguyễn Lê Lanh Đa';
$tochuc_src='Chi cục Trồng trọt và Bảo vệ thực vật';
$chucdanh_src='Chi cục trưởng';
$vaitro_src='Đơn vị cung cấp dữ liệu';
$dt_src='0257.3827357';
$fax_src='0257.3836238';
$diachi_src='số 48A, Nguyễn Tất Thành, phường 2';
$tinhthanh_src='Phú Yên';
$quanhuyen_src='TP Tuy Hòa';

// Chăn nuôi
$nhomdulieu='Nhóm ngành chăn nuôi';
$loaibando='Bản đồ chuyên đề chăn nuôi';
$tilearr=['Hiện trạng chăn nuôi và sản lượng các loại vật nuôi','Quy hoạch đàn các loại vật nuôi chính','Phân loại cơ sở giết mổ','Thực trạng cơ sở giết mổ','Tình hình dịch bệnh trên vật nuôi'];

$tochuc_src='Chi cục Chăn nuôi và Thú y';
$tennguoi_daidien_src='Nguyễn Văn Lâm';
$chucdanh_src='Phó chi cục trưởng phụ trách';
$vaitro_src='Đơn vị cung cấp dữ liệu';
$dt_src='0257.3823.276';
$fax_src='0257.3820937';
$diachi_src='số 48A, Nguyễn Tất Thành, phường 2';
$tinhthanh_src='Phú Yên';
$quanhuyen_src='TP Tuy Hòa';

// Thủy sản
$nhomdulieu='Nhóm ngành thủy sản';
$loaibando='Bản đồ chuyên đề thủy sản';
$tilearr=['Về nuôi trồng thủy sản','Về khai thác thủy sản'];

$tochuc_src='Chi cục thủy sản';
$diachi_src='01, Lý Tự Trọng, phường 7';
$tennguoi_daidien_src='Trần Ngọc Nhạn';
$chucdanh_src='Chi cục trưởng';
$vaitro_src='Đơn vị cung cấp dữ liệu';
$dt_src='0257.3841324';
$fax_src='0257.3842676';
$tinhthanh_src='Phú Yên';
$quanhuyen_src='TP Tuy Hòa';

// Thủy lợi
$nhomdulieu='Hiện trạng hệ thống hạ tầng thủy lợi';
$loaibando='Bản đồ chuyên đề công trình thủy lợi';
$tilearr=['Hệ thống thủy lợi','Hiện trạng sạt lở bờ sông bờ biển và biện pháp khắc phục'];

$tochuc_src='Chi cục Thuỷ lợi';
$diachi_src='Số 64, Lê Duẩn';
$dt_src='0257.3842173';
$fax_src='0257. 3842174';
$tennguoi_daidien_src='Nguyễn Phụng';
$chucdanh_src='Chi cục trưởng';
$vaitro_src='Đơn vị cung cấp dữ liệu';
$tinhthanh_src='Phú Yên';
$quanhuyen_src='TP Tuy Hòa';

// Lâm nghiệp
$nhomdulieu='Nhóm ngành kiểm lâm';
$loaibando='Bản đồ chuyên đề lâm nghiệp';
$tilearr=['Diện tích rừng chia theo nguồn gốc','Diện tích rừng chia theo mục đích sử dụng','Diện tích rừng và đất quy hoạch phát triển rừng phân theo mục đích sử dụng tỉnh Phú Yên năm 2019','Diện tích rừng và diện tích chưa thành rừng phân theo chủ rừng tỉnh Phú Yên năm 2019','Tỷ lệ che phủ rừng tỉnh Phú Yên năm 2019','Diễn biến diện tích rừng và diện tích chưa thành rừng theo các nguyên nhân tỉnh Phú Yên năm 2019'];

$tochuc_src='Chi cục Kiểm lâm';
$diachi_src='số 48, Nguyễn Tất Thành, phường 2';
$dt_src='0257.3823820';
$fax_src='0257.3827573';
$tennguoi_daidien_src='Lê Văn Bé';
$chucdanh_src='Chi cục trưởng phụ trách';
$vaitro_src='Đơn vị cung cấp dữ liệu';
$tinhthanh_src='Phú Yên';
$quanhuyen_src='TP Tuy Hòa';

// Phát triển nông thôn
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


```

http://snnptnt.phuyen.gov.vn/Home/Detail2/13
