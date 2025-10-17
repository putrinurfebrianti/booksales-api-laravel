<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        if ($books->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!",
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $books
        ], 200);
    }

    public function store(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover_photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'genre_id' => 'required|exists:genres,id',
            'author_id' => 'required|exists:authors,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $image = $request->file('cover_photo');
        $image->store('books', 'public');
        
        $book = Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'cover_photo' => $image->hashName(),
            'genre_id' => $request->genre_id,
            'author_id' => $request->author_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Resource added successfully!',
            'data' => $book
        ], 201);
    }

        public function show(string $id){
        $book = Book::find($id);

        if (!$book) {
        return response()->json([
            'success' => false,
            'message' => 'Resource not found'
        ], 404);
}

        return response()->json([
            'success' => true,
            'message' => 'Get detail resource',
            'data' => $book
        ], 200);
     }


     public function update(string $id, Request $request)
        {
            
            $book = Book::find($id);

            if (!$book) {
                return response()->json([
                    'success' => false,
                    'message' => 'Resource not found'
                ], 404);
            }

        $validator = Validator::make($request->all(), [
        'title'       => 'required|string|max:100',
        'description' => 'required|string',
        'price'       => 'required|numeric',
        'stock'       => 'required|integer',
        'cover_photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        'genre_id'    => 'required|exists:genres,id',
        'author_id'   => 'required|exists:authors,id'
         ]);

         if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $data = [
        'title'       => $request->title,
        'description' => $request->description,
        'price'       => $request->price,
        'stock'       => $request->stock,
        'genre_id'    => $request->genre_id,
        'author_id'   => $request->author_id,
    ];

        if ($request->hasFile('cover_photo')) {
        $image = $request->file('cover_photo');
        $image->store('books', 'public');

        if ($book->cover_photo) {
            Storage::disk('public')->delete('books/' . $book->cover_photo);
        }

        $data['cover_photo'] = $image->hashName();

        }

        $book->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Resource updated successfully!',
            'data'    => $book
        ], 200);
        
    }

     public function destroy(string $id) {
        $book = Book::find($id);

        if (!$book) {
        return response()->json([
            'success' => false,
            'message' => 'Resource not found'
        ], 404);
    }

        if ($book->cover_photo) {
        Storage::disk('public')->delete('books/' . $book->cover_photo);
}

        $book->delete();

        return response()->json([
                'success' => true,
                'message' => 'Resource deleted successfully'
            ], 200); 
    }
}