<?php


namespace Recipe\Doctrine\Service;


use Recipe\Doctrine\Model\User;

interface UserServiceInterface
{
    /**
     * @return array
     */
    public function findAll();


    /**
     * @param $id
     * @return User
     */
    public function findById($id);
}