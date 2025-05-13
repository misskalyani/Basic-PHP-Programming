<html>
	<!--
			Q. 1) Create a XML file which gives details of books available in “Bookstore” from following categories. 
			1) Yoga 
			2) Story 
			3) Technical 
			and elements in each category are in the following format 
			<Book> 
			<Book_Title>--------------------- </Book_Title> 
			<Book_Author> ------------------- </Book_Author> 
			<Book_Price> -------------------- </Book_Price> 
			</Book> 
			Save the file as “Bookcategory.xml” 
	--!>
</html>

<?php
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><Bookstore></Bookstore>');

$categories = [
    'Yoga' => [
        ['Book_Title' => 'The Art of Yoga', 'Book_Author' => 'John Doe', 'Book_Price' => '15.99'],
        ['Book_Title' => 'Yoga for Beginners', 'Book_Author' => 'Jane Smith', 'Book_Price' => '12.50']
    ],
    'Story' => [
        ['Book_Title' => 'The Great Adventure', 'Book_Author' => 'Emily Carter', 'Book_Price' => '10.99'],
        ['Book_Title' => 'Mystery of the Night', 'Book_Author' => 'Daniel Brown', 'Book_Price' => '9.75']
    ],
    'Technical' => [
        ['Book_Title' => 'Learning PHP', 'Book_Author' => 'David Green', 'Book_Price' => '20.00'],
        ['Book_Title' => 'Mastering Python', 'Book_Author' => 'Sara White', 'Book_Price' => '25.99']
    ]
];

foreach ($categories as $category => $books) {
    $categoryNode = $xml->addChild($category);
    foreach ($books as $book) {
        $bookNode = $categoryNode->addChild('Book');
        $bookNode->addChild('Book_Title', $book['Book_Title']);
        $bookNode->addChild('Book_Author', $book['Book_Author']);
        $bookNode->addChild('Book_Price', $book['Book_Price']);
    }
}

$xml->asXML('Bookcategory.xml');

echo "XML file 'Bookcategory.xml' created successfully!";
?>
