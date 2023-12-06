@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                <tr class="bg-light-gray">
                    <th class="text-uppercase">Monday</th>
                    <th class="text-uppercase">Tuesday</th>
                    <th class="text-uppercase">Wednesday</th>
                    <th class="text-uppercase">Thursday</th>
                    <th class="text-uppercase">Friday</th>
                    <th class="text-uppercase">Saturday</th>
                </tr>
                </thead>
                <tbody>
                @foreach($monday as $day )
                        <td>
                            <span
                                class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                            <div class="margin-10px-top font-size14">{{$day->time}}</div>
                            <div class="font-size13 text-light-gray">{{$day->name}}</div>
                        </td>
                @endforeach

                @foreach($tuesday as $day )
                        <td>
                            <span
                                class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                            <div class="margin-10px-top font-size14">{{$day->time}}</div>
                            <div class="font-size13 text-light-gray">{{$day->name}}</div>
                        </td>

                @endforeach

                @foreach($wednesday as $day )

                        <td>
                            <span
                                class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                            <div class="margin-10px-top font-size14">{{$day->time}}</div>
                            <div class="font-size13 text-light-gray">{{$day->name}}</div>
                        </td>

                @endforeach

                @foreach($thursday as $day )

                        <td>
                            <span
                                class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                            <div class="margin-10px-top font-size14">{{$day->time}}</div>
                            <div class="font-size13 text-light-gray">{{$day->name}}</div>
                        </td>

                @endforeach

                @foreach($friday as $day )

                        <td>
                            <span
                                class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                            <div class="margin-10px-top font-size14">{{$day->time}}</div>
                            <div class="font-size13 text-light-gray">{{$day->name}}</div>
                        </td>

                @endforeach

                @foreach($saturday as $day )

                        <td>
                            <span
                                class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                            <div class="margin-10px-top font-size14">{{$day->time}}</div>
                            <div class="font-size13 text-light-gray">{{$day->name}}</div>
                        </td>

                @endforeach

                @foreach($sunday as $day )

                        <td>
                            <span
                                class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                            <div class="margin-10px-top font-size14">{{$day->time}}</div>
                            <div class="font-size13 text-light-gray">{{$day->name}}</div>
                        </td>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
