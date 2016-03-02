<?php


namespace Recipe\Doctrine\Service;


use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

abstract class AbstractDoctrineService implements ServiceLocatorAwareInterface
{
    /**
     * @var ServiceLocatorInterface
     */
    protected $serviceLocator;


    /**
     * @var string
     */
    protected $repositoryIdentifier;

    public function findAll()
    {
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

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }


    /**
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    /**
     * @return  \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        return $this->getServiceLocator()
            ->get('doctrine.entitymanager.orm_default');
    }

    /**
     * @return string
     */
    protected function getRepositoryIdentifier()
    {
        return $this->repositoryIdentifier;
    }

    /**
     * @param string $repositoryIdentifier
     */
    protected function setRepositoryIdentifier($repositoryIdentifier)
    {
        $this->repositoryIdentifier = $repositoryIdentifier;
    }


    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository()
    {
        return $this->getEntityManager()->getRepository($this->getRepositoryIdentifier());

    }


}