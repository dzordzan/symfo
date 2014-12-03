<?php

namespace APiszczek\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Forms;
use Symfony\Component\Filesystem\Filesystem;

use APiszczek\DemoBundle\Component\FeedRepository;
use APiszczek\DemoBundle\Component\Geocode;
use APiszczek\DemoBundle\Component\Feed;
use APiszczek\DemoBundle\Component\Uploader;



class OverviewController extends Controller
{
	protected $feedsArray;
	protected $feedRepository;
	protected $feeds = array();
	
	public function __construct()
	{
		$this->feedRepository = new FeedRepository();

		$this->feedsArray = $this->feedRepository->getFeeds();

		//Dodawanie pojedynczych wpisów jako klasa
		foreach ($this->feedsArray as $feedArray)	{
			array_push($this->feeds, new Feed((array) $feedArray));
		}

	}
	
	public function indexAction(Request $request)
	{
		return new Response(
			$this->render(
				'APiszczekDemoBundle:Overview:overview.html.twig',
				array(
					'feeds' => $this->feedsArray,
				)
			)
		);

	}
	public function aboutAction(Request $request)
	{

			return new Response(
				$this->render(
					'APiszczekDemoBundle:Overview:about.html.twig',
					array(
						'name' => 'Andrzejek',
						'surname' => 'Piszczek',
						'album' => '174644',
						'group' => 'KrDZIs3012Io',
						'picture' => 'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10612771_917202591631123_2697497729714946662_n.jpg?oh=a731edabfeb9d4d50d3db7604b5a46ff&oe=551F2813&__gda__=1427065771_16e52070df7f465932fa18cc2e1f668a',

					)
				)
			);
	}
	public function uploadAction(Request $request)
	{
	$formFactory = Forms::createFormFactory();

	    $form = $formFactory->createBuilder('form')
	        ->add('urlAddress', 'url', array( 'attr' => array('placeholder' => 'http://example.com/img.jpg/'), 'label' => 'Podaj adres do zdjęcia lub wstaw grafikę obok: '))
	        ->add('tags', 'text', array('attr' => array('placeholder' => 'yolo, nowe, seks, itp'), 'label' => 'Podaj tagi: '))
	        ->add('description', 'textarea', array('attr' => array('placeholder' => 'Opis zdjęcia'),'label' => 'Podaj opis: '))
	        ->add('imageUpload', 'file', array('attr' => array('required' => false, 'multiple' => false, 'accept'	=> 'image/jpeg,image/gif,image/png'),'required' => false, 'label' => 'Wstaw zdjęcie z komputera: '))
	        ->add('latitude', 'hidden')
			->add('longitude', 'hidden')
	        ->getForm();

	    if ($request->getMethod() == 'POST') {
             $form->submit($request->request->get($form->getName()));

		    if ($form->isValid()) {
		        $data = $form->getData();
		  
		        
		        $files = $request->files->get($form->getName());
				if ($files['imageUpload']){
					$file = new Uploader(new Filesystem());
					$data['urlAddress'] =  'http://'.$_SERVER['HTTP_HOST'].$_SERVER['CONTEXT_PREFIX'].'/img/'.$file->saveFile($files['imageUpload']);
				}
 				$location = new Geocode($data['latitude'], $data['longitude']);
 				$feed = new Feed(array('picture'=>$data['urlAddress'] ,'about'=>$data['description'], 'location'=>$location->getLocation(),'tags'=>explode(",", $data['tags'])));
		        
		        $this->feedRepository->addFeed($feed);
			
		       return $this->render('APiszczekDemoBundle:Overview:upload.html.twig', array('added' => '1', 'form' => $form->createView()));
			//'AIzaSyBeV_C4VB8-UkTC4NUL-sftXSyZw0HMvLw'
		    }
		}

	
	    // display the form
	      return $this->render('APiszczekDemoBundle:Overview:upload.html.twig', array('form' => $form->createView()));
	}
	public function feedRemoveAction(Request $request)
	{

		$this->feedRepository->feedRemove($request->get('picture'));
		return '1';
	}
}
