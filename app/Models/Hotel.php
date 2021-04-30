<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public static function generateTitleOfCostChart($date,$num)
    {
        $jalaliDate[0]=Jalalian::fromCarbon($date)->format('%A %d %B');
        for($i=0;$i<$num;$i++){
            $jalaliDate[$i]=Jalalian::fromCarbon($date->addDay())->format('%A %d %B');
        }
        return $jalaliDate;
    }
}
