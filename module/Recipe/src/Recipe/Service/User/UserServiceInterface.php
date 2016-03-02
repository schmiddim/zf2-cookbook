<?php
namespace Recipe\Service\User;


interface UserServiceInterface
{

    /**
     * @param int $id
     * @return \Recipe\Doctrine\Model\User
     */
    public function findById($id);

    /**
     * @return array
     */
    public function findAll();
}