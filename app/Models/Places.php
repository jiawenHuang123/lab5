<?php
namespace App\Models;
use App\Models\Simple\XMLModel;
/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {
protected $origin = WRITEPATH . 'data/placesData.xml';
protected $keyField = 'id';
protected $validationRules = [];
    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' =>'JohnWinstonLennon',
              'date' =>'1940.10.9—1980.12.8',
              'achievement' =>'A member of the British rock band the Beatles
Rock musicians, poets',
              'experience' =>'Lennon was born into a working-class family in Liverpool, England',
              'link' =>'https://xw.qq.com/cmsid/20190920A03R7C/20190920A03R7C00',
              'image' =>'1.png',
        ],
        '2' => [
            'id' =>'2',
            'name' =>'David Bowie',
              'date' =>'1947.1.8-2016.1.10',
              'achievement' =>'In 1976, he starred in the science fiction film "Extraterrestrial", for which he won the "Best Actor" Award at the 4th Saturn Awards.',
              'experience' =>' In 1985, he won the "Best Short Music Video" ',
              'link' =>'https://baike.baidu.com/item/%E5%A4%A7%E5%8D%AB%C2%B7%E9%B2%8D%E4%BC%8A/6409859?fr=aladdin',
              'image' =>'2.png',
       
        ],
         '3' => [
            'id' =>'3',
            'name' =>'Alan Merrill',
              'date' =>'1951.2.19-2020.3.29',
              'achievement' =>'He began his singing career at the age of 14.Alan Merrill made "I Love Rock N Roll" a classic by leading the group Arrows in 1975',
              'experience' =>'Alan Merrill comes from a musical family',
              'link' =>'3.https://baike.baidu.com/item/%E9%98%BF%E5%85%B0%C2%B7%E6%A2%85%E9%87%8C%E5%B0%94/24705397?fr=aladdin',
              'image' =>'3.png',
       
        ],
         '4' => [
            id =>'4',
           name =>'Freddie Mercury',
              'date' =>'1946.9.5-1991.11.24',
              'achievement' =>'Born in Zanzibar, Tanzania.British male singer, musician and lead singer of rock band Queen.',
               'experience' =>'Born in Zanzibar.',
              'link' =>'https://baike.baidu.com/item/%E4%BD%9B%E8%8E%B1%E8%BF%AA%C2%B7%E6%91%A9%E5%85%8B%E7%91%9E/9891863',
              'image' =>'4.png',
       
        ],
         '5' => [
            'id' =>'5',
            'name' =>'Brian Harold May',
              'date' =>'1947.7.19-?',
              'achievement' =>'World-renowned guitarist, composer, astronomer, member of the famous British rock band Queen, physicist, author, Lord CBE',
              'experience' =>'Born on 19 July 1947 in Hampton, London.',
              'link' =>'5.https://baike.baidu.com/item/%E5%B8%83%E8%8E%B1%E6%81%A9%C2%B7%E6%A2%85/15423493?fromtitle=%E5%B8%83%E8%B5%96%E6%81%A9%C2%B7%E6%A2%85&fromid=2254151',
              'image' =>'5.png',
       
        ],
         '6' => [
            'id' =>'6',
            'name' =>'Roger Taylor',
              'date' =>'1949.7.26',
              'achievement' =>'Known for his distinctive sound as a drummer, he was one of the most influential rock drummers of the 1970s and 1980s.',
              'experience' =>'He is an English singer-songwriter and multi-instrument player,Best known as the drummer for the British rock band Queen',
              'link' =>'6.https://baike.baidu.com/item/%E7%BD%97%E6%9D%B0%E2%8B%85%E6%B3%B0%E5%8B%92/23379020',
              'image' =>'6.png',
       
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
