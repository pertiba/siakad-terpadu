<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        //$ci->lang->load('indonesia','english');
    }
}