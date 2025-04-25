<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    use HasFactory;

    protected $fillable = ['visa_id', 'question_id', 'answer'];

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
