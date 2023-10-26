<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;

class PersonsController extends Controller
{
    public function index()
    {
        $persons = Persons::all();
        return view('persons.index', ['persons' => $persons]);
    }
    public function create()
    {
        return view('persons.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required',
        ]);
        $newPerson = Persons::create($data);

        return redirect(route('persons.index'));
    }

    public function edit(Persons $person)
    {
        return view('persons.edit', ['person' => $person]);
    }

    public function update(Persons $person, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required',
        ]);
        $person->update($data);

        return redirect(route('persons.index'))->with('success', 'Person updated successfully');
    }

    public function destroy(Persons $person)
    {
        $person->delete();
        return redirect(route('persons.index'))->with('success', 'Person deleted successfully');
    }
}
