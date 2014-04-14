<?php
	App::uses('AppHelper', 'View/Helper');
	class MrgCustomSelectHelper extends AppHelper{
		var $helpers = ['Js','Html'];
		public function __construct(View $view, $settings = array()) {
			parent::__construct($view, $settings);

		}

		public function init($element, $options = []){
			echo
				$this->Html->css('MrgCustomSelect.jquery.plugins.selectBoxIt', array('inline'=>false)).
				$this->Html->script('MrgCustomSelect.jquery.selectBoxIt.js', array('inline'=>false));
			return $this->Js->buffer($this->Js->get($element)->selectBoxIt($options));
		}

		public function placeholder($inputs = ['input, textarea'], $options = []){
			echo
				$this->Html->script('MrgCustomSelect.jquery.placeholder.js', array('inline'=>false));
			return $this->Js->buffer($this->Js->get(implode(',', $inputs))->placeholder($options));
		}
	}
?>
