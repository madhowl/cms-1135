<?php


namespace App\Controllers;


use App\Models\ArticlesModel;
use App\Models\CategoriesModel;
use App\Models\TagsModel;
use App\View\FrontView as View;

class FrontController
{
    protected $Categories;
    protected $Articles;
    protected $Tags;
    protected $View;

    protected $allCategories;
    protected $allTags;

    public function __construct()
    {
        $this->Categories = new CategoriesModel('categories');
        $this->Articles = new ArticlesModel('articles');
        $this->Tags = new TagsModel('tags');
        $this->allCategories = $this->Categories->getAllCategories();
        $this->allTags = $this->Tags->getAllTags();
        $this->View = new View();
    }

    public function index()
    {
        //$allCategories = $this->Categories->all();
        //$this->dbg($this->allTags);
        $this->View->showIndexPage($this->allCategories, $this->allTags);

    }

    public function page()
    {
        $data = $this->Articles->all();
        //$allCategories = $this->Categories->all();
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
        $this->View->showListPages($data,$this->allCategories);

    }

    public function view(string $slug)
    {
        $slug = explode('.',$slug);
        //$allCategories = $this->Categories->all();
        $date = $this->Articles->getBySlug($slug[0]);
        $this->View->showSinglePage($date, $this->allCategories);
    }

    /**
     * @return ArticlesModel
     */
    public function category(int $id)
    {
        $category = $this->Categories->getById($id);
        //$allCategories = $this->Categories->all();
        //$this->dbg($allCategories);
        $articlesListInCategory =$this->Articles->getByCategoryId($id);
        $this->View->showListSingleCategory($category, $articlesListInCategory, $this->allCategories);
    }

    public function dbg($some)
    {
        echo '<pre>';
        print_r($some);
        echo '</pre>';
    }
}