<?php

namespace Database\Repositories;

interface RepositoryInterface
{
    public function findAll();
    public function find(int $id);
    public function insert(array $data);
    public function update(int $id, array $input);
    public function delete(int $id);
}