<?php
if (strpos($currentpage,'relations') !== false){
    $mainColor = '#37A3DC';
    $color1 = '#03589C';
    $color2 = '#E1F2FC';
    $mainIcon = 'supervisor_account';
    $addBtnUrl = array(
        'txt' => 'RELATIE',
        'url' => 'relation'
    );
    $controller = 'relation';
}
elseif (strpos($currentpage,'contacts') !== false){
    $mainColor = '#FFC107';
    $color1 = '#FF6F00';
    $color2 = '#FFF8E1';
    $mainIcon = 'person';
    $addBtnUrl = array(
        'txt' => 'CONTACT',
        'url' => 'contact'
    );
    $controller = 'contact';
}
elseif (strpos($currentpage,'projects') !== false){
    $mainColor = '#673AB7';
    $color1 = '#311B92';
    $color2 = '#EDE7F6';
    $mainIcon = 'business_center';
    $addBtnUrl = array(
        'txt' => 'PROJECT',
        'url' => 'project'
    );
    $controller = 'project';
}
elseif (strpos($currentpage,'notes') !== false) {
    $mainColor = '#FF5722';
    $color1 = '#BF360C';
    $color2 = '#FBE9E7';
    $mainIcon = 'list';
    $addBtnUrl = array(
        'txt' => 'NOTITIE',
        'url' => 'note'
    );
    $controller = 'note';
}
elseif (strpos($currentpage,'quotations') !== false){
    $mainColor = '#3F51B5';
    $color1 = '#1A237E';
    $color2 = '#E8EAF6';
    $mainIcon = 'create';
    $addBtnUrl = array(
        'txt' => 'OFFERTE',
        'url' => 'quotation'
    );
    $controller = 'quotation';
}
elseif (strpos($currentpage,'outsourcings') !== false){
    $mainColor = '#00BCD4';
    $color1 = '#006064';
    $color2 = '#E0F7FA';
    $mainIcon = 'free_breakfast';
    $addBtnUrl = array(
        'txt' => 'UITBESTEDING',
        'url' => 'outsourcing'
    );
    $controller = 'outsourcing';
}
elseif (strpos($currentpage,'invoices') !== false){
    $mainColor = '#CDDC39';
    $color1 = '#827717';
    $color2 = '#F9FBE7';
    $mainIcon = 'euro_symbol';
    $addBtnUrl = array(
        'txt' => 'FACTUUR',
        'url' => 'invoice'
    );
    $controller = 'invoice';
}
elseif (strpos($currentpage,'domains') !== false){
    $mainColor = '#9C27B0';
    $color1 = '#4A148C';
    $color2 = '#F3E5F5';
    $mainIcon = 'public';
    $addBtnUrl = array(
        'txt' => 'DOMEIN',
        'url' => 'domain'
    );
    $controller = 'domain';
}
elseif (strpos($currentpage,'products') !== false){
    $mainColor = '#F44336';
    $color1 = '#B71C1C';
    $color2 = '#FFEBEE';
    $mainIcon = 'shopping_basket';
    $addBtnUrl = array(
        'txt' => 'PRODUCT',
        'url' => 'product'
    );
    $controller = 'product';
}
elseif (strpos($currentpage,'documentation') !== false){
    $mainColor = '#a28b4c';
    $mainIcon = 'format_list_numbered';
}
elseif (strpos($currentpage,'timeregistration') !== false){
    $mainColor = '#FF5722';
    $color1 = '#BF360C';
    $color2 = '#FBE9E7';
    $mainIcon = 'access_time';
}
elseif (strpos($currentpage,'daytask') !== false){
    $mainColor = '#FCC00E';
    $color1 = '#ED6F1C';
    $mainIcon = 'warning';
}
elseif (strpos($currentpage,'setting') !== false){
    $mainColor = '#9E9E9E';
    $color1 = '#757575';
    $mainIcon = 'settings';
}
else{
    $mainColor = '#3c3c3b';
    $mainIcon = 'fa fa-home';
}
