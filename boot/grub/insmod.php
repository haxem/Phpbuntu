<?php
// Module Loader
function insmod($mod_name)
{
    $mod_directory = "boot/grub";
    $mod_sn = ".mod.php";
    require_once($mod_directory."/".$mod_name."/".$mod_sn);
}
?>
