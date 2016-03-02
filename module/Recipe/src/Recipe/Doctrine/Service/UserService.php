<?php


namespace Recipe\Doctrine\Service;


use Zend\ServiceManager\ServiceLocatorAwareInterface;

class UserService extends AbstractDoctrineService implements ServiceLocatorAwareInterface, UserServiceInterface
{

    protected $serviceLocator;

    public function __construct()
    {

        $this->setRepositoryIdentifier('Recipe\Doctrine\Model\User');
    }


}