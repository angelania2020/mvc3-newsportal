<?php

class Controller
{

    public static function StartSite()
    {
        $arr = News::getLast3News();
        include_once 'view/start.php';
    }

    public static function AllCategory()
    {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllNews()
    {
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }

    public static function NewsByCatID($id)
    {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }

    public static function NewsByID($id)
    {
        $n = News::getNewsByID($id);
        include_once 'view/readnews.php';
    }

    public static function error404()
    {
        include_once 'view/error404.php';
    }

    public static function InsertComment($c, $id)
    {
        // $c - текст комментария, $id - номер новости, для которой добавлен комментарий
        Comments::InsertComment($c, $id);
        // self::NewsByID($id);
        header('Location:news?id=' . $id . '#ctable');
    }

    // Список комментариев:
    public static function Comments($newsid)
    {
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::CommentsByNews($arr);
    }

    // Количество комментариев к новости:
    public static function CommentsCount($newsid)
    {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::CommentsCount($arr);
    }

    // Ссылка - переход к списку комментариев
    public static function CommentsCountWithAnchor($newsid)
    {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::CommentsCountWithAnchor($arr);
    }

    // РЕГИСТРАЦИЯ
    public static function registerForm()
    {
        include_once('view/formRegister.php');
    }
    public static function registerUser()
    {
        $result = Register::registerUser();
        include_once('view/answerRegister.php');
    }
}  // End class
