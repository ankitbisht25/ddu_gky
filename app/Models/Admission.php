<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $table = 'admission_details';
    public $timestamps = false;

    public function doc_type(){
        return $this->hasOne(DocType::class,'id','doc_type_id');
    }

}
