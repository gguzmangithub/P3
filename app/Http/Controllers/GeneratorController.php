<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('generator.index');
    }


    public function postIndex(Request $request)
    {
       $this->validate($request, [
        'number_of_paragraphs' => ('required|numeric|min:1|max:20'),
        ]);
        $number = $request->input('number_of_paragraphs');
       $generator = new \Badcow\LoremIpsum\Generator();
       $paragraphs = $generator->getParagraphs($number);
       echo implode('<p>', $paragraphs);
      }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($paragraphs)
    {
  return view('generator.index')->with('number_of_paragraphs',$paragraphs);
      }
}
