<?php

namespace App\Controllers;


use App\HelperClass;
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
        $this->Tags = new TagsModel('tags');
        $this->View = new View();
    }
    public function index()
    {
        $this->View->showIndexPage();
    }
    public function showAllTags($message='')
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
        $message = HelperClass::show_message('warning','Метка № '.$tag['id'].' помечена как удаленная!', 2000, 'topRight');
        $this->showAllTags($message);
    }
    public function storeNewTag()
    {
        if (isset($_POST['btn-task-add'])){
            $data['name'] = $_POST['name'];
            $this->Tags->addNewTag($data);
            $message = HelperClass::show_message('success','Новая метка создана!', 2000, 'topRight');
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
            if (isset($_POST['btn-task-add'])){
                $data['id'] = $_POST['id'];
                $data['name'] = $_POST['name'];
                $this->Tags->updateTag($data);
                $message = HelperClass::show_message('success','Ваши изменения сохранены!', 1000, 'topRight');
                $this->showAllTags($message);
            }
        }
}