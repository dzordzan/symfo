<?php

namespace APiszczek\DemoBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreFlushEventArgs;
/**
  * @ORM\Entity
  * @ORM\Table()
  * @ORM\HasLifecycleCallbacks  
  */
class Feed
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
	*  @ORM\OneToOne(targetEntity="APiszczek\DemoBundle\Entity\Position", cascade={"persist"})
	*/
	protected $position;
    /**
     * @var \Doctrine\Common\Collections\Collection|Tag[]
     *
     * @ORM\ManyToMany(targetEntity="APiszczek\DemoBundle\Entity\Tag", inversedBy="feeds", cascade={"persist"})
     * @ORM\JoinTable(
     *  name="feed_tag",
     *  joinColumns={
     *      @ORM\JoinColumn(name="feed_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     *  }
     * )
     */
	protected $tags;
    /**
    *  @ORM\OneToOne(targetEntity="APiszczek\DemoBundle\Entity\Image", cascade={"persist"})
    */
	protected $image;
	
    private $tagsId;
	function __construct(){
		$this->createdAt = new \DateTime();
        $this->tags = new ArrayCollection();
	}
    public function preFlush(PreFlushEventArgs $args)
    {
        // ...
        exit('test');
    }
    /**
     * @ORM\PrePersist
     */
    function preInsert( LifecycleEventArgs $args )
    {
        
     $em = $args->getEntityManager();
        $sqlTags = $em->getRepository('APiszczekDemoBundle:Tag')->findAll();
        // there we getting all article tags
        foreach($this->getTags() as $feedTag) {
            foreach ($sqlTags as $sqlTag)
                if ($feedTag->getName() === $sqlTag->getName()){
                    $this->tagsId[] = $sqlTag->getId();
                    // Entity manager will work correctly when see connected rows in feed_tag table
                    $this->removeTag($feedTag);
                }
        }
    }
  
    function preUpdate( $args )
    {
        $em = $args->getEntityManager();
        $sqlTags = $em->getRepository('APiszczekDemoBundle:Tag')->findAll();
        // there we getting all article tags
       
        foreach($this->getTags() as $feedTag) {
            foreach ($sqlTags as $sqlTag)
                if ($feedTag->getName() === $sqlTag->getName()){

                    if ($sqlTag->getFeeds()->contains($this))
                        continue;

                    $this->tagsId[] = $sqlTag->getId();
                    // Entity manager will work correctly when see connected rows in feed_tag table
                    //\Doctrine\Common\Util\Debug::dump("<br/>usuwam dodawanie do tabeli TAGS dla tagu dla:".$feedTag->getName().' id: '.$feedTag->getId().';');
                    $this->removeTag($feedTag);
                }
                
        }
    }
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
     function postInsert(LifecycleEventArgs $args)
        {
        if (!$this->tagsId)
            return;
        $em = $args->getEntityManager();
        $conn = $em->getConnection();

        //echo "<br/>";
        //var_dump($this->tagsId);

        foreach ($this->tagsId as $tagId){
            $conn->insert('feed_tag', array('feed_id' => $this->getId(),'tag_id' => $tagId));
 
        }

        $this->tagsId = array();
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
     * @param \APiszczek\DemoBundle\Entity\Tag $tag
     * @return Feed
     */
    public function addTag(\APiszczek\DemoBundle\Entity\Tag $tag)
    {
        //      $tags->addFeed($this);
        if ($this->tags->contains($tag))
            return;
        //\Doctrine\Common\Util\Debug::dump(var_dump($this->tags));
        
        $this->tags->add($tag);
        $tag->addFeed($this);
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \APiszczek\DemoBundle\Entity\Locale $tag
     */
    public function removeTag(\APiszczek\DemoBundle\Entity\Tag $tag)
    {
        //$this->tags->setTask(null);
        //$tags->addFeed($this);
        
        if (!$this->tags->contains($tag)) {
            return;
        }

        $this->tags->removeElement($tag);
        $tag->removeFeed($this);
        
        //exit("kutas");
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

    /**
     * Set image
     *
     * @param \APiszczek\DemoBundle\Entity\Image $image
     * @return Feed
     */
    public function setImage(\APiszczek\DemoBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \APiszczek\DemoBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}
