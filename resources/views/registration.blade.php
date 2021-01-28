@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">


    <div class="jumbotron col-11" >
     @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form action="/save_equipment" method="POST" class="needs-validation" novalidate>
        {{ csrf_field() }}
        <div class="form-group row">
        <div class="col-12 text-center">
            <b><h4>Registration Application Form</h4></b>
            Republic of the Philippines
            <div class="col-12 row center-block">
            {{-- Province of <span><input type="text" class="form-control form-control-sm " name="province"></span>
            City/Municipality of <span><input type="text" class="form-control form-control-sm col-xs-2" name="city"></span> --}}
            </div>
            <hr>
        </div>
        <div class="card col-12">
        <div class="card-body">
        <div class="container">
            <div class="row justify-content-md-center">
              <div class="col text-center col-lg-6">
                <span class="">
                CITY MUNICIPAL AGRICULTURAL AND FISHERIES MACHINERY AND EQUIPMENT ILLUSTRATION OF OWNERSHIP APPLICATION FORM
                </span>
              </div>
              <div class="col col-lg-6">
                <label><b>DATE OF APPLICATION</b>(mm/dd/yyyy)</label>
                    <input class="form-control" name="bdate" type="date" value="<?php echo date('Y-m-d') ?>" id="example-date-input"></td>

              </div>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="card col-12">
            <div class="form-check card-body">
                <b> TYPE OF REGISTRATION </b> |
                <input type="radio" id="reg_type1" value="Initial Registration" name="reg_type"  checked="checked"  class="custom-radio">
                <label id="init_reg">Initial Registration</label>
                <input type="radio" id="reg_type2" value="Issuance of Amended Certificate of Registration (CAFMER)" name="reg_type" class="custom-checkbox">
                <label id="init_reg">Issuance of Amended Certificate of Registration (CAFMER) </label>
            </div>
        </div>
            <div class="card col-12">

                <div class="row card-body">
                    <div class="col-6">
                    <div class="form-group">
                        <div class="form-check">
                        <input type="checkbox" id="init_reg" value="owner" name="owrep" class="custom-checkbox" checked="checked" >
                        <label id="init_reg"><small>OWNER</small></label>
                        <input type="checkbox" id="init_reg" value="represntative" name="owrep" class="custom-checkbox" >
                        <label id="init_reg"><small>REPRESENTATIVE OF ORGANIZATION</small></label>
                        <div class="invalid-feedback">
                            You must check this before submitting.
                          </div>
                        <br><b>NAME</b> (Surname, First Name, Middle name, Ext)<input type="text" value="{{ Str::of(Auth::user()->name)->title() }}" class="form-control form-control-sm" name="name" required>
                </div>
                        </div>
                    </div>

        <div class="col-6">
        <b>ADDRESS OF OWNER/OFFICE/REPRESENTATIVE</b>
        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>

    </div>
        </div>
        <div class="card col-12">
            <div class="card-body">

        <div class="row">
            <div class="col-4">
            <b>BIRTHDATE OF OWNER/REPRESENTATIVE</b>
                  <input class="form-control form-control-sm" name="bday" type="date" value="1950-01-01" id="example-date-input" required>
            </div>
                <div class="col-4">
                    <b>NAME OF ORGANIZATION/OFFICE</b>
                    <input type="text" class="form-control form-control-sm" name="nameorg" required>
            </div>
            <div class="col-4">
                <b>GENDER</b>
                <select class="form-control form-control-sm" name="gender" id="gender-control" required>
                  <option>Male</option>
                  <option>Female</option>
                </select>
            </div>
        </div></div>
                  {{-- MOBILE NO:
            TELEPHONE NO:
            POSITION OF REPRESENTATIVE --}}
    </div>
        </div>
    <hr>
    <input type="hidden" id="list_equipment" name="list_equipment" value="eq" />

    <label for="exampleFormControlSelect1"><b>AGRICULTURE AND FISHERIES MACHINERY AND EQUIPMENT FOR REGISTRATION</b></label>
    <hr>
        <div class=" col-12">

          <div id="jsGrid"></div>
        </div>
<div class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
    <div class="col-6">
            <button type="button" class="btn btn-success btn-block" onclick="window.location='{{ route("generate-pdf") }}'">Print</button>

    </div>
</div>
</form>
</div>
<script>
    var clients = [
        { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
        // { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
        // { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
        // { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
        // { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
        // { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
        // { "MACHINERY EQUIPMENT TYPE": 1, "CAPACITY": 25,"ATTACHMENTS/ACCESSORIES":1, "SUPPLIER BRANCH ADDRESS": "Ap #897-1459 Quam Avenue", "YEAR ACQUIRED": 1970 },
    ];

    var countries = [
        { Name: "", Id: 0 },
        { Name: "Four-wheel Tractor", Id: 1 },
        { Name: "Floating tiller", Id: 2 },
        { Name: "Floating tiller", Id: 3 }
    ];

    var equipmmenttype = {!! $machine_type !!};
    var year = [
        { Name: "1970", Id: 0 },
        { Name: "1971", Id: 1 },
        { Name: "1972", Id: 2 },
        { Name: "1973", Id: 3 },
    ];


    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",

        inserting: true,
        editing: true,
        sorting: true,
        paging: true,

        data: clients,

        fields: [
            { type: "control",width:60 },
            { name: "MACHINERY EQUIPMENT TYPE", type: "select",items: equipmmenttype, valueField: "id", textField: "machine_name", width: 150},
            { name: "CAPACITY", type: "number", width: 80 },
            { name: "ATTACHMENTS/ACCESSORIES", type: "select",items: equipmmenttype, valueField: "id", textField: "machine_name", width: 250 },
            { name: "NAME OF SUPPLIER", type: "select", items: countries, valueField: "Id", textField: "Name" },
            { name: "SUPPLIER BRANCH ADDRESS", type: "text", width:300 },
            { name: "YEAR ACQUIRED", type: "number", width:80 },
            { name: "BRAND", type: "select", items: countries, valueField: "Id", textField: "Name" },
            { name: "SERIAL NUMBER", type: "select", items: countries, valueField: "Id", textField: "Name" },
            { name: "MODE OF ACQUISITION", type: "select", items: countries, valueField: "Id", textField: "Name" },
        ]
    });
    document.getElementById('list_equipment').value = JSON.stringify(clients);
    (function() {
  'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
</script>

@endsection

