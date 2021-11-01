<?php


namespace App\Controllers;


use App\Models\ArticlesModel;
use App\Models\CategoriesModel;
use App\View\FrontView as View;

class FrontController
{
    protected $Categories;
    protected $Articles;
    protected $View;
    public function __construct()
    {
        $this->Categories = new CategoriesModel('categories');
        $this->Articles = new ArticlesModel('articles');
        $this->View = new View();
    }

    public function index()
    {
        $allCat = $this->Categories->all();
        $this->View->showIndexPage();

    }

    public function page()
    {
        $data = $this->Articles->all();
        $this->View->showListPages($data);

    }

    public function view(string $slug)
    {
        $slug = explode('.',$slug);
        $date = $this->Articles->getBySlug($slug[0]);
        $this->View->showSinglePage($date);
    }
}