<?php
require_once 'book.php';
require_once 'interface.php';
//subclass of the parent class @book

class Ebook extends Book
{
    //additional properties
    private $file_Format;
    private $file_size;


    public function __construct($book_title, $author, $genre,$available_status = true, $file_Format, $file_size)
    {
        parent::__construct($book_title,$author, $genre, $available_status);
        $this->file_Format = $file_Format;
        $this->file_size = $file_size;
    }
     public function getFileFormat(){
        return $this->file_Format;
     }
     public function getFileSize(){
        return $this->file_size;
     }
 
}