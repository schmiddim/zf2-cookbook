<?php


namespace Recipe\Doctrine\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table as Table;
use Doctrine\ORM\Mapping\OneToMany as OneToMany;
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
A unidirectional one-to-many association can be mapped through a join table. From Doctrine’s point of view, it is simply mapped as a unidirectional many-to-many whereby a unique constraint on one of the join columns enforces the one-to-many cardinality.

The following example sets up such a unidirectional one-to-many association:


	 * @OneToMany(targetEntity="\Recipe\Doctrine\Model\Recipe", mappedBy="user")
	 *
	 */
	protected $recipes = array();
}