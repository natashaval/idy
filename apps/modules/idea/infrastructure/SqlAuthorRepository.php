<?php

namespace Idy\Idea\Infrastructure;

use Idy\Idea\Domain\Model\AuthorRepository;
use Idy\Idea\Domain\Model\Author;

class SqlAuthorRepository extends BaseRepository implements AuthorRepository
{
    private $conn;

    public function __construct()
    {
        // $conn = $this->getConnection();
    }

    public function byId($id) {
        $conn = $this->getConnection();
        $author = $conn->fetchOne("SELECT * FROM author WHERE id = :id",
            \Phalcon\Db::FETCH_ASSOC,
            [ "id" => $id],
            [ "id" => Column::BIND_PARAM_INT]
        );
        return $author;
    }

    public function save(Author $author) {

    }
}