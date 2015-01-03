<?php

namespace APiszczek\DemoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\Collections\ArrayCollection;
/**
  * @ORM\Entity
  * @ORM\Table()
  */
class Tag
{
    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="id")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="tag_name", type="string", length=20, unique=true))
     */
    private $name;
    /**
     * @var \Doctrine\Common\Collections\Collection|Feed[]
     *
     * @ORM\ManyToMany(targetEntity="APiszczek\DemoBundle\Entity\Feed", mappedBy="tags")
     */
    protected $feeds;
	function __construct(){
        $this->feeds = new ArrayCollection();
		//$this->name = $name;

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
     * Set name
     *
     * @param string $name
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Add feeds
     *
     * @param \APiszczek\DemoBundle\Entity\Feed $feeds
     * @return Tag
     */

    /**
     * @param \APiszczek\DemoBundle\Entity\Feed $feed
     */
    public function addFeed(\APiszczek\DemoBundle\Entity\Feed $feed)
    {
       if ($this->feeds->contains($feed)) {
            return;
        }

        $this->feeds->add($feed);
        $feed->addTag($this);
    }
    /**
     * @param \APiszczek\DemoBundle\Entity\Feed $feed
     */
    public function removeFeed(\APiszczek\DemoBundle\Entity\Feed $feed)
    {
        if (!$this->feeds->contains($feed)) {
            return;
        }

        $this->feeds->removeElement($feed);
        $feed->removeTag($this);
    }
    /**
     * Get Feeds
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeeds()
    {
        return $this->feeds;
    }
}
