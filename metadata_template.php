<?php

function prepare_metadata($nhomdulieu,$loaibando,$title,$nguon_dulieu){
    // Các biến dùng chung
    $tennguoi_daidien_src=$nguon_dulieu[0];
    $tochuc_src=$nguon_dulieu[1];
    $chucdanh_src=$nguon_dulieu[2];
    $vaitro_src=$nguon_dulieu[3];
    $dt_src=$nguon_dulieu[4];
    $fax_src=$nguon_dulieu[5];
    $diachi_src=$nguon_dulieu[6];
    $tinhthanh_src=$nguon_dulieu[7];
    $quanhuyen_src=$nguon_dulieu[8];


    $tennguoi_daidien='Trần Thái Bình';
    $tochuc='Trung tâm Ứng dụng công nghệ Vũ trụ thành phố Hồ Chí Minh';
    $chucdanh='Phó giám đốc';
    $vaitro='Đơn vị chủ nhiệm đề tài';
    $dt='028.39320220';
    $fax='028.39320220';
    $diachi='Số 1, Mạc Đĩnh Chi, phường Bến Nghé';
    $tinhthanh='Hồ Chí Minh';
    $quanhuyen='Quận 1';

    
    // $nhomdulieu='Nhóm ngành trồng trọt';
    // $loaibando='Bản đồ chuyên đề trồng trọt';
    // $tilearr=['Danh mục các nhóm cây trồng','Tình hình dịch bệnh trên cây trồng'];

    // -----------------------------------------------------

    // $title=$tilearr[0];
    $date=date("Y-m-d");
    $dateType='Thời điểm cập nhật';
    $edition='1.0';
    $presentationForm='Bản đồ số';
    $abstract='Siêu dữ liệu (Metadata) của lớp "'.$title.'" - nhóm lớp "'.$nhomdulieu.'" thuộc tỉnh Phú Yên';
    $purpose='Cập nhật cơ sở dữ liệu cho hệ thống thông tin Nông nghiệp tỉnh Phú Yên';
    $status='Đã hoàn thiện';
    $individualName1=$tennguoi_daidien_src;
    $organisationName1=$tochuc_src;
    $positionName1=$chucdanh_src;
    $role1=$vaitro_src;
    $voice1=$dt_src;
    $fax1=$fax_src;
    $deliveryPoint1=$diachi_src;
    $city=$tinhthanh_src;
    $administrativeArea1=$quanhuyen_src;
    $postalCode1='08';
    $country1='Việt Nam';
    $maintenanceAndUpdateFrequency='Khi thật sự cần thiết';
    $descriptiveKeywords1='gis, nông nghiệp, thông tin, trồng trọt, chăn nuôi, thủy sản, lâm nghiệp';
    $descriptiveKeywords2='Phú Yên';
    $accessConstraints='Bản quyền';
    $useConstraints='Giấy phép';
    $otherConstraints='Không được chuyên giao cho bên sử dụng thứ 3';
    $spatialRepresentationType='Véc-tơ';
    $denominator1='10000';
    $language1='Vietnamese';
    $characterSet1='UTF8';
    $MD_TopicCategoryCode=$loaibando;
    $westBoundLongitude=108.672630310;
    $northBoundLatitude=13.695055960;
    $eastBoundLongitude=109.458847050;
    $southBoundLatitude=12.704954150;
    $code1='VN-2000';
    $CI_OnlineResource=$tochuc;
    $level='Tập dữ liệu địa lý (Dataset)';
    $statement='Đầy đủ thông tin;  Chất lượng dữ liệu đúng theo sai  số quy định';
    $description1='Thu thập dữ liệu
    Chỉnh sửa thiết kế mô hình dữ liệu
    Chuẩn hóa và chuyển đổi dữ liệu
    Kiểm tra sản phẩm';
    $description2='CSDL nền địa lý tỷ lệ 1:10.000 - nhóm lớp Dân cư cơ  sở hạ tầng';
    $denominator2='10000';
    $code2='VN-2000';
    $fileIdentifier=md5(generateRandomString());
    $language2='English';
    $characterSet2='UTF8';
    $parentIdentifier='Cơ sở dữ liệu của lớp "'.$title.'" - nhóm lớp "'.$nhomdulieu.'" thuộc tỉnh Phú Yên';
    $individualName2=$tennguoi_daidien;
    $organisationName2=$tochuc;
    $positionName2=$chucdanh;
    $role2=$vaitro;
    $voice2=$dt;
    $fax2=$fax;
    $deliveryPoint2=$diachi;
    $CI_Address=$tinhthanh;
    $administrativeArea2=$quanhuyen;
    $postalCode2='08';
    $country2='Việt Nam';
    $dateStamp=date("Y-m-d");
    $metadataStandardName='ISO 19115:2003/19139';
    $metadataStandardVersion='1.0';


    $descriptiveKeywords1_arr='';
    if($descriptiveKeywords1!=''){
        $def=explode (',',$descriptiveKeywords1);
        for($i=0;$i<count($def);$i++){
            $descriptiveKeywords1_arr.='<gmd:keyword>
                    <gco:CharacterString>'.$def[$i].'</gco:CharacterString>
                </gmd:keyword>';
        }
    }
    $descriptiveKeywords2_arr='';
    if($descriptiveKeywords2!=''){
        $def=explode (',',$descriptiveKeywords2);
        for($i=0;$i<count($def);$i++){
            $descriptiveKeywords2_arr.='<gmd:keyword>
                    <gco:CharacterString>'.$def[$i].'</gco:CharacterString>
                </gmd:keyword>';
        }
    }

    // header('Content-type: text/xml');
    // header('Content-Disposition: attachment; filename="'.$title.'.xml"');
        
    $xml='<?xml version="1.0" encoding="UTF-8"?>
    <gmd:MD_Metadata xmlns:gmd="http://www.isotc211.org/2005/gmd"
                    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                    xmlns:gml="http://www.opengis.net/gml"
                    xmlns:gts="http://www.isotc211.org/2005/gts"
                    xmlns:gco="http://www.isotc211.org/2005/gco"
                    xmlns:geonet="http://www.fao.org/geonetwork"
                    xsi:schemaLocation="http://www.isotc211.org/2005/gmd http://www.isotc211.org/2005/gmd/gmd.xsd">
    <gmd:fileIdentifier xmlns:gmx="http://www.isotc211.org/2005/gmx"
                        xmlns:srv="http://www.isotc211.org/2005/srv">
        <gco:CharacterString>'.$fileIdentifier.'</gco:CharacterString>
    </gmd:fileIdentifier>
    <gmd:language>
        <gco:CharacterString>'.$language2.'</gco:CharacterString>
    </gmd:language>
    <gmd:characterSet>
        <gmd:MD_CharacterSetCode codeListValue="'.$characterSet1.'" codeList="./resources/codeList.xml#MD_CharacterSetCode"/>
    </gmd:characterSet>
    <gmd:parentIdentifier>
        <gco:CharacterString>'.$parentIdentifier.'</gco:CharacterString>
    </gmd:parentIdentifier>
    <gmd:contact>
        <gmd:CI_ResponsibleParty>
            <gmd:individualName>
                <gco:CharacterString>'.$individualName2.'</gco:CharacterString>
            </gmd:individualName>
            <gmd:organisationName>
                <gco:CharacterString>'.$CI_OnlineResource.'</gco:CharacterString>
            </gmd:organisationName>
            <gmd:positionName>
                <gco:CharacterString>'.$positionName2.'</gco:CharacterString>
            </gmd:positionName>
            <gmd:contactInfo>
                <gmd:CI_Contact>
                <gmd:phone>
                    <gmd:CI_Telephone>
                        <gmd:voice>
                            <gco:CharacterString>'.$voice2.'</gco:CharacterString>
                        </gmd:voice>
                        <gmd:facsimile>
                            <gco:CharacterString>'.$fax2.'</gco:CharacterString>
                        </gmd:facsimile>
                    </gmd:CI_Telephone>
                </gmd:phone>
                <gmd:address>
                    <gmd:CI_Address>
                        <gmd:deliveryPoint>
                            <gco:CharacterString>'.$deliveryPoint2.'</gco:CharacterString>
                        </gmd:deliveryPoint>
                        <gmd:city>
                            <gco:CharacterString>'.$CI_Address.'</gco:CharacterString>
                        </gmd:city>
                        <gmd:administrativeArea>
                            <gco:CharacterString>'.$administrativeArea2.'</gco:CharacterString>
                        </gmd:administrativeArea>
                        <gmd:postalCode>
                            <gco:CharacterString>'.$postalCode2.'</gco:CharacterString>
                        </gmd:postalCode>
                        <gmd:country>
                            <gco:CharacterString>'.$country2.'</gco:CharacterString>
                        </gmd:country>
                        <gmd:electronicMailAddress gco:nilReason="missing">
                            <gco:CharacterString/>
                        </gmd:electronicMailAddress>
                    </gmd:CI_Address>
                </gmd:address>
                </gmd:CI_Contact>
            </gmd:contactInfo>
            <gmd:role>
                <gmd:CI_RoleCode codeListValue="originator"
                                codeList="http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode"/>
            </gmd:role>
        </gmd:CI_ResponsibleParty>
    </gmd:contact>
    <gmd:dateStamp>
        <gco:DateTime xmlns:gmx="http://www.isotc211.org/2005/gmx"
                        xmlns:srv="http://www.isotc211.org/2005/srv">'.$dateStamp.'</gco:DateTime>
    </gmd:dateStamp>
    <gmd:metadataStandardName>
        <gco:CharacterString>'.$metadataStandardName.'</gco:CharacterString>
    </gmd:metadataStandardName>
    <gmd:metadataStandardVersion>
        <gco:CharacterString>'.$metadataStandardVersion.'</gco:CharacterString>
    </gmd:metadataStandardVersion>
    <gmd:referenceSystemInfo>
        <gmd:MD_ReferenceSystem>
            <gmd:referenceSystemIdentifier>
                <gmd:RS_Identifier>
                <gmd:code>
                    <gco:CharacterString>'.$code1.'</gco:CharacterString>
                </gmd:code>
                </gmd:RS_Identifier>
            </gmd:referenceSystemIdentifier>
        </gmd:MD_ReferenceSystem>
    </gmd:referenceSystemInfo>
    <gmd:identificationInfo>
        <gmd:MD_DataIdentification>
            <gmd:citation>
                <gmd:CI_Citation>
                <gmd:title>
                    <gco:CharacterString>'.$title.'</gco:CharacterString>
                </gmd:title>
                <gmd:date>
                    <gmd:CI_Date>
                        <gmd:date>
                            <gco:DateTime>'.$date.'</gco:DateTime>
                        </gmd:date>
                        <gmd:dateType>
                            <gmd:CI_DateTypeCode codeListValue="revision"
                                                codeList="http://www.isotc211.org/2005/resources/codeList.xml#CI_DateTypeCode"/>
                        </gmd:dateType>
                    </gmd:CI_Date>
                </gmd:date>
                <gmd:edition>
                    <gco:CharacterString>'.$edition.'</gco:CharacterString>
                </gmd:edition>
                <gmd:presentationForm>
                    <gmd:CI_PresentationFormCode codeListValue="mapDigital"
                                                codeList="http://www.isotc211.org/2005/resources/codeList.xml#CI_PresentationFormCode"/>
                </gmd:presentationForm>
                </gmd:CI_Citation>
            </gmd:citation>
            <gmd:abstract>
                <gco:CharacterString>'.$abstract.'</gco:CharacterString>
            </gmd:abstract>
            <gmd:purpose>
                <gco:CharacterString>'.$purpose.'</gco:CharacterString>
            </gmd:purpose>
            <gmd:status>
                <gmd:MD_ProgressCode codeListValue="completed"
                                    codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_ProgressCode"/>
            </gmd:status>
            <gmd:pointOfContact>
                <gmd:CI_ResponsibleParty>
                <gmd:individualName>
                    <gco:CharacterString>'.$individualName1.'</gco:CharacterString>
                </gmd:individualName>
                <gmd:organisationName>
                    <gco:CharacterString>'.$organisationName1.'</gco:CharacterString>
                </gmd:organisationName>
                <gmd:positionName>
                    <gco:CharacterString>'.$positionName1.'</gco:CharacterString>
                </gmd:positionName>
                <gmd:contactInfo>
                    <gmd:CI_Contact>
                        <gmd:phone>
                            <gmd:CI_Telephone>
                            <gmd:voice>
                                <gco:CharacterString>'.$voice1.'</gco:CharacterString>
                            </gmd:voice>
                            <gmd:facsimile>
                                <gco:CharacterString>'.$fax1.'</gco:CharacterString>
                            </gmd:facsimile>
                            </gmd:CI_Telephone>
                        </gmd:phone>
                        <gmd:address>
                            <gmd:CI_Address>
                            <gmd:deliveryPoint>
                                <gco:CharacterString>'.$deliveryPoint1.'</gco:CharacterString>
                            </gmd:deliveryPoint>
                            <gmd:city>
                                <gco:CharacterString>'.$city.'</gco:CharacterString>
                            </gmd:city>
                            <gmd:administrativeArea>
                                <gco:CharacterString>'.$administrativeArea1.'</gco:CharacterString>
                            </gmd:administrativeArea>
                            <gmd:postalCode>
                                <gco:CharacterString>'.$postalCode1.'</gco:CharacterString>
                            </gmd:postalCode>
                            <gmd:country>
                                <gco:CharacterString>'.$country1.'</gco:CharacterString>
                            </gmd:country>
                            <gmd:electronicMailAddress gco:nilReason="missing">
                                <gco:CharacterString/>
                            </gmd:electronicMailAddress>
                            </gmd:CI_Address>
                        </gmd:address>
                    </gmd:CI_Contact>
                </gmd:contactInfo>
                <gmd:role>
                    <gmd:CI_RoleCode codeListValue="owner"
                                    codeList="http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode"/>
                </gmd:role>
                </gmd:CI_ResponsibleParty>
            </gmd:pointOfContact>
            <gmd:resourceMaintenance>
                <gmd:MD_MaintenanceInformation>
                <gmd:maintenanceAndUpdateFrequency>
                    <gmd:MD_MaintenanceFrequencyCode codeListValue="asNeeded"
                                                    codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_MaintenanceFrequencyCode"/>
                </gmd:maintenanceAndUpdateFrequency>
                </gmd:MD_MaintenanceInformation>
            </gmd:resourceMaintenance>
            <gmd:graphicOverview>
                <gmd:MD_BrowseGraphic>
                <gmd:fileName gco:nilReason="missing">
                    <gco:CharacterString/>
                </gmd:fileName>
                <gmd:fileDescription>
                    <gco:CharacterString>thumbnail</gco:CharacterString>
                </gmd:fileDescription>
                </gmd:MD_BrowseGraphic>
            </gmd:graphicOverview>
            <gmd:graphicOverview>
                <gmd:MD_BrowseGraphic>
                <gmd:fileName gco:nilReason="missing">
                    <gco:CharacterString/>
                </gmd:fileName>
                <gmd:fileDescription>
                    <gco:CharacterString>large_thumbnail</gco:CharacterString>
                </gmd:fileDescription>
                </gmd:MD_BrowseGraphic>
            </gmd:graphicOverview>
            <gmd:descriptiveKeywords>
                <gmd:MD_Keywords>
                '.$descriptiveKeywords1_arr.'
                <gmd:type>
                    <gmd:MD_KeywordTypeCode codeListValue="theme"
                                            codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_KeywordTypeCode"/>
                </gmd:type>
                </gmd:MD_Keywords>
            </gmd:descriptiveKeywords>
            <gmd:descriptiveKeywords>
                <gmd:MD_Keywords>
                '.$descriptiveKeywords2_arr.'
                <gmd:type>
                    <gmd:MD_KeywordTypeCode codeListValue="place"
                                            codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_KeywordTypeCode"/>
                </gmd:type>
                </gmd:MD_Keywords>
            </gmd:descriptiveKeywords>
            <gmd:resourceConstraints>
                <gmd:MD_LegalConstraints>
                <gmd:accessConstraints>
                    <gmd:MD_RestrictionCode codeListValue="'.$accessConstraints.'"
                                            codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_RestrictionCode"/>
                </gmd:accessConstraints>
                <gmd:useConstraints>
                    <gmd:MD_RestrictionCode codeListValue="'.$useConstraints.'"
                                            codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_RestrictionCode"/>
                </gmd:useConstraints>
                <gmd:otherConstraints>
                    <gco:CharacterString>'.$otherConstraints.'</gco:CharacterString>
                </gmd:otherConstraints>
                </gmd:MD_LegalConstraints>
            </gmd:resourceConstraints>
            <gmd:spatialRepresentationType>
                <gmd:MD_SpatialRepresentationTypeCode codeListValue="'.$spatialRepresentationType.'"
                                                    codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_SpatialRepresentationTypeCode"/>
            </gmd:spatialRepresentationType>
            <gmd:spatialResolution>
                <gmd:MD_Resolution>
                <gmd:equivalentScale>
                    <gmd:MD_RepresentativeFraction>
                        <gmd:denominator>
                            <gco:Integer>'.$denominator1.'</gco:Integer>
                        </gmd:denominator>
                    </gmd:MD_RepresentativeFraction>
                </gmd:equivalentScale>
                </gmd:MD_Resolution>
            </gmd:spatialResolution>
            <gmd:language>
                <gco:CharacterString>'.$language1.'</gco:CharacterString>
            </gmd:language>
            <gmd:characterSet>
                <gmd:MD_CharacterSetCode codeListValue="'.$characterSet1.'"
                                        codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_CharacterSetCode"/>
            </gmd:characterSet>
            <gmd:topicCategory>
                <gmd:MD_TopicCategoryCode>'.$MD_TopicCategoryCode.'</gmd:MD_TopicCategoryCode>
            </gmd:topicCategory>
            <gmd:extent>
                <gmd:EX_Extent>
                <gmd:temporalElement>
                    <gmd:EX_TemporalExtent>
                        <gmd:extent>
                            <gml:TimePeriod gml:id="d56270e435a1052958">
                            <gml:beginPosition/>
                            <gml:endPosition/>
                            </gml:TimePeriod>
                        </gmd:extent>
                    </gmd:EX_TemporalExtent>
                </gmd:temporalElement>
                </gmd:EX_Extent>
            </gmd:extent>
            <gmd:extent>
                <gmd:EX_Extent>
                <gmd:geographicElement>
                    <gmd:EX_GeographicBoundingBox>
                        <gmd:westBoundLongitude>
                            <gco:Decimal>'.$westBoundLongitude.'</gco:Decimal>
                        </gmd:westBoundLongitude>
                        <gmd:eastBoundLongitude>
                            <gco:Decimal>'.$eastBoundLongitude.'</gco:Decimal>
                        </gmd:eastBoundLongitude>
                        <gmd:southBoundLatitude>
                            <gco:Decimal>'.$southBoundLatitude.'</gco:Decimal>
                        </gmd:southBoundLatitude>
                        <gmd:northBoundLatitude>
                            <gco:Decimal>'.$northBoundLatitude.'</gco:Decimal>
                        </gmd:northBoundLatitude>
                    </gmd:EX_GeographicBoundingBox>
                </gmd:geographicElement>
                </gmd:EX_Extent>
            </gmd:extent>
            <gmd:supplementalInformation gco:nilReason="missing">
                <gco:CharacterString/>
            </gmd:supplementalInformation>
        </gmd:MD_DataIdentification>
    </gmd:identificationInfo>
    <gmd:distributionInfo>
        <gmd:MD_Distribution>
            <gmd:transferOptions>
                <gmd:MD_DigitalTransferOptions>
                <gmd:onLine>
                    <gmd:CI_OnlineResource>
                        <gmd:linkage gco:nilReason="missing">
                            <gmd:URL/>
                        </gmd:linkage>
                        <gmd:protocol>
                            <gco:CharacterString>WWW:LINK-1.0-http--link</gco:CharacterString>
                        </gmd:protocol>
                        <gmd:name>
                            <gco:CharacterString>'.$CI_OnlineResource.'</gco:CharacterString>
                        </gmd:name>
                        <gmd:description gco:nilReason="missing">
                            <gco:CharacterString/>
                        </gmd:description>
                    </gmd:CI_OnlineResource>
                </gmd:onLine>
                <gmd:onLine>
                    <gmd:CI_OnlineResource>
                        <gmd:linkage gco:nilReason="missing">
                            <gmd:URL/>
                        </gmd:linkage>
                        <gmd:protocol>
                            <gco:CharacterString>WWW:DOWNLOAD-1.0-http--download</gco:CharacterString>
                        </gmd:protocol>
                        <gmd:name xmlns:gmx="http://www.isotc211.org/2005/gmx"
                                xmlns:srv="http://www.isotc211.org/2005/srv">
                            <gmx:MimeFileType type=""/>
                        </gmd:name>
                        <gmd:description>
                            <gco:CharacterString/>
                        </gmd:description>
                    </gmd:CI_OnlineResource>
                </gmd:onLine>
                <gmd:onLine>
                    <gmd:CI_OnlineResource>
                        <gmd:linkage>
                            <gmd:URL/>
                        </gmd:linkage>
                        <gmd:protocol>
                            <gco:CharacterString>OGC:WMS-1.1.1-http-get-map</gco:CharacterString>
                        </gmd:protocol>
                        <gmd:name gco:nilReason="missing">
                            <gco:CharacterString/>
                        </gmd:name>
                        <gmd:description gco:nilReason="missing">
                            <gco:CharacterString/>
                        </gmd:description>
                    </gmd:CI_OnlineResource>
                </gmd:onLine>
                </gmd:MD_DigitalTransferOptions>
            </gmd:transferOptions>
        </gmd:MD_Distribution>
    </gmd:distributionInfo>
    <gmd:dataQualityInfo>
        <gmd:DQ_DataQuality>
            <gmd:scope>
                <gmd:DQ_Scope>
                <gmd:level>
                    <gmd:MD_ScopeCode codeListValue="'.$level.'"
                                        codeList="http://www.isotc211.org/2005/resources/codeList.xml#MD_ScopeCode"/>
                </gmd:level>
                </gmd:DQ_Scope>
            </gmd:scope>
            <gmd:lineage>
                <gmd:LI_Lineage>
                <gmd:statement>
                    <gco:CharacterString>'.$statement.'</gco:CharacterString>
                </gmd:statement>
                <gmd:processStep>
                    <gmd:LI_ProcessStep>
                        <gmd:description>
                            <gco:CharacterString>'.$description1.'</gco:CharacterString>
                        </gmd:description>
                    </gmd:LI_ProcessStep>
                </gmd:processStep>
                <gmd:source>
                    <gmd:LI_Source>
                        <gmd:description>
                            <gco:CharacterString>'.$description2.'</gco:CharacterString>
                        </gmd:description>
                        <gmd:scaleDenominator>
                            <gmd:MD_RepresentativeFraction>
                            <gmd:denominator>
                                <gco:Integer>'.$denominator2.'</gco:Integer>
                            </gmd:denominator>
                            </gmd:MD_RepresentativeFraction>
                        </gmd:scaleDenominator>
                        <gmd:sourceReferenceSystem>
                            <gmd:MD_ReferenceSystem>
                            <gmd:referenceSystemIdentifier>
                                <gmd:RS_Identifier>
                                    <gmd:code>
                                        <gco:CharacterString>'.$code2.'</gco:CharacterString>
                                    </gmd:code>
                                </gmd:RS_Identifier>
                            </gmd:referenceSystemIdentifier>
                            </gmd:MD_ReferenceSystem>
                        </gmd:sourceReferenceSystem>
                    </gmd:LI_Source>
                </gmd:source>
                </gmd:LI_Lineage>
            </gmd:lineage>
        </gmd:DQ_DataQuality>
    </gmd:dataQualityInfo>
    </gmd:MD_Metadata>';

    // header('Content-type: text/xml',true);
    // echo $xml;
    return $xml;
}

?>