<?php
class ControllerAdminNews
{
    // list News
    public static function newsList()
    {
        $arr = ModelAdminNews::getNewsList();
        include_once 'viewAdmin/newsList.php';
    }

    // add
    public static function newsAddForm()
    {
        $arr = ModelAdminCategory::getCategoryList();
        include_once('viewAdmin/newsAddForm.php');
    }

    public static function newsAddResult()
    {
        $test = ModelAdminNews::getNewsAdd();
        include_once('viewAdmin/newsAddForm.php');
    }
}  // class
