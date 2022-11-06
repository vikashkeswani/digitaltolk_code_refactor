<?php

namespace App\Interfaces;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface BaseRepositoryInterface
{


    public function all() : Collection ;

    public function find($id) : Model ;

    public function with(array $with = []) ;

    public function findOrFail($id) ;

    public function findBySlug($slug): Model ;

    public function paginate($perPage = null): LengthAwarePaginator ;

    public function create(array $data): Model ;

    public function update($id, array $data): Model ;

    public function delete($id): Model ;

    public function where($key, $where) ;

}