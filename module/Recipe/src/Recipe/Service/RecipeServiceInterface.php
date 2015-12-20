<?php

namespace Recipe\Service;

use Recipe\Doctrine\Model\Recipe;

interface RecipeServiceInterface
{

	/**
	 * @return Recipe
	 */
	public function findOneById($id);

	/**
	 * @return array
	 */
	public function findAll();
}