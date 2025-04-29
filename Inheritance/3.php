<?php
// Базовый класс Material
class Material {
    protected $title;
    protected $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
}

// Производный класс Book
class Book extends Material {
    private $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }

    public function getPages() {
        return $this->pages;
    }
}

// Производный класс Article
class Article extends Material {
}

// Производный класс Video
class Video extends Material {
    private $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }

    public function getDuration() {
        return $this->duration;
    }
}
$book = new Book("PHP для начинающих", "Алексей", 300);
$video = new Video("PHP разработка", "Сергей", "2 часа");

echo $book->getTitle() . " написана " . $book->getAuthor() . " и содержит " . $book->getPages() . " страниц." . PHP_EOL;
echo $video->getTitle() . " создан " . $video->getAuthor() . " и длится " . $video->getDuration() . "." . PHP_EOL;
?>