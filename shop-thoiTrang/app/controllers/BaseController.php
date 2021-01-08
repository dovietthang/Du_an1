<?php
namespace App\Controllers;

use Jenssegers\Blade\Blade;

class BaseController{
	protected function render($view, $dataArray = []){

		$blade = new Blade('./app/views/', 'cache');
		echo $blade->make($view, $dataArray);
	}
}

?>