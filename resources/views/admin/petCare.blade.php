@extends('admin.layout')
@section('content')


    <div class="col-sm-9 table-responsive" id="alarmTableContainer">

        <table class="table table-sm table-hover text-center" id="alarmTable">
            <thead id="alarmTableHeader">
            <tr><h2 id="alarmTitle"><i class="fas fa-paw" style="padding: 5px;"></i>Pets<a href="#"><i id="addGuest" class="fas fa-user-plus" style="padding-left: 80%; color: white; z-index: 1;"></i></a></h2></tr>
            <tr>
                <th scope="col">Guest Id</th>
                <th scope="col">Bedroom Nr</th>
                <th scope="col">Day and Time</th>
                <th scope="col">Water</th>
                <th scope="col">Standard Food</th>
                <th scope="col">Premium Food</th>
                <th scope="col">Snacks</th>
                <th scope="col" colspan="3">Operations</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>311</td>
                <td>2018-05-29 7:00:00</td>
                <td>X</td>
                <td>X</td>
                <td></td>
                <td></td>
                <td><button class="alarmAddBtn"><i class="far fa-eye"></i></button></td>
                <td><button class="alarmEditBtn"><i class="fas fa-edit"></i></button></td>
                <td><button class="alarmDeleteBtn"><i class="fas fa-times"></i></button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>209</td>
                <td>2018-05-29 5:30:00</td>
                <td>X</td>
                <td></td>
                <td>X</td>
                <td></td>
                <td><button class="alarmAddBtn"><i class="far fa-eye"></i></button></td>
                <td><button class="alarmEditBtn"><i class="fas fa-edit"></i></button></td>
                <td><button class="alarmDeleteBtn"><i class="fas fa-times"></i></button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>207</td>
                <td>2018-05-30 5:00:00</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td><button class="alarmAddBtn"><i class="far fa-eye"></i></button></td>
                <td><button class="alarmEditBtn"><i class="fas fa-edit"></i></button></td>
                <td><button class="alarmDeleteBtn"><i class="fas fa-times"></i></button></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>305</td>
                <td>2018-05-29 9:00:00</td>
                <td>X</td>
                <td>X</td>
                <td></td>
                <td></td>
                <td><button class="alarmAddBtn"><i class="far fa-eye"></i></button></td>
                <td><button class="alarmEditBtn"><i class="fas fa-edit"></i></button></td>
                <td><button class="alarmDeleteBtn"><i class="fas fa-times"></i></button></td>
            </tr>
            </tbody>
        </table>
    </div>


@endsection