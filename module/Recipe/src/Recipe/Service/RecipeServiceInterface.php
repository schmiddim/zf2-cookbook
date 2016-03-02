<?php

namespace Recipe\Service;

use Recipe\Doctrine\Model\Recipe;

interface RecipeServiceInterface
{

    /**
     * @param int $id
     * @return Recipe
     */
    public function findById($id);

    /**
     * @return array
     */
    public function findAll();
}