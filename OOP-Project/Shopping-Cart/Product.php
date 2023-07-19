<?php

class Product
{
    # id:int, name:string, price:float, availableQuantity:int => private;
    # implement function addToCart($Cart, $quantity):CartItem;
    # implement function removeFromCart($Cart):void

    private int $id;
    private string $name;
    private float $price;
    private int $availableQuantity;

    public function __constructor(int $id, string $name, float $price, int $availableQuantity){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getAvailableQuantity(): int
    {
        return $this->availableQuantity;
    }

    /**
     * @param int $availableQuantity
     */
    public function setAvailableQuantity(int $availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }

    public function addToCart(Cart $cart, int $quantity): CartItem
    {

    }

    public function removeFromCart(): void
    {

    }
}