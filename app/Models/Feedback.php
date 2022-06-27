<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    public $fillable = ['feedbacktype', 'feedbackmessage', 'name', 'email', 'date', 'phone'];
}
