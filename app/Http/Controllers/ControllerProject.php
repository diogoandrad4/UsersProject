<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUser;
use Illuminate\Http\Request;
use App\ModelProject;

class ControllerProject extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = ModelProject::all();
        return view('index', compact('users'));
        // return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateUser  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateUser $request)
    {
        // dd($request->all()); // Retorna todos..
        // dd($request->only('name', 'email')); // Retorna apenas escolhidos..
        // dd($request->has('name')); // Verifica se existe input escolhido..
        // dd($request->input('name', 'default')); // Retorna valor default caso input inexistente..
        // dd($request->except('_token')); // Pegar inputs exceto..
        // dd($request->file('photo')->isValid()); // Verifica se o arquivo é valido..
        // dd($request->file('photo')->store('files')); // Amazena o aquivo dentro da storage/app..
        // $nameFile = 'arquivo' . '.' . $request->photo->extension();
        // dd($request->file('photo')->storeAs('files', '$nameFile')); // Mudar nome do arquivo quando for armazenado..
        $user = new ModelProject;
        $user->fill($request->all());
        // $user->name = $request->name;
        // $user->role = $request->role;
        // $user->email = $request->email;
        /*
        $request->validate([
            'name' => 'required|min:3|max:255',
            'role' => 'required',
            'email' => 'required',
        ]);
        */
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = ModelProject::findOrFail($id);
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = ModelProject::findOrFail($id);
        return view('update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = ModelProject::findOrFail($id);
        $user->fill($request->all());
        // $user->name = $request->name;
        // $user->role = $request->role;
        // $user->email = $request->email;
        /*
        $request->validate([
            'name' => 'required|min:3|max:255',
            'role' => 'required',
            'email' => 'required',
        ]);
        */
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = ModelProject::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
