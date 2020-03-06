<?php
namespace App\Controller;
use cake\Event\EventInterface;
use Cake\Utility\Text;

class BlogsController extends AppController{
   
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('blog');
        // debug($event);
        // exit;
    } 
    
    public function home()
    {
        // exit;
        $this->loadModel('Articles');

        $articles = $this->Articles->find()
                                   ->order(['Articles.id DESC']);

        $articleList = $this->Articles->find('list')->limit('8');

        $this->set('articles',$this->paginate($articles,['limit'=>'3']));

        $this->set('articleList',$articleList);

    }

    public function about()
    {
        //about 
    }

    public function contact()
    {
        exit("Hello");
    }

    public function view($id = null)
    {
        // exit("Hello");
        $this->loadModel('Articles');
        $article = $this->Articles->get($id);
        $this->set('article',$article);

    }

    public function index()
    {
        exit("Hello");
    }

}