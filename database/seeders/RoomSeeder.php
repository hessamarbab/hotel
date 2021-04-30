<?php

namespace Database\Seeders;

use App\Models\Room;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RoomSeeder extends AbstractByDataSeeder
{
     /**
     *  Model class we want to seed
     *
     * @var class
     */
    protected $modelClass=Room::class;
    /**
     * return data that need to seed
     *
     * @return array
     */
    protected  function items(){
        $items=[];
        for($i=0;$i<3;$i++){
            $dailyCost=$this->dailyCostDefination();

            $items[$i]=[
                'hotel_id'=>1,
                'room_type_id'=>$i,
                'daily_cost'=>$dailyCost
            ];
        }
        return $items;
    }
    /**
     * give data form
     *
     * @return array
     */
    protected  function format($item,$counterId){
        return [
            'id'=>$counterId,
            'hotel_id'=>$item['hotel_id'],
            'room_type_id'=>$item['room_type_id'],
            'daily_cost'=>$item['daily_cost']
        ];
    }

    private function dailyCostDefination()
        {
            $dailyCost=[];
            $day = today();
            for($i=0;$i<10;$i++){
                $day=$day->addDay();
                $boardCost=rand(300,400);
                $dailyCost  [$day->toDateString()]=[
                    "board_cost"=>$boardCost,
                    "passanger_cost"=>rand(200,$boardCost)
                ];
            }
            return $dailyCost;
        }



}
