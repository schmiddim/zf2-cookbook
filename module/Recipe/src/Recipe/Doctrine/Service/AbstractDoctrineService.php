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


	public function findAll()
	{
		// TODO: Implement findAll() method.
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
}