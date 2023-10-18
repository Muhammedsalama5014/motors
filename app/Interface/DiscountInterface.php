<?php

namespace App\Interface ;

interface DiscountInterface{
    public function store($request);
    public function update($request,$id);
    public function delete($request);
}