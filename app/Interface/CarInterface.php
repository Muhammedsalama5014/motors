<?php

namespace App\Interface ;

interface CarInterface{
    public function store($request);
    public function update($request,$id);
    public function delete($request);
}