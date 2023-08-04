<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable =['name','author','total','available','released_date','price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function issuebook()
    {
        return $this->hasMany(IssueBook::class);
    }

}
