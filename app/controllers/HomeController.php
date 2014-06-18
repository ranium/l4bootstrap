<?php

class HomeController extends BaseController {

	/**
	 * The home page of the site
	 *
	 * Feel free to modify this to suit your needs
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return $this->theme->watch('home')->render();
	}

}
