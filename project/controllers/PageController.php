<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Page;
	
	class PageController extends Controller
	{ /*protected $title = 'Page Title';
		
		
        public function show1()
		{$this->title = 'кук';
			echo 'кук';
		}
		
		public function show2()
		{$this->title = 'тута';
			echo 'тута';
		}        
        public function act()
        {	 
			$this->title = 'Действие act контроллера test';
			return $this->render('page/act',[
				'header' => 'список юзеров',
				'users'  => ['user1', 'user2', 'user3'],
			]);
        }
       private $pages;
		
		public function __construct()
		{
			$this->title = 'конструктор страниц';
        $this->pages = [
            1 => ['title' => 'страница 1', 'text' => 'текст страницы 1'],
            2 => ['title' => 'страница 2', 'text' => 'текст страницы 2'],
            3 => ['title' => 'страница 3', 'text' => 'текст страницы 3'],
        ];
		}
		public function showst($params)
		{ $pageId = $params['id'];

			if (isset($this->pages[$pageId])) {
				$pageData = $this->pages[$pageId];
				$this->title = $pageData['title'];
	
				return $this->render('page/showst', [
					'title' => $pageData['title'],
					'text' => $pageData['text'],
				]);
		}
		
	}*/
	public function test() {
		$page = new Page; // создаем объект модели
	
		$data = $page->getById(3); // получим запись с id=3
		var_dump($data);
		
		$data = $page->getById(5); // получим запись с id=5
		var_dump($data);
		
		$data = $page->getByRange(2, 5); // записи с id от 2 до 5
		var_dump($data);
	}
}