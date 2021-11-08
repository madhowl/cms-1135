<?php

namespace App;


class View
{
    protected $loader;
    protected $twig;

    public function __construct()
    {
        //$this->loader = new \Twig\Loader\FilesystemLoader('template/front/');
        $this->setLoader('template/front/');
        $this->twig = new \Twig\Environment($this->loader, [
            //'cache' => '/path/to/compilation_cache',
        ]);
    }

    public function setLoader ($path)
    {
        $this->loader = new \Twig\Loader\FilesystemLoader($path);
    }

}