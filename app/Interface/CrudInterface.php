<?php

namespace App\Interface ;

interface CrudInterface{
    public function store($request);
    public function update($request,$id);
    public function delete($request);
}