<?php

namespace Recipe\Service;

use Recipe\Doctrine\Model\Recipe;
use Recipe\Doctrine\Service\RecipeServiceInterface as DoctrineRecipeServiceInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class RecipeService implements RecipeServiceInterface, ServiceLocatorAwareInterface
{

    /**
     * @var ServiceLocatorInterface
     */
    protected $serviceLocator;


    /**
     * @return Recipe
     */
    public function findById($id)
    {
        /**
         * @var DoctrineRecipeServiceInterface $service
         */
        $service = $this->getServiceLocator()->get('Recipe\Doctrine\Service\RecipeServiceInterface');
        return $service->findById($id);
    }


    /**
     * @return array
     */
    public function findAll()
    {
        /**
         * @var RecipeServiceInterface $service
         */
        $service = $this->getServiceLocator()->get('Recipe\Doctrine\Service\RecipeServiceInterface');
        return $service->findAll();
    }

    /**
     * Set service locator
     *
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    /**
     * Get service locator
     *
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }


}