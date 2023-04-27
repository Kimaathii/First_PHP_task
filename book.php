<?php
require_once 'Libraryitems.php';
require_once 'interface.php';
//book class for the library management system

class Book extends LibraryItems  implements Borrowable
{
    //declaring book properties
    protected $book_title;
    protected $author;
    protected $genre;
    protected $available_status;
    //constructor method to initiate class @Book properties
    public function __construct($book_title, $author, $genre,$available_status = true)
    {
        $this->book_title = $book_title;
        $this->author = $author;
        $this->genre = $genre;
        $this->available_status = $available_status;
    }
    public function  getTitle()
    {
         return $this->book_title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function isAvailiable()
    {
        return $this->available_status;
    }
    public function checkOut()
    {
        if($this->available_status)
        {
            $this->available_status = false;
            echo "Book checked out successfully";
        }else{
            throw new Exception("This book is Already checked Out");
            
        }
    }
    public function checkIn()
    {
        if(!$this->available_status)
        {
            $this->available_status = true;
            echo "Book checked in successfully";
        }else{
            throw new Exception("This book is not checked Out");
            
        }
    }
    public function displayItems()
    {
      echo "Title:" . $this->getTitle()."<br>";
      echo "Author:" . $this->getAuthor()."<br>";
      echo "Genre:" . $this->getGenre()."<br>";
      echo "Availability:" . ($this->isAvailiable()?"Available":"Not Available")."<br>";
    }

   
}