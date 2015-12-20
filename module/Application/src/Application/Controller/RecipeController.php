<?php


namespace Application\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RecipeController extends AbstractActionController
{

	public function showAction(){
		return new ViewModel();

	}

	public function listAction(){

	}
}