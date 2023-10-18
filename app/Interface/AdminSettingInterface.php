<?php

namespace App\Interface ;

interface AdminSettingInterface{
    public function store($request);
    public function update($request,$id);
    public function delete($request);
}