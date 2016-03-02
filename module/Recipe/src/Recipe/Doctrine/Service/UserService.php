<?php


namespace Recipe\Doctrine\Service;


use Zend\ServiceManager\ServiceLocatorAwareInterface;

class UserService extends AbstractDoctrineService implements ServiceLocatorAwareInterface, UserServiceInterface
{

    protected $serviceLocator;

    public function findAll(){
        return $this->getRepository()->findAll();

    }

    /**
     * @param $id
     * @return Recipe
     */
    public function findById($id)
    {
        return $this->getRepository()->find($id);
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */

    public function getRepository(){
        return $this->getEntityManager()->getRepository('Recipe\Doctrine\Model\User');

    }

}