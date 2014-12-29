<?php

namespace APiszczek\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use APiszczek\DemoBundle\Entity\Feed;
use APiszczek\DemoBundle\Entity\Tag;
use APiszczek\DemoBundle\Entity\TagType;
use APiszczek\DemoBundle\Form\FeedType;

/**
 * Thread controller.
 *
 */
class FeedsController extends Controller
{

    /**
     * Lists all Thread entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$feeds = $em->getRepository('APiszczekDemoBundle:Feed')->findAll();
        $feeds = $em->getRepository('APiszczekDemoBundle:Feed')->findBy(array(), array('createdAt'=>'desc'));
        $tags = $em->getRepository('APiszczekDemoBundle:Tag');
        $query = $tags->createQueryBuilder('tag')
            ->groupBy('tag.name')
            ->getQuery();

        $tags = $query->getResult();

        return $this->render('APiszczekDemoBundle:Feeds:index.html.twig', array(
            'entities' => $feeds,
            'searchForm'   => $this->searchCreateForm()->createView(),
            'tags' => $tags,
            
        ));
    }
    public function getTags($em)
    {
        $tags = $em->getRepository('APiszczekDemoBundle:Tag');
        $query = $tags->createQueryBuilder('tag')
            ->groupBy('tag.name')
            ->getQuery();

        return $query->getResult();
    }
    public function searchByTagAction($tag)
    {
        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository('APiszczekDemoBundle:Tag')->findAll();
        foreach ($tags as $emptyTag)
        {
            if (count($emptyTag->getFeeds())===0){
                $em->remove($emptyTag);
                $em->flush();
            }
        }

        $tag = $em->getRepository('APiszczekDemoBundle:Tag')->findOneByName($tag);
        $entities = $tag->getFeeds();
        //exit(var_dump($tags));
        return $this->render('APiszczekDemoBundle:Feeds:index.html.twig', array(
            'entities' => $entities,
            'tags' => $this->getTags($em),
            
        ));
    }
    /**
     * Creates a new Thread entity.
     *
     */
    public function createAction(Request $request)
    {

        $entity = new Feed();

        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            //$tags = $em->getRepository('APiszczekDemoBundle:Tag')->findAll();
            $form = $this->createCreateForm( $entity);
            $form->handleRequest($request);
            //$form->submit($request->request->get($form->getName()));
            //exit(\Doctrine\Common\Util\Debug::dump($entity->getImage()));
            if ($form->isValid()) {
                /*
                foreach($entity->getTags() as $tag) {
                   foreach ($tags as $tagAdded)
                        if ($tag->getName() === $tagAdded->getName()){
                            $entity->afterUpdate($tagAdded->getId());
                            $entity->removeTag($tag);
                        }
                }
                */
                $em->persist($entity);

                $em->flush();

                return $this->redirect($this->generateUrl('feeds', array('id' => $entity->getId())));
            }
        }
        return $this->render('APiszczekDemoBundle:Feeds:add.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
   public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $searchForm = $this->searchCreateForm();
        $searchForm->handleRequest($request);
        
        if ($searchForm->isValid()) {

            $tags = $em->getRepository('APiszczekDemoBundle:Tag')->findAll();
            $entities = $em->getRepository('APiszczekDemoBundle:Feed')->createQueryBuilder('a')
               ->where('a.content LIKE :searchText')
               ->setParameter('searchText', '%'.$searchForm->get('searchText')->getData().'%')
               ->getQuery()->getResult();
 // ->findBy(array('content'=>$searchForm->get('searchText')->getData()));
            
            return $this->render('APiszczekDemoBundle:Feeds:index.html.twig', array(
                'entities' => $entities,
                'searchForm' => $this->searchCreateForm()->createView(),
                'tags' => $this->getTags($em),
                
            ));
        } 
        return $this->indexAction();
    }
    private function searchCreateForm()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('search'))
            ->setMethod('POST')
            ->add('searchText', 'text')
            //->add('search', 'submit', array('label' => 'Szukaj na blogu'))
            ->getForm();

        return $form;
    }
    /**
     * Creates a form to create a Feed entity.
     *
     * @param Feed $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createCreateForm(Feed $entity)
    {
        $t1 = new Tag();

        $t1->setName('przykladowy');
        $entity->addTag($t1);
    
        $form = $this->createForm(new FeedType(), $entity, array(
            'action' => $this->generateUrl('create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Thread entity.
     *
     */
    public function addAction()
    {
        $entity = new Feed();
       // \Doctrine\Common\Util\Debug::dump($entity);
        $form   = $this->createCreateForm($entity);

        return $this->render('APiszczekDemoBundle:Feeds:add.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Thread entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('APiszczekDemoBundle:Feed')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Thread entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('APiszczekDemoBundle:Feeds:show.html.twig', array(
            'entity'      => $entity,
            'tags'        => $em->getRepository('APiszczekDemoBundle:Tag')->findAll(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Thread entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('APiszczekDemoBundle:Feed')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Thread entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('APiszczekDemoBundle:Feeds:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Thread entity.
    *
    * @param Thread $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Feed $entity)
    {
        $form = $this->createForm(new FeedType($this->getDoctrine()->getManager()), $entity, array(
            'action' => $this->generateUrl('update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Thread entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $feed = $em->getRepository('APiszczekDemoBundle:Feed')->find($id);

        if (!$feed) {
            throw $this->createNotFoundException('Unable to find Thread entity.');
        }

         $originalTags = new ArrayCollection();

        // Create an ArrayCollection of the current Tag objects in the database
        foreach ($feed->getTags() as $tag) {
            $originalTags->add($tag);
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($feed);
        $editForm->handleRequest($request);
        
        if ($editForm->isValid()) {
            //exit(\Doctrine\Common\Util\Debug::dump($feed->getTags()));
           foreach ($originalTags as $tag) {

                if (false === $feed->getTags()->contains($tag)) {
                    // remove the Task from the Tag
                    $tag->getFeeds()->removeElement($feed);
                    // if it was a many-to-one relationship, remove the relationship like this
                    // $tag->setTask(null);

                    $em->persist($tag);

                    // if you wanted to delete the Tag entirely, you can also do that
                    // $em->remove($tag);
                }
            }
            $feed->preUpdate($this->getDoctrine(), $originalTags);
            $feed->getImage()->upload();
            $em->persist($feed);
            $em->flush();

            return $this->redirect($this->generateUrl('edit', array('id' => $id)));
        }

        return $this->render('APiszczekDemoBundle:Feeds:edit.html.twig', array(
            'entity'      => $feed,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Thread entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        
        //if ($form->isValid() || ) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('APiszczekDemoBundle:Feed')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Thread entity.');
            }

            $em->remove($entity);
            $em->flush();
        //}

        return $this->redirect($this->generateUrl('feeds'));
    }

    /**
     * Creates a form to delete a Thread entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
