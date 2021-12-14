<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogueModel extends Model
{
    use HasFactory;

    protected $table = 'catalogue_models'; 
    protected $fillable = [

        'title', 
        'image',
        'video_url', 
        'descriprion'
    ];


}
