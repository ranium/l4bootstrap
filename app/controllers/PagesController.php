<?php

class PagesController extends BaseController {

	/**
	 * Method to show static pages
	 *
	 * We will just display the static views stored in views/pages/[pageslug].blade.php
	 *
	 * To add new pages, just create the view in views/pages/[slug-you-desire].blade.php and voila you are done.
	 * The URL to access that page will be http://yourdomain.com/page/[slug-you-desire]
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($page)
	{
		$view = 'pages.' . $page;
		return $this->theme->watch($view)->render();
	}

}
