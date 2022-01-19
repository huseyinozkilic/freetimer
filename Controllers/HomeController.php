<?php

use App\Services\Calculator;
use App\Services\Database;

class HomeController
{
    public $db;
    public $json = [
        'result' => null,
        'totals' => null,
        'status' => 200,
    ];

    public function home(){
        $templates = new League\Plates\Engine('./Template');

        return $templates->render('home');;
    }

    public function calculate(){
        $calculator = new Calculator();
        $input = json_decode(file_get_contents('php://input'));
        header('Content-Type: application/json; charset=utf-8');

        $dimensions = $calculator->setDimensions($input->width, $input->length);
        $bags = Calculator::calculateBags($dimensions);
        $price = Calculator::calculatePrice($bags);

        $prep = [
            'width' => $input->width,
            'length' => $input->length,
            'meauserement' => $input->measurementunit,
            'depthmeauserement' => $input->depthmeasurementunit,
            'bags' => $bags,
            'price' => $price,
        ];
        $insert = $calculator->saveToDb($prep);

        if($insert){
            $db = new \mysqli('localhost', 'freetimer', 'freetimer', 'freetimer');
            $insert = $db->query("SELECT LAST_INSERT_ID() AS inserted_id");
            $this->json['result'] = 'success';
            $this->json['totals'] = [
                'bags' => $bags,
                'price' => $price,
            ];
            $this->json['insert_id'] = $insert->fetch_object()->inserted_id;
        }else{
            $this->json['result'] = 'error';
            $this->json['status'] = 200;
        }

        return $this->json;
    }

    public function basket(){
        $input = json_decode(file_get_contents('php://input'));
        header('Content-Type: application/json; charset=utf-8');

        $db = new \mysqli('localhost', 'freetimer', 'freetimer', 'freetimer');
        $update = $db->query("UPDATE collection SET confirm=1 WHERE id=$input->id");

        if($update){
            $this->json['result'] = 'success';
        }else{
            $this->json['result'] = 'error';
            $this->json['status'] = 200;
        }

        return $this->json;
    }
}
