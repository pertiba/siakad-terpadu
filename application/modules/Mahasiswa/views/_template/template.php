<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (isset($header))
{
    echo $header;
}

if (isset($navbar))
{
    echo $navbar;
}

/*if (isset($main_sidebar))
{
    echo $main_sidebar;
}*/

if (isset($content))
{
    echo $content;
}
/*
if (isset($control_sidebar) AND $admin_prefs['ctrl_sidebar'] == TRUE)
{
    echo $control_sidebar;
}*/

if (isset($footer))
{
    echo $footer;
}



/* End of file template.php */
/* Location: ./application/modules/Mahasiswa/views/_template/template.php */