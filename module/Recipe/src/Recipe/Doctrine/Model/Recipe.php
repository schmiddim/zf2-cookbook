<?php
namespace Recipe\Doctrine\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Recipe
 * @ORM\Entity
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
	 * @ORM\Column(type="string", nullable=true);
	 * @var string
	 */
	protected $title;

	/**
	 * @ORM\Column(type="string", nullable=true);
	 * @var string
	 */
	protected $language;

	/**
	 * @ORM\Column(type="text", nullable=true);
	 * @var string
	 */
	protected $instructions;

	/**
	 * @var \DateTime
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

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param mixed $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}

	/**
	 * @param string $language
	 */
	public function setLanguage($language)
	{
		$this->language = $language;
	}

	/**
	 * @return mixed
	 */
	public function getInstructions()
	{
		return $this->instructions;
	}

	/**
	 * @param mixed $instructions
	 */
	public function setInstructions($instructions)
	{
		$this->instructions = $instructions;
	}



}