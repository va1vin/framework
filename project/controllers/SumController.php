<?php
 namespace Project\Controllers;
 use \Core\Controller;

 class SumController extends Controller{
    public function sum($params)
    {
        $n1 = (int)$params['n1'];
        $n2 = (int)$params['n2'];
        $n3 = (int)$params['n3'];
        $sum = $n1 + $n2 + $n3;
        echo "Сумма чисел $n1, $n2 и $n3 равна $sum";
    }
 }