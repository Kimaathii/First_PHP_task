<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

require 'book.php';
require 'Ebook.php';
//Create some book Object
$book1 = new Book ('Fear','John Reed', 'Fiction');
$book2 = new Book ('pain kills','Thomas Steve', 'Fiction');
$book3 = new Book ('1987','George Orwell', 'Science Fiction');

//Create some Ebook objects
$ebook1 = new Ebook('The Lord of the Rings', 'J.J Thompson', 'Fantasy', true, 'PDF', '3.2 MB');
$ebook2 = new Ebook('Harry Porter', 'Rowling Thompson', 'Fantasy', true, 'EPUB', '1.7 MB');


//checkIn, checkOut or display book, @checkIn(), checkOut and displayItems
$my_book = $book1->displayItems();      //display book1 details;

$my_book = $book1->checkIn();    //checking in

$my_book = $book1->checkOut();  //checking out
print_r($my_book);



?>
</body>
</html>