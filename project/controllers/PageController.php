<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{ protected $title = 'Page Title';
        public function show1()
		{
			echo 'кук';
		}
		
		public function show2()
		{
			echo 'тута';
		}        
        public function act()
        {	 
			return $this->render('page/act',[
				'header' => 'список юзеров',
				'users'  => ['user1', 'user2', 'user3'],
			]);
        }
        private $pages;
		
		public function __construct()
		{
			$this->pages = [
				1 => 'страница 1',
				2 => 'страница 2',
				3 => 'страница 3',
			];
		}
		public function show($params)
		{
			echo $this->pages[ $params['id'] ]; 
		}
	}