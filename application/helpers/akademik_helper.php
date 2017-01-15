<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( ! function_exists('last_years') )
{
	function last_years($now_years = 0)
	{
		$year = explode('/', $now_years);


		$generate = ($year[0] -1) . '/' . ($year[1]-1);

		return $generate;
	}
}

/* End of file akademik_helper.php */
/* Location: ./application/helpers/akademik_helper.php */