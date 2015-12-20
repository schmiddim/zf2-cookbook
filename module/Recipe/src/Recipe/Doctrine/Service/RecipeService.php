<?php
namespace Recipe\Doctrine\Service;


use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class RecipeService extends AbstractDoctrineService implements RecipeServiceInterface, ServiceLocatorAwareInterface
{
	/**
	 * @var ServiceLocatorInterface
	 */
	protected $serviceLocator;


	public function findAll()
	{
		// TODO: Implement findAll() method.
	}


}