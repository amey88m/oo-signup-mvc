<?php 
namespace classes;

/**
 * Base Route
 */
class Route
{
	
	public static $validroute = Array();

		

		public static function set_route($url, $function)
		{
			$validroute[] = $url;

			#	set default routes 
			#	$route['default_controller'] = 'welcome';
			#	$route['404_override'] = 'errors/page_missing';


			#	set default routes
			$validroute['default_controller'] = '';
			$validroute['404_override'] = 'errors/page_missing';

			if($_GET['url'] == $url):
				return $function->__invoke();
			endif;

		}

}


?>