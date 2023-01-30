<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo; 


class TodoApiControllers extends Controller
{
    public function index()
    {
     $data = Todo::all();
            return TodoApi::createApi(200, 'success', $data);
     
     }

     public function create(Request $request)
     {
             $validated = Validator::make($request->all(), [
                 'title' => 'required',
                 'description' => 'required',
             ]);
             if($validated->fails()){
                 return $this->responseValidation('Failed!', $validated->errors());
             }
             
             return TodoRepository::createTodo([
                 "title" => $request->title,
                 "description" => $request->description,
                 "created_by" => 1,
 
             ]);
     }
     public function update(Request $request, $id)
     {
             $validation = Validator::make($request->all(), [
                 'title' => 'required',
                 'description' => 'required',
             ]);
             if($validation->fails()){
                 return $this->responseValidation('Failed!', $validation->errors());
             }
 
             $udpate = TodoRepository::updateTodo($id);
             return TodoRepository::updateTodo($id);    
     }
     public function delete($id)    
     {
         return TodoRepository::deleteTodo($id);
     }
 }

    


