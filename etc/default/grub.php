<?php
# If you change this file, run 'update-grub' afterwards to update
# /boot/grub/grub.cfg.
# For full documentation of the options in this file, see:
#   info -f grub -n 'Simple configuration'

// Hightlight X'rd menu item 
$GRUB_DEFAULT=0;

// Second based hidden wait for launching grub.
// If you want to use, Just delete the # mark.
// Clicking the screen or pressing shift key 
// will bring grub.
#$GRUB_HIDDEN_TIMEOUT=0;

// If you hide grub, a count down will be shown
// to inform you. If you want to hide it, 
// set this option to true.
$GRUB_HIDDEN_TIMEOUT=true;

// GRUB TIMEOUT -seconds-
// If -1, grub will wait forever!
$GRUB_TIMEOUT="10";

/**
 *@todo To be developed later 
 */
#$GRUB_DISTRIBUTOR="";

$GRUB_CMDLINE_LINUX_DEFAULT="quiet splash nomodeset video=uvesafb:mode_option=auto,mtrr=3,scroll=ywrap";
$GRUB_CMDLINE_LINUX="";

# Uncomment to disable graphical terminal (grub-pc only)
#GRUB_TERMINAL=console

# Uncomment to disable generation of recovery mode menu entries
#GRUB_DISABLE_RECOVERY="true"

# Uncomment to get a beep at grub start
#GRUB_INIT_TUNE="480 440 1"

?>
