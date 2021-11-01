<?php


namespace App\View;


class FrontView extends \App\View
{
    public function showIndexPage()
    {
        $title = 'Главная страница';
        $template = $this->twig->load('index.twig');
        echo $template->render(['Title'=>$title]);
    }
    public function showListPages(array $data)
    {
        $title = 'Список статей';
        $template = $this->twig->load('pagelist.twig');
        echo $template->render(['data'=>$data, 'Title'=>$title]);
    }
    public function showSinglePage( $data)
    {
        $template = $this->twig->load('singlepage.twig');
        echo $template->render(['item'=>$data]);
    }
}