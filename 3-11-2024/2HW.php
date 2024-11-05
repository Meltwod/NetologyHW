<?php
    $variant = 2; // Вариант использования
    $variable = 3.14;
    // $variable = 3;
    // $variable = 'one';
    // $variable = true;
    // $variable = null;
    // $variable = [];

    if ($variant === 1) {

        ////////////////////
        // Первый вариант //
        ////////////////////

        if (is_bool($variable) === true) {
            $type = "bool";
        } else if (is_int($variable) === true) {
            $type = "int";
        } else if (is_float($variable) === true) {
            $type = "float";
        } else if (is_string($variable) === true) {
            $type = "string";
        } else if (is_array($variable) === true) {
            $type = "array";
        } else if (is_null($variable) === true) {
            $type = "null";
        } else {
            $type = "unknown";
        }

        echo "type is $type";

    } else if ($variant === 2) {

        ////////////////////
        // Второй вариант //
        ////////////////////

        switch (true) {
            case is_bool($variable):
                $type = "bool";
                break;
            
            case is_int($variable):
                $type = "int";
                break;
            
            case is_float($variable):
                $type = "float";
                break;
            
            case is_string($variable):
                $type = "string";
                break;
            
            case is_array($variable):
                $type = "array";
                break;
            
            case is_null($variable):
                $type = "null";
                break;
            
            default:
                $type = "unknown";
        }

        echo "type is $type";

    } else {
        echo 'Variable "variant" can be 1 or 2';
    };
?>