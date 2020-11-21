<?php

namespace App\Controllers;


 

class heroes extends BaseController

{

public function index()
{
$traveler = new \App\Models\Traveler();
$records = $traveler->findAll();
// get a template parser

$parser = \Config\Services::parser(); // tell it about the substitions

/*return $parser->setData(['records' => $records]) // and have it render the template with those

->render('Travelerslist');
*/
/*Lab8内容*/
$table = new \CodeIgniter\View\Table();

$headings = $traveler->fields;

$displayHeadings = array_slice($headings, 1, 2);

$table->setHeading(array_map('ucfirst', $displayHeadings));

foreach ($records as $record) {
$nameLink = anchor("showme/$record->id",$record->name);
$addimg="<img src=\"/image/".$record->image."\"/>";
$table->addRow($nameLink,$record->description,$addimg); 



}

 return $table->generate();
/*Lab8内容*/

}


public function showme($id)
{// connect to the model

$traveler = new \App\Models\Traveler();

// retrieve all the records

$record = $traveler->find($id);
// get a template parser

$parser = \Config\Services::parser(); 

$table = new \CodeIgniter\View\Table();
      $headings = $traveler->fields;
      
      $table->addRow('id:  '.$record['id']);
      $table->addRow('name:  '.$record['name']);
      $table->addRow('Chinesename:  '.$record['Chinesename']);
      $table->addRow('position:  '.$record['position']);
      $table->addRow('occupation:  '.$record['occupation']);
      $table->addRow('weapon:  '.$record['weapon']);
      $table->addRow('description:  '.$record['description']);

      $table->addRow( "<img src=\"/image/".$record['image']."\"/>");
      
$template = [

'table_open' => '<table cellpadding="5px">',

'cell_start' => '<td style="border: 1px solid #dddddd;">',

'row_alt_start' => '<tr style="background-color:#dddddd">',

];
$fields = [
        'title' => 'This traveler',
        'heading' => 'This traveler', 
        'footer' => 'Copyright Zhaohang Liu'
        ];
$table->setTemplate($template);
//return $parser->setData($record) -> render('oneTraveler');
        return $parser->setData($fields)

->render('templates\top') .

$table->generate() .

$parser->setData($fields)

->render('templates\bottom');
}

}
