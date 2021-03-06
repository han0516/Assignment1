<?php
namespace App\Models;
use App\Models\Simple\JSONModel;


/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Traveler extends JSONModel{

    //mock data : an array of records
   /* protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Olberic',
            'Chinesename' => '欧尔贝克',
            'position' => 'HighLand',
            'do'=> '剑士',
            'weapon'=> 'sword,pike',
            'description'=> 'Olberic过去在王国里被称为“刚剑骑士”，但他却在一场战争中遭到背叛，失去了自己敬爱的国王与国家。现Olberic隐居在HighLand地区被群山环绕的小村庄里，靠着自己的剑术维持生计。但是有一天，Olberic无意听闻了那个背叛之人的行踪。', 
            'image' => 'Olberic.png',
        ],
        '2' => [
           'id' => 2,
            'name' => 'Primrose',
            'Chinesename' => '普里姆萝洁',
            'position' => 'SandLand',
            'do'=> '舞女',
            'weapon'=> 'dagger',
            'description'=> '表面上是沙漠地区SandLand街头的“舞女”，实际上则是一名贵族千金。Primrose伪装成舞女只为追查自己的杀父仇人，而就在这一天，那个人突然出在了酒馆之中。',
            'image' => 'Primrose.png',
        ],
        '3'=> [
           'id' => 3,
            'name' => 'Cyrus',
            'Chinesename' => '塞拉斯',
            'position' => 'FLatLand',
            'do'=> '学者',
            'weapon'=> 'mace',
            'description'=> '广袤富饶的平原上FLatLand地区王立学院的“学者”，终日沉醉在书和谜题的海洋中，为了探究历史的答案Cyrus从不停歇。但有一天Cyrus突然发现，有一本关键的书被人从书库中偷走了。',
            'image' => 'Cyrus.png',
        ],
        '4' => [
           'id' => 4,
            'name' => 'Therion',
            'Chinesename' => '泰里翁',
            'position' => 'CliffLand',
            'do'=> '盗贼',
            'weapon'=> 'dagger',
            'description'=> '一名流亡到断崖连绵的CliffLand地区的大盗，Therion的大名让当地的富人们心惊胆战，但他的过去却鲜有人知。有一天Therion听到了一些传闻，他像往常一样潜入了一栋豪宅，只为得到那他从未见识过的宝藏。',
            'image' => 'Therion.png',
        ],
        '5' => [
           'id' => 5,
            'name' => 'Ophilia',
            'Chinesename' => '欧菲莉亚',
            'position' => 'FrostLand',
            'do'=> '神官',
            'weapon'=> 'mace',
            'description'=> '终年积雪的FrostLand地区圣火教会的神官，在20年一度的“式年奉火仪式”上，被委任完成仪式的是Ophilia情同姐妹的挚友。终于在这一天，她们二人的试炼来临了。',
            'image' => 'Ophilia.png',
        ],
        '6' => [
           'id' => 6,
            'name' => 'Tressa',
            'Chinesename' => '特蕾莎',
            'position' => 'CoastLand',
            'do'=> '商人',
            'weapon'=> 'pike,bow',
            'description'=> 'Tressa生活在临海地区CoastLand的港口城市，她和父母一起经营着一家杂货店。Tressa经常注视大海思考：“自己想要做的是什么？想要得到的又是什么？”终于在这一天，一艘商船出在Tressa的面前。',
            'image' => 'Tressa.png',
        ],
        '7' => [
           'id' => 7,
            'name' => 'Alfyn',
            'Chinesename' => '亚芬',
            'position' => 'RiverLand',
            'do'=> '药师',
            'weapon'=> 'axe',
            'description'=> '小溪流动的RiverLand地区的村庄里的药师，在Alfyn年幼的时候，曾被一位旅行药师搭救过性命，他没有索要任何费用，只是留下药品就离开了。终于有一天，在好友的劝说下，Alfyn也踏上了旅行药师的道路。',
            'image' => 'Alfyn.png',
        ],
        '8' => [
           'id' => 8,
            'name' => 'Haanit',
            'Chinesename' => '海因特',
            'position' => 'WoodLand',
            'do'=> '猎人',
            'weapon'=> 'axe,bow',
            'description'=> '森林深处WoodLand地区村落里首屈一指的猎人，Haanit的师傅在一年前为了狩猎一只名为“赤目”的野兽而下落不明。为了寻找失联的师傅，Haanit也踏上了旅途。',
            'image' => 'Haanit.png',
        ],
    ];*/
    
   /* public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }*/
    protected $origin = WRITEPATH . 'data/Travelers.json';
    protected $keyField = 'id'; protected $validationRules = [];
}
