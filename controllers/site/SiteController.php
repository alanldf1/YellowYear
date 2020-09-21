<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class SiteController extends Controller
{

	public function index()
	{		
		$this->setLayout('site/shared/layout.php');
		$this->view('site/home/index.php');
	}

	public function about ()
	{
		$this->setLayout('site/shared/layout.php');
		$this->view('site/about-us/about-ind.php');
	}

	public function contact () 
	{
		$this->setLayout('site/shared/layout.php');
		$this->view('site/contact/contact-ind.php');
	}

	public function posts ()
	{
		$this->setLayout('site/shared/layout.php');
		$this->view('site/posts/post-ind.php');
	}

	

}