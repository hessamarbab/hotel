<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;
class HotelSeeder extends AbstractByDataSeeder
{
    protected $modelClass=Hotel::class;
      /**
     * return data that need to seed
     */
    protected  function items(){
        return[
            'azadi-tehran',
            'toranj-kish'
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
            'name_town'=>$item
        ];
    }


}
