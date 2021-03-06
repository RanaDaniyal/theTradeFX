<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveAccount;
use App\User;

class liveAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.live_account');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->status = 1;
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $liveAccount = new LiveAccount();
        $liveAccount->currency = $request->input('currency');
        $liveAccount->user_id = $user->id;
        $liveAccount->account_type = $request->input('account_type');
        $liveAccount->leverage = $request->input('leverage');
        $liveAccount->name = $request->input('name');
        $liveAccount->user_name = $request->input('user_name');
        $liveAccount->email = $request->input('email');
        $liveAccount->address = $request->input('address');
        $liveAccount->city = $request->input('city');
        $liveAccount->country = $request->input('country');
        $liveAccount->phone_number = $request->input('phone_number');
        $liveAccount->password = bcrypt($request->input('password'));
        $liveAccount->save();

        return redirect()->action('LiveDashboardController@dashboardView');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
