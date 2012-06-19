<?php

use Domain\Models\Module;

class Domain_Media_Controller extends Domain_Base_Controller {
	
	public function __construct()
	{
		$this->model = new Module;
		
		$this->settings['sortable'] = array(
			'modules' => array(
				'name'
			)
		);
	}

	/**
	 * Get all Media Modules
	 *
	 * @return Response
	 */
	public function get_list()
	{
		return $this->get_multiple(Input::all());
	}

}