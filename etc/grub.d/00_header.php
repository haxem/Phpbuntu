<?php
# Do this as early as possible, since other commands might depend on it.
# (e.g. the `loadfont' command might need lvm or raid modules)
if(isset($GRUB_PRELOAD_MODULES) && is_array($GRUB_PRELOAD_MODULES))
{
    foreach ($GRUB_PRELOAD_MODULES as $key => $mod_name) {
        insmod($GRUB_PRELOAD_MODULES[$key]);
    }
}
?>
