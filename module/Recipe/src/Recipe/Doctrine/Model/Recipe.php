<?php
namespace Recipe\Doctrine\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Recipe
 *  @ORM\Entity
 * @package Recipe\Doctrine\Model
 */
class Recipe
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\Column(type="integer");
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @var string
	 * @ORM\Column(type="datetime", nullable=true);
	 */
	protected $createdAt;

	public function __construct()
	{
		$this->createdAt = new \DateTime();
	}

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
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * @param string $createdAt
	 */
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;
	}



}