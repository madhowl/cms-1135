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
        $allCategories = $this->Categories->all();
        $this->View->showIndexPage($allCategories);

    }

    public function page()
    {
        $data = $this->Articles->all();
        $allCategories = $this->Categories->all();
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
        $this->View->showListPages($data,$allCategories);

    }

    public function view(string $slug)
    {
        $slug = explode('.',$slug);
        $allCategories = $this->Categories->all();
        $date = $this->Articles->getBySlug($slug[0]);
        $this->View->showSinglePage($date, $allCategories);
    }

    /**
     * @return ArticlesModel
     */
    public function category(int $id)
    {
        $category = $this->Categories->getById($id);
        $allCategories = $this->Categories->all();
        //$this->dbg($allCategories);
        $articlesListInCategory =$this->Articles->getByCategoryId($id);
        $this->View->showListSingleCategory($category, $articlesListInCategory, $allCategories);
    }

    public function dbg($some)
    {
        echo '<pre>';
        print_r($some);
        echo '</pre>';
    }
}