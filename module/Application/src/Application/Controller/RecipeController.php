<?php


namespace Application\Controller;


use Recipe\Doctrine\Model\Recipe;
use Recipe\Service\RecipeServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RecipeController extends AbstractActionController
{
    public function indexAction()
    {
        return parent::indexAction(); // TODO: Chankone the autogenerated stub
    }

    public function showAction()
    {

        $id = $this->params('id');
        /**
         * @var RecipeServiceInterface $recipeService
         */
        $recipeService = $this->getServiceLocator()->get(\Recipe\Doctrine\Service\RecipeServiceInterface::class);
        $recipe = $recipeService->findById($id);
        return new ViewModel(array('recipe' => $recipe));

    }

    public function listAction()
    {
        /**
         * @var RecipeServiceInterface $recipeService
         */
        $recipeService = $this->getServiceLocator()->get(\Recipe\Doctrine\Service\RecipeServiceInterface::class);

        return new ViewModel(array('recipes' => $recipeService->findAll()));
    }
}