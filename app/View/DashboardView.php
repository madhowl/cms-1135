<?php


namespace App\View;


class DashboardView extends \App\View
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
        $template = $this->twig->load('blank.html');
        echo $template->render(['Title'=>$title]);
    }
}