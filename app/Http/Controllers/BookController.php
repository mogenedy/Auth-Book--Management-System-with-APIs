<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  public function index(){
    $books=Book::all();
    return response()->json([

        'books'=>$books,
    ],201);
    {


  }

  }


  public function store(Request $request){
    
    
    
    $book=Book::create($request->all());
    return response()->json([
      'message'=>'Book added successfully',
      'book'=>$book
    ],201);
  }

  

  public function show($id){

    $book=Book::find($id);
    if(!empty($book)){
      return response()->json([
      'book'=>$book,
      'message'=>'succedded'
    ],200); 
    }else{
      return response()->json([
        'message'=>'book not found'
      ],404);
    }
    
    
     
  }

  
public function update($id,Request $request){

{
    $book = Book::find($id);

    if ($book) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
        ]);

        $book->name = $validated['name'];
        $book->author = $validated['author'];
        $book->published_at = $validated['published_at'];
        $book->save();

        return response()->json([
            'message' => 'Book updated successfully',
            'book' => $book
        ], 200);
    } else {
        return response()->json([
            'message' => 'Book not found'
        ], 404);
    }
}

}


 public function destroy($id){

  $book=Book::find($id);
  if(!empty($book)){
    $book->delete();
    return response()->json([
      'message'=>'Book deleted successfully',
      'book'=>$book
    ],200);
  }else{
    return response()->json([
      'message'=>'book not found'
    ],404);
  }
 }

}
