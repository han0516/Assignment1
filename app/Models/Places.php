<?php
namespace App\Models;
 


/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Olberic',
            'position' => 'HighLand',
            'do'=> '剑士',
            'image' => 'Olberic.png',
        ],
        '2' => [
           'id' => 2,
            'name' => 'Primrose',
            'position' => 'SandLand',
            'do'=> '舞女',
            'image' => 'Primrose.png',
        ],
        '3'=> [
           'id' => 3,
            'name' => 'Cyrus',
            'position' => 'FLatLand',
            'do'=> '学者',
            'image' => 'Cyrus.png',
        ],
        '4' => [
           'id' => 4,
            'name' => 'Therion',
            'position' => 'CliffLand',
            'do'=> '盗贼',
            'image' => 'Therion.png',
        ],
        '5' => [
           'id' => 5,
            'name' => 'Ophilia',
            'position' => 'FrostLand',
            'do'=> '神官',
            'image' => 'Ophilia.png',
        ],
        '6' => [
           'id' => 6,
            'name' => 'Tressa',
            'position' => 'CoastLand',
            'do'=> '商人',
            'image' => 'Tressa.png',
        ],
        '7' => [
           'id' => 7,
            'name' => 'Alfyn',
            'position' => 'RiverLand',
            'do'=> '药师',
            'image' => 'Alfyn.png',
        ],
        '8' => [
           'id' => 8,
            'name' => 'Haanit',
            'position' => 'WoodLand',
            'do'=> '猎人',
            'image' => 'Haanit.png',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
