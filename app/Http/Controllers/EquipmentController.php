<?php

namespace App\Http\Controllers;

use App\Models\RegistrationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eq = new RegistrationModel;
        $eq->name = $request->name;
        $eq->address = $request->address;
        $eq->reg_type = $request->reg_type;
        $eq->gender = $request->gender;
        $eq->bday = $request->bday;
        $eq->owrep = $request->owrep;
        $eq->nameorg = $request->nameorg;
        $eq->list_equipment = $request->list_equipment;
        $eq->save();

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationModel  $registrationModel
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationModel $registrationModel)
    {

        DB::table('equipment_registration')->orderBy('id')->chunk(100, function ($users) {
            foreach ($users as $user) {
                echo $user->name;
            }
        });
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrationModel  $registrationModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrationModel $registrationModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrationModel  $registrationModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrationModel $registrationModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationModel  $registrationModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationModel $registrationModel)
    {
        //
    }
}
