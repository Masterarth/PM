<?php

function smarty_modifier_checked($value){
    if($value == 1){
        return "checked";
    }
}