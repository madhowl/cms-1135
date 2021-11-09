<?php

namespace App\Controllers;


use App\Views\DashboardView as View;

class DashboardController extends \App\Controller
{
    protected $Categories;
    protected $Articles;
    protected $View;
    public function __construct()
    {
        $this->View = new View();
    }

    public function index()
    {
        $this->View->showIndexPage();
    }
}