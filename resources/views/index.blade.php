@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

                <div class="panel panel-default">
                    <div class="panel-heading" >Hotel {{$hotel->name_town}}</div>
                    <div class="panel-body">
                        <div class="row"   bgcolor="#f0f8ff">
                        <table>
                            <tr >
                                <td style="padding:2%">-------- - </td>
                                @for ($i = 0; $i < $num; $i++)
                                    <td style="padding:2%">{{$title[$i]}}</td>
                                @endfor
                            </tr>
                        @forelse ($hotel->rooms as $room)
                            <tr>
                                <td style="padding:5%">
                                    {{$room->type->type}}
                                </td>
                                @for ($i = 0; $i < $num; $i++)

                                    <td style="padding:5%">
                                        <del>
                                        {{($room->daily_cost[$date->addDay()->toDateString()])["board_cost"]}},000
                                        </del>
                                        <br/>
                                        {{($room->daily_cost[$date->toDateString()])["passanger_cost"]}},000
                                    </td>
                                @endfor
                            </tr>
                        @empty
                            No product found!
                        @endforelse
                        </table>

                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection
