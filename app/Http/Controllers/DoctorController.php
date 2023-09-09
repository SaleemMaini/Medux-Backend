<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $WH = Doctor::find(1);

        $workingHours = $WH->workingHours;

        $workingHours['key'] = 'value';

        $WH->workingHours = $workingHours;

        $WH->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add_patient(Request $request, Doctor $doctor)
    {
        $doctor->patients()->syncWithoutDetaching($request->patients);
        return 'attached';
    }

    public function create()
    {
        $WH = Doctor::find(1);

        $workingHours = $WH->workingHours;

        $workingHours['key'] = 'value';

        $WH->workingHours = $workingHours;

        $WH->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $WH = Doctor::find(1);

        $workingHours = $WH->workingHours;

        $workingHours['key'] = 'value';

        $WH->workingHours = $workingHours;

        $WH->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $patient)
    {
        $WH = Doctor::find(1);

        $workingHours = $WH->workingHours;

        $workingHours['key'] = 'value';

        $WH->workingHours = $workingHours;

        $WH->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $patient)
    {
        $WH = Doctor::find(1);

        $workingHours = $WH->workingHours;

        $workingHours['key'] = 'value';

        $WH->workingHours = $workingHours;

        $WH->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $patient)
    {
        $WH = Doctor::find(1);

        $workingHours = $WH->workingHours;

        $workingHours['key'] = 'value';

        $WH->workingHours = $workingHours;

        $WH->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $patient)
    {
        //
    }
}
