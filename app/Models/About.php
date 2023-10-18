<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class About extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['title_head','desc_head','title_bottom','desc_bottom'];

    protected $table = 'about';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
