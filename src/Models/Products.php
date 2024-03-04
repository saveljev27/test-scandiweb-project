<?php

namespace App\Models;

class Products
{
    private string $sku;
    private string $price;
    private string $name;
    private ?int $size;
    private ?int $weight;
    private ?int $height;
    private ?int $width;
    private ?int $length;

    public function  getSku(): string
    {
        return $this->sku;
    }
    public function setSku($sku): void
    {
        $this->sku = $sku;
    }
    public function  getPrice(): string
    {
        return $this->price;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    public function  getName(): string
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function  getSize(): ?int
    {
        return $this->size;
    }
    public function setSize(?int $size): void
    {
        $this->size = $size;
    }
    public function  getWeight(): ?int
    {
        return $this->weight;
    }
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }
    public function  getHeight(): ?int
    {
        return $this->height;
    }
    public function setHeight(?int $height): void
    {
        $this->height = $height;
    }
    public function  getWidth(): ?int
    {
        return $this->width;
    }
    public function setWidth(?int $width): void
    {
        $this->width = $width;
    }
    public function  getLength(): ?int
    {
        return $this->length;
    }
    public function setLength(?int $length): void
    {
        $this->length = $length;
    }
}
