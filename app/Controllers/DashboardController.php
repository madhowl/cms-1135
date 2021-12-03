<?php

namespace App\Controllers;


use App\HelperClass;
use App\Models\ArticlesModel;
use App\Models\CategoriesModel;
use App\Models\TagsModel;
use App\Views\DashboardView as View;

class DashboardController extends \App\Controller
{
    protected $Categories;
    protected $Articles;
    protected $Tags;
    protected $View;

    public function __construct()
    {
        $this->Categories = new CategoriesModel('categories');
        $this->Articles = new ArticlesModel('articles');
        $this->Tags = new TagsModel('tags');
        $this->View = new View();
    }

    public function index()
    {
        $this->View->showIndexPage();
    }

    public function showAllTags($message = '')
    {
        $tag_list = $this->Tags->getAllTags();
        $this->View->showAllTags($tag_list, $message);
    }

    public function createNewTag()
    {
        $this->View->showTagForm();
    }

    public function tagView($id)
    {
        $tag = $this->Tags->getById($id);
        $this->View->tagView($tag);
    }

    public function tagDelete($id)
    {
        $tag = $this->Tags->getById($id);
        $this->Tags->deleteTag($id);
        $message = HelperClass::show_message('warning', 'Метка № ' . $tag['id'] . ' помечена как удаленная!', 2000, 'topRight');
        $this->showAllTags($message);
    }

    public function storeNewTag()
    {
        if (isset($_POST['btn-task-add'])) {
            $data['name'] = $_POST['name'];
            $this->Tags->addNewTag($data);
            $message = HelperClass::show_message('success', 'Новая метка создана!', 2000, 'topRight');
            $this->showAllTags($message);
        }
    }

    public function tagEdit($id)
    {
        $tag = $this->Tags->getById($id);
        $this->View->showEditTagForm($tag);
    }

    public function updateTag($id)
    {
        if (isset($_POST['btn-task-add'])) {
            $data['id'] = $_POST['id'];
            $data['name'] = $_POST['name'];
            $this->Tags->updateTag($data);
            $message = HelperClass::show_message('success', 'Ваши изменения сохранены!', 1000, 'topRight');
            $this->showAllTags($message);
        }
    }

    public function showAllArticles($message = '')
    {
        $articles_list = $this->Articles->all();
        $this->View->showAllArticles($articles_list, $message);
    }

    public function createNewArticle()
    {
        $categories = $this->Categories->getListCategories();
        $this->View->showArticleForm($categories);
    }

    public function storeNewArticle()
    {
        if (isset($_POST['btn-article-add'])) {
            $data['title'] = $_POST['title'];
            $data['intro_img'] = $_POST['intro_img'];
            $data['category_id'] = $_POST['category_id'];
            $data['intro_text'] = $_POST['intro_text'];
            $data['full_text'] = $_POST['full_text'];
            $data['visit'] = 0;
            $this->Articles->addNewArticle($data);
            $message = HelperClass::show_message('success', 'Новая статья создана!', 2000, 'topRight');
            $this->showAllTags($message);
        }
    }
    
    public function articleEdit($id)
    {
        $article = $this->Articles->getById($id);
        $categories = $this->Categories->getListCategories();
        $this->View->showEditArticleForm($article, $categories);
    }
}