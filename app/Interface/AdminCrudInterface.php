<?php

namespace App\Interface ;

interface AdminCrudInterface{
    public function store($request);
    public function update($request,$id);
    public function delete($request);
}