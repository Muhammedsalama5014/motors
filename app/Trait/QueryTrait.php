<?php

namespace App\Trait;

trait QueryTrait{
    public function getAllData($model)
    {
        return $model::all();
    }
    public function getDataById($model , $id)
    {
        return $model::findOrFail($id);
    }

    public function getDataByWhereText($model,$column_name,$search_text)
    {
        return $model::where("$column_name","$search_text")->get();
    }
}