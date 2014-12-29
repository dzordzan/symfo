<?php
namespace APiszczek\DemoBundle\Form\Transformer;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use APiszczek\DemoBundle\Entity\Tag;

class TagTransformer implements DataTransformerInterface
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    public function transform($tag)
    {
        if (null === $tag) {
            return '';
        }

        return $tag;
    }

    public function reverseTransform($tags)
    {
        if (!$tags) {
            return null;
        }
        echo "<pre>";
        \Doctrine\Common\Util\Debug::dump($tags);
        $i = 0;
        foreach ($tags as $tag){

            $tag = $this->om
                ->getRepository('APiszczekDemoBundle:Tag')
                ->findOneByName($tag->getName())
            ;

             if ($tag) {
              // exit (\Doctrine\Common\Util\Debug::dump($tag));
               //$tag->addFeed($this);
                //exit(\Doctrine\Common\Util\Debug::dump($tag->getFeeds()));
                
                unset($tags[$i]);

             // $tag = new Tag();
             // $tag->setName($tags[0]->getName());
            }
            $i++;
        }
        //var_dump($tags);
        //exit(var_dump($tag->getName()));
       

        return $tags;
    }
}