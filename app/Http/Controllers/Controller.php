<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookListResource;
use App\Models\Book;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function bookIndex()
    {
        // $bookList = Book::with(['authors', 'categories'])->get();
        $bookList = Book::query()
        ->with(['author', 'category', 'ratings'])
        ->paginate(10);
        // ->get();


        // return JsonResource::collection($bookList);
        // $bookListResource = BookListResource::collection($bookListQuery);
        // $bookList = $bookListResource;
        return view('bookList', ['bookList' => $bookList]);


    }
}
