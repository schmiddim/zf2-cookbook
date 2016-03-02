<?php
namespace Recipe\Service\User;


use Recipe\Doctrine\Model\User;
use Recipe\Service\RecipeServiceInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Recipe\Doctrine\Service\RecipeServiceInterface as DoctrineRecipeServiceInterface;


class UserService implements RecipeServiceInterface, ServiceLocatorAwareInterface
{
    /**
     * @var ServiceLocatorInterface
     */
    protected $serviceLocator;


    /**
     * @param int $id
     * @return User
     */
    public function findById($id)
    {
        /**
         * @var DoctrineRecipeServiceInterface $service
         */
        $service = $this->getServiceLocator()->get('Recipe\Doctrine\Service\UserServiceInterface');
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
        $service = $this->getServiceLocator()->get('Recipe\Doctrine\Service\UserServiceInterface');
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