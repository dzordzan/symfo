<?php

namespace APiszczek\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityManager;
use APiszczek\DemoBundle\Form\Transformer\TagTransformer;
class FeedType extends AbstractType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //var_dump($builder);
        /*$transformer = new TagTransformer($this->em);
        $builder
            ->add('title')
            ->add('content')
            ->add('image',new ImageType())
            ->add('position', new PositionType())
            ->add(
            $builder->create('tags', 'collection', array(
                'type'         => new TagType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                ))

                ->addModelTransformer($transformer)
        );*/
        
        $builder
            ->add('title')
            ->add('content')
            ->add('image',new ImageType())
            ->add('position', new PositionType())
            ->add('tags', 'collection', array(
                'type'         => new TagType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
            ))
            //->add('createdAt')
        ;
    }
    
   

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'APiszczek\DemoBundle\Entity\Feed'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'apiszczek_demobundle_feed';
    }
}
