<?php
namespace Recipe\Doctrine\Service;


use Recipe\Doctrine\Model\Recipe;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class RecipeService extends AbstractDoctrineService implements RecipeServiceInterface, ServiceLocatorAwareInterface
{
    /**
     * @var ServiceLocatorInterface
     */
    protected $serviceLocator;

    public function __construct()
    {
        $this->setRepositoryIdentifier('Recipe\Doctrine\Model\Recipe');

    }
}