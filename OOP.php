<?php
class Book {
    private $title;
    private $availableCopies;
    
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
    
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            echo "Book '{$this->title}' borrowed successfully. Available Copies: {$this->availableCopies}\n";
        } else {
            echo "Sorry, '{$this->title}' is not available for borrowing.\n";
        }
    }
    
    public function returnBook() {
        $this->availableCopies++;
        echo "Book '{$this->title}' returned successfully. Available Copies: {$this->availableCopies}\n";
    }
}

class Member {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function borrowBook($book) {
        echo "{$this->name} is borrowing '{$book->getTitle()}'.\n";
        $book->borrowBook();
    }
    
    public function returnBook($book) {
        echo "{$this->name} is returning '{$book->getTitle()}'.\n";
        $book->returnBook();
    }
}

// Create books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
?>
