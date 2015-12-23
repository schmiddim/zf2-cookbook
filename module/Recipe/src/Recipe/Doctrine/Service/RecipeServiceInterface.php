<?php


namespace Recipe\Doctrine\Service;


use Recipe\Doctrine\Model\Recipe;

/**
 * Interface RecipeServiceInterface
 * @package Recipe\Doctrine\Service
 */
interface RecipeServiceInterface
{

	/**
	 * @return array
	 */
	public function findAll();


	/**
	 * @param $id
	 * @return Recipe
	 */
	public function findById($id);


	/**
	 * @param Recipe $recipe
	 * @return mixed
	 */
	public function create(Recipe $recipe);
}