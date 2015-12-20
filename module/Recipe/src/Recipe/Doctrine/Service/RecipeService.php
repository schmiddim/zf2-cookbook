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

	/**
	 * @return \Doctrine\ORM\EntityRepository
	 */

	public function getRepository(){
		return $this->getEntityManager()->getRepository('Recipe\Doctrine\Model\Recipe');

	}

}