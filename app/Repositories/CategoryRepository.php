<?php

namespace App\Repositories;

use App\Repositories\Eloquent\Repository;
use App\Contracts\Repositories\RepositoryInterface;

class CategoryRepository extends Repository
{
    /**
     * Returns the name of the model
     *
     * @return string
     */
    public function model()
    {
        return 'App\Models\Category';
    }

    /**
     * Fetch all records (enabled and disabled records)
     *
     * @param  int    $perPage
     * @param  array  $columns
     * @return mixed
     */
    public function allRecords(int $perPage = 0, array $columns = array('*'))
    {
        return $this->model->latest()->paginateOrNot($perPage, $columns);
    }

    /**
     * Fetch all enabled records
     *
     * @param  int    $perPage
     * @param  array  $columns
     * @return mixed
     */
    public function enabledRecords(int $perPage = 0, array $columns = array('*'))
    {
        return $this->model->enabled()->paginateOrNot($perPage, $columns);
    }

}
