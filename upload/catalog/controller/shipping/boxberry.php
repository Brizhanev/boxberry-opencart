<?php

class ControllerShippingBoxberry extends Controller {
	
	protected function index() {
		
		//Load language file
		$this->language->load('shipping/boxberry');

		//Set title from language file
      	$this->data['heading_title'] = $this->language->get('heading_title');

		//Load model
		$this->load->model('shipping/boxberry');

		//Sample - get data from loaded model
		$this->data['customers'] = $this->model_shipping_boxberry->getCustomerData();

		//Select template
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/shipping/boxberry.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/shipping/boxberry.tpl';
		} else {
			$this->template = 'default/template/shipping/boxberry.tpl';
		}

		//Render page
		$this->render();
	}
	
}
?>