<?php


namespace Recipe\Doctrine\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table as Table;

use ZfcUser\Entity\UserInterface;

/**
 * Class User
 * @ORM\Entity
 * @table(name="recipe_user")
 * @package Recipe\Doctrine\Model
 */
class User extends \ZfcUser\Entity\User implements UserInterface
{


	/**
	 * @ORM\Column(type="string", nullable=true);
	 * @var string
	 */
	protected $hobby;
}