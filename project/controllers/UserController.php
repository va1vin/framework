<?php
namespace Project\Controllers;
	use Core\Controller;
	
	class UserController extends Controller
	{
		private $users;
		
		public function __construct()
		{
			$this->users = [
                1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
                2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
                3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
                4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
                5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
            ];
		}
		
		public function show($params)
		{
			$id = $params['id'];
            $user = $this->users[$id];
            echo "Name: " . $user['name'] . "<br>";
            echo "Age: " . $user['age'] . "<br>";
            echo "Salary: " . $user['salary'] . "<br>";
		}
        public function info($params)
		{
            $id = $params['id'];
            $key = $params['key'];
            $user = $this->users[$id];
            echo $user[$key];
		}
        public function all()
        {
            foreach ($this->users as $id => $user) {
                
                echo "Name: " . $user['name'] . "<br>";
                echo "Age: " . $user['age'] . "<br>";
                echo "Salary: " . $user['salary'] . "<br>";
                echo "------------------------<br>";
            }
        }
        public function first($params)
        {
            $n = (int)$params['n'];
            $count = 0;
            foreach ($this->users as $id => $user) {
                if ($count >= $n) {
                    break;
                }
                echo "ID: " . $id . "<br>";
                echo "Name: " . $user['name'] . "<br>";
                echo "Age: " . $user['age'] . "<br>";
                echo "Salary: " . $user['salary'] . "<br>";
                echo "------------------------<br>";
                $count++;
            }
        }
	} 
?>    