<?php
namespace App\Controller;
use cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class BlogsController extends AppController{
   
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('blog');

        $this->loadModel('Menus');

        $menus = $this->Menus->find('all',['contain'=>['Submenus']]);

        $this->set('menus', $menus);
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

    public function getData()
    {
        
        $to_time = strtotime("2008-12-13 10:42:00");
        $from_time = strtotime("2008-12-13 10:21:00");
        echo round(abs($to_time - $from_time) / 60,2). " minute";


        $link = 'https://jsonplaceholder.typicode.com/posts';

        $data = [
          'userId' => '1',
          'title'  => 'testing',
          'body'   => 'content in the post'
        ];
        
        $http = new Client;

        $response = $http->post(
            $link,
            json_encode($data),
            ['type' => 'json']
        );

        $json = $response->getJson();

        $session = $this->request->getSession();

        $session->write('otp', 'en');

        echo $session->read('otp');



        if (time() > ($session->read('lastSubmitted') ?: 0)) {
          $session->write('lastSubmitted', strtotime('+1 minutes'));
          echo "Hello";
          echo $session->read('lastSubmitted');
        }

        echo time() . '==' .$session->read('lastSubmitted');
        
        exit;
    }

}