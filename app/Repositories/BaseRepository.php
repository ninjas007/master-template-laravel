<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $record = $this->find($id);
        $attributes = $this->excludePasswordIfNull($attributes);

        if ($record) {
            $record->update($attributes);
            return $record;
        }
        return false;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        $record = $this->find($id);
        if ($record) {
            return $record->delete();
        }
        return false;
    }

    public function excludePasswordIfNull(array $data)
    {
        if (isset($data['password']) || empty($data['password'])) {
            if ($data['password'] == '') {
                unset($data['password']);
            }
        }

        return $data;
    }
}
