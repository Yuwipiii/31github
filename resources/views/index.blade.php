@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                <tr class="bg-light-gray">
                    <th class="text-uppercase">Time
                    </th>
                    <th class="text-uppercase">Monday</th>
                    <th class="text-uppercase">Tuesday</th>
                    <th class="text-uppercase">Wednesday</th>
                    <th class="text-uppercase">Thursday</th>
                    <th class="text-uppercase">Friday</th>
                    <th class="text-uppercase">Saturday</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="align-middle">09:00am</td>
                    <td>
                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                    </td>
                    <td>
                        <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                        <div class="font-size13 text-light-gray">Marta Healy</div>
                    </td>

                    <td>
                        <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                    </td>
                    <td>
                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Dance</span>
                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                    </td>
                    <td>
                        <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>
                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                        <div class="font-size13 text-light-gray">Kate Alley</div>
                    </td>
                    <td>
                        <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                        <div class="font-size13 text-light-gray">James Smith</div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
