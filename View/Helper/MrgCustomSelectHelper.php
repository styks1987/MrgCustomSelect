<?php
	App::uses('AppHelper', 'View/Helper');
	class MrgCustomSelectHelper extends AppHelper{
		var $helpers = ['Js','Html'];
		public function __construct(View $view, $settings = array()) {
			parent::__construct($view, $settings);
			// Load a custom select box
			echo
				$this->Html->css('MrgCustomSelect.jquery.plugins.selectBoxIt', array('inline'=>false)).
				$this->Html->script('MrgCustomSelect.jquery.selectBoxIt.js', array('inline'=>false));
		}

		public function init($element){
			return $this->Js->buffer($this->Js->get($element)->selectBoxIt());
		}
	}
?>
