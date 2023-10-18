<?php

namespace App\Interface ;

interface BrandInterface{
    public function store($request);
    public function update($request,$id);
    public function delete($request);
}