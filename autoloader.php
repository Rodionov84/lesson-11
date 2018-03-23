<?php

function autoloader( $className )
{
    $filePath = "classes/" . $className . ".class.php";
    if( file_exists($filePath) )
    {
        include($filePath);
        return true;
    }
    return false;
}