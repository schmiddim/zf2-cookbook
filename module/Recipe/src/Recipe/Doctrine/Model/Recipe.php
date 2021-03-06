<?php
namespace Recipe\Doctrine\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne as ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn as JoinColumn;

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
    /**
     * @ORM\Column(type="text", nullable=true);
     * @var string
     */
    protected $calories;

    /**
     * @ORM\Column(type="text", nullable=true);
     * @var string
     */
    protected $level;

    /**
     * @ORM\Column(type="integer", nullable=true);
     * @var string
     */
    protected $totalTime;

    /**
     * @ManyToOne(targetEntity="\Recipe\Doctrine\Model\User", inversedBy="recipes")
     * @JoinColumn(name="user_id", referencedColumnName="user_id")
     * @var User
     */
    protected $user;
    /**
     *
     * @ManyToMany(targetEntity="Recipe\Doctrine\Model\Ingredient")
     */
    protected $ingredients = array();

    /**
     * @ORM\Column(type="string", nullable=true);
     * @var string
     */
    protected $source;

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

    /**
     * @return string
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * @param string $calories
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * @param string $totalTime
     */
    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;
    }

    /**
     * @return mixed
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param mixed $ingredients
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}