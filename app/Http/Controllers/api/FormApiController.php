<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormApiController extends Controller
{
    public function saveFormData(Request $request)
    {
        $userIp = request()->ip();

   

         // Get JSON data from the request body
         $jsonData = $request->json()->all();

         // Validate each item in the JSON data
         foreach ($jsonData as $data) {
             $validator = Validator::make($data, [
                 'id' => 'required|string',
                 'type' => 'required|string',
                 'title' => 'nullable|string',
                 'description' => 'nullable|string',
                 'maxCharactersEnabled' => 'required|boolean',
                 'maxCharacters' => 'required|integer',
                 'settings' => 'required|array',
             ]);
 
             if ($validator->fails()) {
                 return response()->json(['error' => $validator->errors()], 400);
             }
             $data['user_ip'] = $userIp;
             Forms::create($data);
         }
 
         return response()->json(['message' => 'Data saved successfully'], 200);
     }
    
}
