<?php

namespace Idy\Idea\Controllers\Web;

use Phalcon\Mvc\Controller;
use Idy\Idea\Infrastructure\SqlIdeaRepository;
use Idy\Idea\Infrastructure\SqlAuthorRepository;

class IdeaController extends Controller
{

    private $authorRepository;
    private $ideaRepository;
    private $db;

    public function initialize() {
        $this->authorRepository = new SqlAuthorRepository();
        $this->ideaRepository = new SqlIdeaRepository();
        $this->db = $di['database'];
    }

    public function checkAction() {
        echo $this->db->getConnection() ? 'connected!' : 'db offline';
    }

    public function indexAction()
    {
        /*
        $ideas = [];
        $ideasQ = $this->ideaRepository->allIdeas();
        foreach ($ideasQ as $ideaQ) {
            $authorQ = $this->authorRepository->byId($ideasQ["author_id"]);
            $ideaQ["authorName"] = $authorQ["name"];
            $ideaQ["authorEmail"] = $authorQ["email"];
            array_push($ideas, $ideaQ);
        }
        $this->view->ideas = $ideas;
        */
        return $this->view->pick('home');
    }

    public function addAction()
    {

    }

    public function voteAction()
    {

    }

    public function rateAction()
    {
        
    }

    public function sampahAction(){
        echo "sampah!";
    }

}