<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['kata', 'document_id'];

    public function document()
    {
        return $this->belongsTo(\App\Document::class);
    }
}
