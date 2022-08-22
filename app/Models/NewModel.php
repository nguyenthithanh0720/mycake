<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    protected $table = 'news';
    const UPDATED_AT = null;
    protected $fillable = [
        'id',
        'title',
        'sub_title',
        'content',
        'image',
    ];
}
