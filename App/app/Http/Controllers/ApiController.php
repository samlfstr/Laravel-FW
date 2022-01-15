<?php

namespace App\Http\Controllers;

use App\Models\api;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function index()
    {
        return api::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param api $api
     * @return Response
     */
    public function store(Request $request, api $api)
    {
        $validator = Validator::make(request()->all(), [
            'first_name' => 'required',
            'name' => 'required',
            'age' => 'required'
        ]);

        // return array of errors to client with status code 400
        if ($validator->fails()) {
            return response($validator->messages()->toArray(), 400);
        }

        return $api::create([
            'first_name' => $request['first_name'],
            'name' => $request['name'],
            'age' => $request['age']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param api $api
     * @return api[]|Collection
     */
    public function show($id, api $api)
    {
        return $api::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return int
     */
    public function update(Request $request, $id)
    {
        $usr = api::find($id);
        $usr->update($request->all());
        return $usr;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return false
     */
    public function delete($id)
    {
        $usr = api::destroy($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return false
     */
    public function search($name)
    {
        // slect api where name like '%asd%';
        return api::where('name', 'like', '%' . $name . '%')->get();
    }
}
