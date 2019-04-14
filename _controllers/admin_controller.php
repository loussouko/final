<?php
isAdmin();
if(isset($_POST) && !empty($_POST))
{
    $niv = checkInput($_POST['Level']);
    $mati = checkInput($_POST['mati']);
    if(!empty($niv) && !empty($mati))
    {
        $matNiv=Cours::getAllCourseByMatiere($mati,$niv);
        $_SESSION['niv'] = $niv;
        $_SESSION['mati'] = $mati;
    }
}