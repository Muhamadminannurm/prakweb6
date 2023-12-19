<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSmartphoneCategoryRequest;
use App\Http\Requests\UpdateSmartphoneCategoryRequest; 
use App\Http\Resources\SmartphoneCategoryCollection; 
use App\Http\Resources\SmartphoneCategoryResource; 
use App\Models\SmartphoneCategory;
use Exception;
use Illuminate\Http\Request;

class SmartphoneCategoryController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
    try {

        $queryData = SmartphoneCategory::all();
        $formattedDatas = new SmartphoneCategoryCollection($queryData); 
        return response()->json([
        "message" => "success",
        "data" => $formattedDatas
        ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

/**
* Store a newly created resource in storage.
*/

public function store(StoreSmartphoneCategoryRequest $request)
{
    $validatedRequest = $request->validated();
    try {
        $queryData = SmartphoneCategory::create($validatedRequest); 
        $formattedDatas = new SmartphoneCategoryResource($queryData); 
        return response()->json([
        "message" => "success",
        "data" =>$formattedDatas
        ], 200);
    } catch (Exception $e) {
        return response()->json($e->getMessage(), 400);
    }
}

/**
* Display the specified resource. */
public function show(string $id)
{
    try {
        $queryData = SmartphoneCategory:: findOrFail($id);
        $formattedDatas = new SmartphoneCategoryResource($queryData); 
        return response()->json([
        "message" => "success",
        "data" => $formattedDatas
        ], 200);
    } catch (Exception $e) {
        return response()->json($e->getMessage(), 400);
    }

}

/**
* Update the specified resource in storage.
*/
    public function update(UpdateSmartphoneCategoryRequest $request, string $id)
    {
    $validatedRequest  = $request->validated();
    try {
        $queryData = SmartphoneCategory::findOrFail($id);
        $queryData->update($validatedRequest);
        $queryData->save();
        $formattedDatas = new SmartphoneCategoryResource($queryData); 
        return response()->json([
            "message" => "success", 
            "data" => $formattedDatas
        ], 200);
        } catch (Exception $e) {
        return response()->json($e->getMessage(), 400);
        }
    }
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
    {
        try {
        $queryData = SmartphoneCategory::findOrFail($id);
        $queryData -> delete();
        $formattedDatas = new SmartphoneCategoryResource($queryData); 
        return response()->json([
        "message" => "success", 
        "data" => $formattedDatas
        ], 200);
        } catch (Exception $e) {
        return  response()->json($e->getMessage(), 400);
        }
    }





}
