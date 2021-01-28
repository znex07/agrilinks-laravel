<!DOCTYPE html>
<html>
<head>
    <title>AgriLinks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">

    <style>

        html, button, input, select, textarea,
        .pure-g [class *= "pure-u"] {
            /* Set your content font stack here: */
            font-family: Arial, Helvetica, sans-serif;
        }
        body{

        }
        .header{
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
        }
        .items {
        display: flex;
        justify-content: space-between;
        }
        .container {
            column-width: 300px;
            column-gap: 20px;
        }
        </style>
</head>
<body>





                    {{-- City/Municipality of
                        CITY MUNICIPAL AGRICULTURAL AND FISHERIES MACHINERY AND EQUIPMENT ILLUSTRATION OF OWNERSHIP APPLICATION FORM --}}


                        <div class="header">
                                <b><h5>Registration Application Form</h5></b>
                                <h5> Republic of the Philippines </h5>
                        </div>



                         <div class="container">

                     </span>
                      </div>
                      <div class="column">
                        <label><b>DATE OF APPLICATION</b><p>{{ $date }}</p></label>
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
                                <br><b>NAME</b> <label> {{ Str::of(Auth::user()->name)->title() }}</label>
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
                          MOBILE NO:
                    TELEPHONE NO:
                    POSITION OF REPRESENTATIVE
            </div>
                </div>
            <hr>
            <input type="hidden" id="list_equipment" name="list_equipment" value="eq" />

            <label for="exampleFormControlSelect1"><b>AGRICULTURE AND FISHERIES MACHINERY AND EQUIPMENT FOR REGISTRATION</b></label>
            <hr>
                <div class=" col-12">

                  <div id="jsGrid"></div>
                </div>

</body>
</html>
