@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-3">

        <h5 class="my-4">Welcome, {{ Str::of(Auth::user()->name)->title() }} !</h5>
        <div class="list-group">
            <a class="list-group-item" href="/equipment_registration">Register Equipment</a>
            <a class="list-group-item" href="/equipment_shop">Shop</a>
        </div>

      </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="jsGrid"></div>


                </div>
            </div>
        </div>
    </div>
</div>
                    <script>
                        var clients = [
                            { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
                            { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
                            { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
                            { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
                            { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
                            { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
                            { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
                        ];

                        var countries = [
                            { Name: "", Id: 0 },
                            { Name: "Four-wheel Tractor", Id: 1 },
                            { Name: "Floating tiller", Id: 2 },
                            { Name: "Floating tiller", Id: 3 }
                        ];
                        var equipment = {!! $titles !!};
                        console.log(equipment);
                        var equipmmenttype = [
                            { Name: "Select Equipment type", Id: 0 },
                            { Name: "Four-wheel Tractor", Id: 1 },
                            { Name: "Floating tiller", Id: 2 },
                            { Name: "Cultivator", Id: 3 },
                            { Name: "Power Tiller", Id: 4 },
                            { Name: "Micro Tiller", Id: 5 }
                        ];
                        var year = [
                            { Name: "1970", Id: 0 },
                            { Name: "1971", Id: 1 },
                            { Name: "1972", Id: 2 },
                            { Name: "1973", Id: 3 },
                        ];


                        $("#jsGrid").jsGrid({
                            width: "100%",
                            height: "600px",

                            sorting: true,
                            paging: true,
                            autoload: true,

                            data: equipment,

                            fields: [
                                { name: "name", type: "text",items: equipmmenttype, valueField: "Id", textField: "Name", width: 150},
                                { name: "address", type: "text" },
                                { name: "created_at", type: "text",items: equipmmenttype, valueField: "Id", textField: "Name", width: 250 },
                            ]
                        });
                    </script>
@endsection

