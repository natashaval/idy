<?php

namespace Idy\Idea\Infrastructure;

abstract class BaseRepository
{
    private $db;

    public function __construct($di)
    {
        $this->db = $di['database'];
    }

    protected function getConnection() {
        return $this->db;
    }
}