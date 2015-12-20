<?php


namespace Application\Controller;


use Recipe\Doctrine\Model\Recipe;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RecipeController extends AbstractActionController
{

	public function showAction(){

	$recipeService=	$this->getServiceLocator()->get('Recipe\Doctrine\Service\RecipeServiceInterface');
		$recipe = new Recipe();
		return new ViewModel();

	}

	public function listAction(){

	}
}