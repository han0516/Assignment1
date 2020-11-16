<?php

namespace App\Controllers;


 

class Traveler extends BaseController

{

public function index()
{
$traveler = new \App\Models\Traveler();
$records = $traveler->findAll();
// get a template parser

$parser = \Config\Services::parser(); // tell it about the substitions

return $parser->setData(['records' => $records]) // and have it render the template with those

->render('Travelerslist');
}


public function showme($id)
{// connect to the model

$traveler = new \App\Models\Traveler();

// retrieve all the records

$record = $traveler->find($id);
// get a template parser

$parser = \Config\Services::parser(); 
return $parser->setData($record) -> render('oneTraveler');
}

}
