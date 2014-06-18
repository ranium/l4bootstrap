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
		// Set the title for this page
		$this->theme->setTitle(trans('titles.home'));
		return $this->theme->watch('home')->render();
	}

}
