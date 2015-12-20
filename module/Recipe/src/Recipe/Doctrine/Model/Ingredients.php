<?php


namespace Recipe\Doctrine\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Ingredients
 * @ORM\Entity
 * @package Recipe\Doctrine\Model
 */
class Ingredients
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\Column(type="integer");
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", nullable=true);
	 * @var string
	 */
	protected $name;

	/**
	 * @ORM\Column(type="string", nullable=true);
	 * @var string
	 */
	protected $value;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param string $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}


}