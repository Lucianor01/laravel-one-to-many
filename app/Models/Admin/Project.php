<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    // TRASFORMAZIONE TITOLO IN SLUG
    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    protected $fillable = ['title', 'description', 'slug', 'price', 'project_image'];
}
