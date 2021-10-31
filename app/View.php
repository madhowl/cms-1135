<?php

namespace App;


class View
{
    protected $loader;
    protected $twig;

    public function __construct()
    {
        $this->loader = new \Twig\Loader\FilesystemLoader('template/front/');
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
    public function showListPages(array $data)
    {
        $title = 'Список статей';
        $template = $this->twig->load('pagelist.twig');
        echo $template->render(['data'=>$data, 'Title'=>$title]);
    }
    public function showSinglePage( $data)
    {
        $template = $this->twig->load('singlepage.twig');
        echo $template->render(['data'=>$data]);
    }
}