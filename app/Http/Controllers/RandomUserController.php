<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('randomuser.ruser');
    }


    public function postIndex(Request $request)
    {
       $this->validate($request, [
        'number_of_users' => ('required|numeric|min:1|max:20'),
        ]);
        $number = $request->input('number_of_users');
        $faker = \Faker\Factory::create();
        for ($i=0; $i < $number; $i++) {
        echo $faker->name." - Address: ".$faker->address,'<br>';
         }
      }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($faker)
    {
 return view('randomuser.ruser')->with('number_of_users',$faker);
      }
}
