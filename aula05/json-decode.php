<?php
    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

    echo "<pre>";
        var_dump(json_decode($json));
    echo "</pre>";

    echo "<pre>";
        var_dump(json_decode($json, true));
    echo "</pre>";
?>