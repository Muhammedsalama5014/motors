<?php

namespace App\Interface ;

interface BrancheInterface{
    public function store($request);
    public function update($request,$id);
    public function delete($request);
}