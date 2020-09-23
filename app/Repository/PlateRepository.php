<?php
namespace App\Repository;

use App\Repository\RepositoryInterface;
use App\Plate;

class PlateRepository implements RepositoryInterface
{
    private $model;

    public function __construct(Plate $Plate)
    {
        $this->model = $Plate;
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

        if (!empty($conditions['is_featured'])) {
            $query->where('is_featured', $conditions['is_featured']);
        }

        // if (!empty($conditions['filter_key'])) {
        //     $query->where('description', 'like', '%'.$conditions['filter_key'].'%')
        //           ->orWhere('title', 'like', '%'.$conditions['filter_key'].'%');
        // }

        // if (!empty($conditions['trending'])) {
        //     $query->where('trending', $conditions['trending']);
        // }

        if (!empty($conditions['user_id'])) {
            $query->where('user_id', $conditions['user_id']);
        }

        if (!empty($conditions['is_publised'])) {
            $query->where('is_publised', $conditions['is_publised']);
        }

        if (!empty($conditions['is_deleted'])) {
            $query->where('is_deleted', $conditions['is_deleted']);
        }

        
        if (!empty($withArr)) {
            $query->with($withArr);
        }
        if (!empty($conditions['order'])) {
            $resultSet = $query->orderBy('plate_price', $conditions['order'])->$method();
        }else{
            $resultSet = $query->orderBy('plate_price', 'desc')->$method();
        }
        if (!empty($resultSet) && $toArray) {
            $resultSet = $resultSet->toArray();
        }

        return $resultSet;
    }
}