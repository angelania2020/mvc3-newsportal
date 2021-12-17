<?php
class ViewNews
{

    public static function NewsByCategory($arr)
    {
        foreach ($arr as $value) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width=150 /><br>';
            echo "<h2>" . $value['title'] . "</h2>";
            Controller::CommentsCount($value['id']);
            echo "<a href='news?id=" . $value['id'] . "'>Edasi</a><br>";
        }
    }

    public static function AllNews($arr)
    {
        foreach ($arr as $value) {
            echo "<li>" . $value['title'];
            Controller::CommentsCount($value['id']);
            echo "<a href='news?id=" . $value['id'] . "'>Edasi</a></li><br>";
        }
    }

    public static function ReadNews($n)
    {
        echo "<h2>" . $n['title'] . "</h2>";
        Controller::CommentsCountWithAnchor($n['id']);
        echo '<br><img src="data:image/jpeg;base64,' . base64_encode($n['picture']) . '" width=150/><br>';
        echo "<p>" . $n['text'] . "</p>";
    }

    public static function PictureTitleNews($arr)
    {
        foreach ($arr as $value) {
            echo "<div class='row'>";
            echo "<a href='news?id=" . $value['id'] . "'><img src='data:image/jpeg;base64," . base64_encode($value['picture']) . "' width=150 class='img-thumbnail'></a>";
            echo "<a href='news?id=" . $value['id'] . "' style='display: flex; justify-content: center; flex-direction: column;'>" . $value['title'] . "</a>";
            echo "<div style='display: flex; justify-content: center; flex-direction: column;'>";
            Controller::CommentsCount($value['id']);
            echo "</div>";
            echo "</div><br>";
        }
    }

    public static function ColorfulNews($arr)
    {
        foreach ($arr as $value) {
            echo "<h1 style='background-color:#ab00007a;'>" . $value['title'] . "</h1>";
            echo "<p style='background-color:#ffdfdf;'>" . $value['text'] . "</p><br>";
        }
    }
}
