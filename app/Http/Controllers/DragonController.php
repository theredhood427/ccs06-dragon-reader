<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DragonController extends Controller
{
    const BOOK_NAME='Dragons and Dragon Lore';
    const AUTHOR_YEAR='Ernest Ingersoll (1928)';
    const CHAPTERS= 15;
    public function index()
    {
        return view('index', [
            'book_name' => static::BOOK_NAME,
            'author_year' => static::AUTHOR_YEAR, 
            'num_of_chapters' => static::CHAPTERS
        ]);
    }

    public function readByChapter($chapter_number)
    {
        return view('read-chapt', [
            'book_name' => static::BOOK_NAME,
            'author_year' => static::AUTHOR_YEAR, 
            'num_of_chapters' => static::CHAPTERS,
            'chapter_number' => $chapter_number
        ]);
    }

    public function readAllChapters()
    {
        return view('all-chapters', [
            'book_name' => static::BOOK_NAME,
            'author_year' => static::AUTHOR_YEAR, 
            'num_of_chapters' => static::CHAPTERS
        ]);  
    }
}
