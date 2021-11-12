<?php


namespace App\Views;


class DashboardView extends \App\Views\CoreView
{
    public function __construct()
    {
        $this->setLoader('template/back/');
        $this->twig = new \Twig\Environment($this->loader, [
            //'cache' => '/path/to/compilation_cache',
        ]);
    }
    public function showIndexPage()
    {
        $title = 'Главная страница';
        $template = $this->twig->load('index.twig');
        echo $template->render(['Title'=>$title]);
    }

    public function showAllTags($tag_list)
    {
        $title = 'Метки';
        $template = $this->twig->load('tags/tags_list.twig');
        echo $template->render(['Title'=>$title, 'tag_list'=>$tag_list]);
    }
}