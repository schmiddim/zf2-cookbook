<?php


namespace Recipe\Doctrine\Service;


use Recipe\Doctrine\Model\Recipe;

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
}