<?php
	App::uses('AppHelper', 'View/Helper');
	App::uses('JqueryEngineHelper', 'View/Helper');

	class MrgCustomSelectJqueryEngineHelper extends JqueryEngineHelper{

		function __construct(View $view, $settings = array()){
			parent::__construct($view, $settings = array());

			$this->_init_callbacks();
		}

		protected function _init_callbacks(){
			$callbacks = [
				'selectBoxIt'=>[]
			];
			$this->_callbackArguments = array_merge($this->_callbackArguments, $callbacks);
		}


		public function selectBoxIt($options = []){
			$template = '%s.selectBoxIt({%s});';
	        return $this->_methodTemplate('selectBoxIt', $template, $options);
		}
	}

?>
