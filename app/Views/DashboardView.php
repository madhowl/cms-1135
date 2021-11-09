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
        $template = $this->twig->load('index.html');
        echo $template->render(['Title'=>$title]);
    }
}