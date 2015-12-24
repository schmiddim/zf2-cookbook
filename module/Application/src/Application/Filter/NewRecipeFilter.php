<?php
namespace Application\Filter;


use Zend\InputFilter\InputFilter;

class NewRecipeFilter extends InputFilter
{

	public function init()
	{

		$this->add(array(
			'name' => 'title',
			'required' => true,
			'filters' => array(
				array('name' => 'StringTrim'),
				array('name' => 'StripTags'),
			),
			'validators' => array(
				array(
					'name'
					=> 'StringLength',
					'options' => array(
						'encoding' => 'UTF-8', 'min' => 5, 'max' => 128,
						'message' => 'Überschrift nur 5 – 128 Zeichen erlaubt',
					),
				),
			),

		));

		$this->add(array(
			'name' => 'instructions',
			'required' => true,
			'filters' => array(
				array('name' => 'StringTrim'),
				array('name' => 'StringHtmlPurifier'),
			),
		));

	}
}