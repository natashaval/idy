<?php

namespace Idy\Idea\Domain\Model;

interface AuthorRepository
{
    public function byId($id);
    public function save(Author $author);
}