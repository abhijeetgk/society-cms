<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    protected $table = "member_master";
    protected $fillable = [
        'soc_id',
        'name',
        'co_owner_name',
        'flat_no',
        'floor_no',
    ];
    public function society()
    {
        return $this->belongsTo('App\society')->withDefault();
    }
}
