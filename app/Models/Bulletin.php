<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulletin extends Model
{
    use HasFactory;

    protected $table = 'bulletin';

    protected $fillable = ['date', 'title', 'pdf'];
}
