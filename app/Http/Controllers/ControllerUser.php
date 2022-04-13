<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerUser extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('customers.home')->with('users', $users);
    }

    public function count()
    {
        $users = User::all();
        return json_encode(count($users));
    }

    public function createForm()
    {
        return view('customers.createForm');
    }

    public function create(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $this->removeCaracter($request->cpf),
            'birth_date' => (string)$request->birth_date,
            'address' => $request->address,
            'cell' => $request->cell,
            'city' => $request->city,
            'state' => $request->state
        ];

        User::create($data);
        return redirect()->action('ControllerUser@index');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('customers.edit')->with('user', $user);
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->cpf = $this->removeCaracter($request->cpf);
        $user->birth_date = (string)$request->birth_date;
        $user->address = $request->address;
        $user->cell = $request->cell;

        if (!empty($request->city)) {

            $user->city = $request->city;
        }

        if (!empty($request->state)) {

            $user->state = $request->state;
        }

        $user->save();
        return redirect()->action('ControllerUser@index');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->action('ControllerUser@index');
    }

    private function removeCaracter($content)
    {
        $carateres = ['.', '-'];
        return str_replace($carateres, "", $content);
    }
}
