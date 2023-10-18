<?php

namespace App\Interface ;

interface ModelCarInterface{
    public function store($request);
    public function update($request,$id);
    public function delete($request);
}