<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        if ($authors->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!",

            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $authors
        ], 200);
            }

        public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'name' => 'required|string|max:150|unique:authors,name',
                    'bio' => 'required|nullable|string', 
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => $validator->errors()
                    ], 422);
                }

                $author = Author::create([
                    'name' => $request->name,
                    'bio' => $request->bio,
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Author added successfully!',
                    'data' => $author
                ], 201);
            }


            public function show(string $id)
            {
                $author = Author::find($id);

                if (!$author) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Author not found'
                    ], 404);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Get detail author resource',
                    'data' => $author
                ], 200);
            }

            public function update(string $id, Request $request)
            {
                $author = Author::find($id);

                if (!$author) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Resource not found'
                    ], 404);
                }

                $validator = Validator::make($request->all(), [
                    'name'        => 'required|string|max:100',
                    'description' => 'nullable|string',
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => $validator->errors()
                    ], 422);
                }

                $data = [
                    'name'        => $request->name,
                    'description' => $request->description,
                ];

                $author->update($data);

                return response()->json([
                    'success' => true,
                    'message' => 'Resource updated successfully!',
                    'data'    => $author
                ], 200);
            }

        public function destroy(string $id) {
        $author = Author::find($id);

        if (!$author) {
        return response()->json([
            'success' => false,
            'message' => 'Resource not found'
        ], 404);
    }

        $author->delete();

        return response()->json([
                'success' => true,
                'message' => 'Resource deleted successfully'
            ], 200); 
         }

}

