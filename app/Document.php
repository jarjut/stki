<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['judul', 'abstrak'];

    public function words()
    {
        return $this->hasMany(\App\Word::class);
    }
}
