<?php
/**
 * Created by PhpStorm.
 * User: mcelal
 * Date: 12.03.2017
 * Time: 22:01
 */
use Fuel\Core\Validation as Validation;

class Model_Bookmark extends \Orm\Model
{
    protected static $_table_name = 'bookmarks';

    protected static $_properties = [
        'id',
        'title',
        'url'
    ];

    public static function validation($factory)
    {
        $val = Validation::forge($factory);
        $val->add_field('title', 'Başlık', 'required|max_length[200]');
        $val->add_field('url', 'Adres', 'required|max_length[500]');
        return $val;
    }
}