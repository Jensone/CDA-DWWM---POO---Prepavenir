<?php

namespace Shop;

require_once 'Product.php';

class Book extends Product
{
    private ?string $author;
    private ?string $editor;
    private ?string $isbn;
    private ?string $category;

    // Constructeur de la classe Book

    public function __construct(
        ?string $name,
        ?string $description,
        ?float $price,
        ?string $author,
        ?string $editor,
        ?string $isbn,
        ?string $category
    )
    {
        parent::__construct($name, $description, $price);
        $this->author = $author;
        $this->editor = $editor;
        $this->isbn = $isbn;
        $this->category = $category;
    } 
}
