<?php
    $ROOT_URL = "/mlshop";
    $ADMIN_URL = "$ROOT_URL/admin";
    $VIEWS_URL = "$ROOT_URL/Views";

    function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
    }
?>