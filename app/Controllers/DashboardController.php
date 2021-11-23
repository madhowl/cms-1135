<?php

namespace App\Controllers;


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

    public function showAllTags()
    {
        $tag_list = $this->Tags->getAllTags();
        $this->View->showAllTags($tag_list);
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
        $tag['name'] = 'успешно удалена';
        $this->View->tagView($tag);
    }

    public function prepareMessage($type ='ok')
    {
        $message['header'] = '----+=+----';
        $message['body'] = 'Все удачно';
        $message['title'] = 'Ok';
        switch ($type){
            case 'ok': $message['style']='success';
            break;
            case 'error': $message['style']='danger';
            break;
            case 'warning': $message['style']='warning';
            break;
            default : $message['style']='primary';
        }
        return $message;
    }
    public function storeNewTag()
    {
        if (isset($_POST['btn-task-add'])){
            $data['name'] = $_POST['name'];
            $this->Tags->addNewTag($data);
            $message = $this->prepareMessage();
            $this->View->storeNewTag($message);
        }
    }
}