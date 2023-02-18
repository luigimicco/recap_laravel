<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                "ISBN" => "9788807882003",
                "title" => "Nessuno si salva da solo",
                "author" => "Margaret Mazzantini",
                "pages" => 432,
                "price" => 16.90,
                "thumb" => "https://m.media-amazon.com/images/I/A1uzf-MFG1L._AC_UL320_.jpg",
                "year" => 2015,
                "soldout" => false
            ],
            [
                "ISBN" => "9788804657649",
                "title" => "La solitudine dei numeri primi",
                "author" => "Paolo Giordano",
                "pages" => 304,
                "price" => 12.50,
                "thumb" => "https://m.media-amazon.com/images/I/81BkZWWErlL._AC_UL320_.jpg",
                "year" => 2008,
                "soldout" => false
            ],
            [
                "ISBN" => "9788804683656",
                "title" => "La ragazza del treno",
                "author" => "Paula Hawkins",
                "pages" => 384,
                "price" => 12.00,
                "thumb" => "https://m.media-amazon.com/images/I/71EAU2XO+UL._AC_UL320_.jpg",
                "year" => 2015,
                "soldout" => true
            ], [
                "ISBN" => "9788804613128",
                "title" => "Siddhartha",
                "author" => "Hermann Hesse",
                "pages" => 160,
                "price" => 8.00,
                "thumb" => "https://m.media-amazon.com/images/I/6103y5VgveL._AC_UL320_.jpg",
                "year" => 1922,
                "soldout" => false
            ],
            [
                "ISBN" => "9788806204872",
                "title" => "Il barone rampante",
                "author" => "Italo Calvino",
                "pages" => 272,
                "price" => 10.00,
                "thumb" => "https://m.media-amazon.com/images/I/31pRWozBQxL._AC_UL320_.jpg",
                "year" => 1957,
                "soldout" => false
            ],
            [
                "ISBN" => "9788804682627",
                "title" => "La verità sul caso Harry Quebert",
                "author" => "Joël Dicker",
                "pages" => 668,
                "price" => 14.00,
                "thumb" => "https://m.media-amazon.com/images/I/71hV-H1THmL._AC_UL320_.jpg",
                "year" => 2012,
                "soldout" => false
            ],
            [
                "ISBN" => "9788806229271",
                "title" => "Il deserto dei tartari",
                "author" => "Dino Buzzati",
                "pages" => 224,
                "price" => 9.50,
                "thumb" => "https://m.media-amazon.com/images/I/71ynx1q1HdL._AC_UL320_.jpg",
                "year" => 1940,
                "soldout" => true
            ],
            [
                "ISBN" => "9788806200201",
                "title" => "Il nome della rosa",
                "author" => "Umberto Eco",
                "pages" => 592,
                "price" => 15.00,
                "thumb" => "https://m.media-amazon.com/images/I/61BbTDTzvKL._AC_UL320_.jpg",
                "year" => 1980,
                "soldout" => false
            ],
            [
                "ISBN" => "9788804650787",
                "title" => "Le tre del mattino",
                "author" => "Gianrico Carofiglio",
                "pages" => 200,
                "price" => 11.00,
                "thumb" => "https://m.media-amazon.com/images/I/71uRvr6rprL._AC_UL320_.jpg",
                "year" => 2011,
                "soldout" => false
            ],
            [
                "ISBN" => "9788806249280",
                "title" => "Il giardino dei Finzi-Contini",
                "author" => "Giorgio Bassani",
                "pages" => 200,
                "price" => 10.00,
                "thumb" => "https://m.media-amazon.com/images/I/61fXTlunQEL._AC_UL320_.jpg",
                "year" => 1962,
                "soldout" => false
            ], [
                "ISBN" => "9788804667107",
                "title" => "Sostiene Pereira",
                "author" => "Antonio Tabucchi",
                "pages" => 128,
                "price" => 7.90,
                "thumb" => "https://m.media-amazon.com/images/I/71nwnmwzNpL._AC_UL320_.jpg",
                "year" => 1994,
                "soldout" => false
            ], [
                "ISBN" => "9788806229652",
                "title" => "Il pendolo di Foucault",
                "author" => "Umberto Eco",
                "pages" => 704,
                "price" => 14.50,
                "thumb" => "https://m.media-amazon.com/images/I/91Y5F7hYtdL._AC_UL320_.jpg",
                "year" => 1988,
                "soldout" => true
            ],

        ];

        foreach ($books as $book) {
            $newBook = new Book();
            $newBook->ISBN = $book['ISBN'];
            $newBook->title = $book['title'];
            $newBook->author = $book['author'];
            $newBook->pages = $book['pages'];
            $newBook->price = $book['price'];
            $newBook->thumb = $book['thumb'];
            $newBook->year = $book['year'];
            $newBook->soldout = $book['soldout'];
            $newBook->save();
        }
    }
}
