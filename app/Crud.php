<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
    	'question', 'choice1', 'choice2', 'choice3', 'choice4'
    ];
}
