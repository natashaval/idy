<?php 

namespace Idy\Idea\Infrastructure;

use Idy\Idea\Domain\Model\IdeaRepository;
use Idy\Idea\Domain\Model\Idea;
use Idy\Idea\Domain\Model\IdeaId;

class SqlIdeaRepository extends BaseRepository implements IdeaRepository
{
    private $ideas;
    private $conn;

    public function __construct()
    {
        $this->ideas = array();
        // $conn = $this->getConnection();
    }

    public function byId(IdeaId $id)
    {
        $idea = $conn->fetchOne("SELECT * FROM idea where id = :id",
        \Phalcon\Db::FETCH_ASSOC,
        [ "id" => $id],
        [ "id" => Column::BIND_PARAM_INT]
        );
        return $idea;
    }

    public function save(Idea $idea)
    {

    }

    public function allIdeas()
    {
        $conn = $this->getConnection();
        $ideas = $conn->fetchAll("SELECT * FROM idea");
        return $ideas;
    }
    
}