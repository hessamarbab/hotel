<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($hotel,$date,$num)
    {

        $date=Carbon::createFromFormat('Y-m-d', $date);
        $title=Hotel::generateTitleOfCostChart($date,$num);
        $hotel=Hotel::where('name_town',$hotel)->with('rooms.type')->first();
        return view('index')
            ->withHotel($hotel)
            ->withTitle($title)
            ->withNum($num)
            ->withDate($date);
    }


}
