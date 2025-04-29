<?php

trait Timestampable {
    private $createdAt;
    private $updatedAt;

    public function setCreatedAt($dateTime) {
        $this->createdAt = $dateTime;
    }

    public function setUpdatedAt($dateTime) {
        $this->updatedAt = $dateTime;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

class Post {
    use Timestampable;

    public function __construct() {
        $this->setCreatedAt(date('Y-m-d H:i:s'));
    }

    public function update() {
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
    }
}


$post = new Post();
echo "Дата создания поста: " . $post->getCreatedAt() . "<br>";

$post->update();
echo "Дата обновления поста: " . $post->getUpdatedAt();
?>