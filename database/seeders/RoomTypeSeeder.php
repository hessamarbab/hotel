<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends AbstractByDataSeeder
{
    /**
     *  Model class we want to seed
     *
     * @var class
     */
    protected $modelClass=RoomType::class;
    /**
     * return data that need to seed
     *
     * @return array
     */
    protected  function items(){
        return[
            'یک تخته',
            'دو تخته',
            'سه تخته',
            'VIP',
            'منظره دریا',
            'منظره ساحل'
        ];
    }
    /**
     * give data form
     *
     * @return array
     */
    protected  function format($item,$counterId){
      return [
          'id'=>$counterId,
          'type'=>$item
      ];
  }

}
