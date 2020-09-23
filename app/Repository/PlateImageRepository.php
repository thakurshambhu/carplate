<?php
namespace App\Repository;

use App\Repository\RepositoryInterface;
use App\PlateImage;

class PlateImageRepository implements RepositoryInterface
{
    private $model;

    public function __construct(PlateImage $PlateImage)
    {
        $this->model = $PlateImage;
    }

    //To create and update data
    public function createUpdateData($condition, $parameters)
    {
        return $resultSet = $this->model->updateOrCreate($condition, $parameters);
    }

    //To create data
    public function createData($data){
        return $resultSet = $this->model->create($data);
    }

    //To fetch data
    public function getData($conditions, $method, $withArr = [],$toArray)
    {
        $query = $this->model->whereNotNull('id');

        if (!empty($conditions['id'])) {
            $query->where('id', $conditions['id']);
        }

        if (!empty($conditions['plate_id'])) {
            $query->where('plate_id', $conditions['plate_id']);
        }

        if (!empty($conditions['is_deleted'])) {
            $query->where('is_deleted', $conditions['is_deleted']);
        }

        if (!empty($withArr)) {
            $query->with($withArr);
        }

        $resultSet = $query->orderBy('created_at', 'desc')->$method();

        if (!empty($resultSet) && $toArray) {
            $resultSet = $resultSet->toArray();
        }

        return $resultSet;
    }
}