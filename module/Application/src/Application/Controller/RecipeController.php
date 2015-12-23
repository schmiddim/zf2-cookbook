<?php


namespace Application\Controller;


use Recipe\Doctrine\Model\Recipe;
use Recipe\Service\RecipeServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RecipeController extends AbstractActionController
{

	public function showAction()
	{

		$id = $this->params('id');
		/**
		 * @var RecipeServiceInterface $recipeService
		 */
		$recipeService = $this->getServiceLocator()->get('Recipe\Service\RecipeServiceInterface');
		$recipe = $recipeService->findById($id);
		return new ViewModel(array('recipe' => $recipe));

	}

	public function listAction()
	{
		/**
		 * @var RecipeServiceInterface $recipeService
		 */
		$recipeService = $this->getServiceLocator()->get('Recipe\Service\RecipeServiceInterface');

		return new ViewModel(array('recipes' => $recipeService->findAll()));
	}

	public function createAction()
	{
		//Curl Commands
		#Create valid recipe
		#curl 'http://cooking.zf2/application/recipe/create' -H 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8' -H 'Referer: http://cooking.zf2/application/recipe/create' -H 'Origin: http://cooking.zf2' -H 'Upgrade-Insecure-Requests: 1' -H 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36' -H 'Content-Type: application/x-www-form-urlencoded' --data 'title=My+first+Recipe&totalTime=100&calories=3000&source=http%3A%2F%2Fwww.google.de&instructions=Lorem+ipsum+dolor+sit+amet%2C+consetetur+sadipscing+elitr%2C+sed+diam+nonumy+eirmod+tempor+invidunt+ut+labore+et+dolore+magna+aliquyam+erat%2C+sed+diam+voluptua.+At+vero+eos+et+accusam+et+justo+duo+dolores+et+ea+rebum.+Stet+clita+kasd+gubergren%2C+no+sea+takimata+sanctus+est+Lorem+ipsum+dolor+sit+amet.+Lorem+ipsum+dolor+sit+amet%2C+consetetur+sadipscing+elitr%2C+sed+diam+nonumy+eirmod+tempor+invidunt+ut+labore+et+dolore+magna+aliquyam+erat%2C+sed+diam+voluptua.+At+vero+eos+et+accusam+et+justo+duo+dolores+et+ea+rebum.+Stet+clita+kasd+gubergren%2C+no+sea+takimata+sanctus+est+Lorem+ipsum+dolor+sit+amet.&quantity%5B%5D=3&item%5B%5D=Wurst&quantity%5B%5D=&item%5B%5D=&quantity%5B%5D=6&item%5B%5D=Eier&quantity%5B%5D=20+gramm&item%5B%5D=Butter' --compressed
		if ($this->getRequest()->isPost()) {
			$vb = $this->getRequest()->getPost('title');
			$vb = $this->getRequest()->getPost('item');

			#$b= 	$this->params('item');
			/**
			 * @var RecipeServiceInterface $recipeService
			 */
			$recipeService = $this->getServiceLocator()->get('Recipe\Service\RecipeServiceInterface');
		}


	}
}