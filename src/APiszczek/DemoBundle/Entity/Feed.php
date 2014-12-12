<?php

namespace APiszczek\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  * @ORM\Table()
  */
class Feed
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	 /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
	protected $title;
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
	protected $content;
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
	protected $createdAt;
	/**
	*  @ORM\OneToOne(targetEntity="APiszczek\DemoBundle\Entity\Position")
	*/
	
	protected $position;
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	/**
    * @ORM\ManyToMany(targetEntity="APiszczek\DemoBundle\Entity\Locale")
    * @ORM\JoinTable(name="Tag",
    *      joinColumns={@ORM\JoinColumn(name="tag_name", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="locale_id", referencedColumnName="id")}
    *      )
    */
	protected $tags;
	protected $image;
	
	function __construct(){
		$this->createdAt = new \DateTime();
	}


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Feed
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Feed
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Feed
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set position
     *
     * @param \APiszczek\DemoBundle\Entity\Position $position
     * @return Feed
     */
    public function setPosition(\APiszczek\DemoBundle\Entity\Position $position = null)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return \APiszczek\DemoBundle\Entity\Position 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Add tags
     *
     * @param \APiszczek\DemoBundle\Entity\Locale $tags
     * @return Feed
     */
    public function addTag(\APiszczek\DemoBundle\Entity\Locale $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \APiszczek\DemoBundle\Entity\Locale $tags
     */
    public function removeTag(\APiszczek\DemoBundle\Entity\Locale $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}
