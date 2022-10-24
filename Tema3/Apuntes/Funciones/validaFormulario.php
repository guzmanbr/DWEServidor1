<?php


    function vacio($nombre){
        if (empty($_REQUEST[$nombre])) {
            return true;
        }else{
            return false;
        }
    }