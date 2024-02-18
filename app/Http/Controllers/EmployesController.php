<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();
        return view('employes.index')->with([
            'employes' => $employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create')->with([

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'registration_number' => 'required|numeric|unique:employes,registration_number',
            'fullname' => 'required',
            'depart' => 'required',
            'date_hire' => 'required|date',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);

        Employe::create($request->all());

        return redirect()->route('employes.index')->with('success', 'Employee added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($registration_number)
{
    // Find the employee by registration number
    $employe = Employe::where('registration_number', $registration_number)->first();

    // Check if employee is found
    if (!$employe) {
        return redirect()->route('employes.index')->with('error', 'Employee not found');
    }

    return view('employes.show', compact('employe'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($registration_number)//registration_number
    {
        // $employe = Employe::where('registration_number',$id)->first();
        // return view('employes.edit')->with([
        //     'employe' => $employe
        // ]);

        $employe = Employe::where('registration_number', $registration_number)->firstOrFail();
        return view('employes.edit', compact('employe'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $registration_number)
{
    $employee = Employe::where('registration_number', $registration_number)->firstOrFail();

    $this->validate($request, [
        'registration_number' => 'required|numeric|unique:employes,registration_number,' . $employee->id,
        'fullname' => 'required',
        'depart' => 'required',
        'date_hire' => 'required|date',
        'phone' => 'required',
        'address' => 'required',
        'city' => 'required',
    ]);

    $employee->update($request->all());

    return redirect()->route('employes.index')->with('success', 'Employee updated successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($registration_number)
    {
        $employe = Employe::where('registration_number', $registration_number)->firstOrFail();

        // Delete the employee record
        $employe->delete();

        return redirect()->route('employes.index');
    }


    public function vacationRequest($registration_number)
    {
        $employe = Employe::where('registration_number', $registration_number)->first();
        return view('employes.vacation-request')->with([
            'employe' => $employe
        ]);
    }

    public function CertificateRequest($registration_number)
    {
        $employe = Employe::where('registration_number', $registration_number)->first();
        return view('employes.Certificate-request')->with([
            'employe' => $employe
        ]);
    }
}
