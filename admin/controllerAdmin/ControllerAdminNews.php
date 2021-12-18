<?php
class ControllerAdminNews
{
    // list News
    public static function newsList()
    {
        $arr = ModelAdminNews::getNewsList();
        include_once 'viewAdmin/newsList.php';
    }
}  // class
