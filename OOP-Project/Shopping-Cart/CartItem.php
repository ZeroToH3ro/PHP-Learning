<?php

class CartItem
{
    private Product $product;
    private int $quantity;

    // TODO: Generate constructor with all properties of the class
    // TODO: Generate getters and setters of properties
    /**
     * @param Product $product
     * @param int $quantity
     */
    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }


    /**
     * @throws Exception
     */
    public function increaseQuantity(int $amount = 1):void
    {
        //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
        if($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity() ){
            throw new \RuntimeException('Product quantity can not be more than ' . $this->getProduct()->getAvailableQuantity());
        }
        $this->quantity += $amount;
    }

    /**
     * @throws Exception
     */
    public function decreaseQuantity(int $amount = 1):void
    {
        //TODO $quantity must be increased by one.
        // Bonus: Quantity must not become less than 1
        if($this->getQuantity() < 1){
            throw new \RuntimeException("Product quantity can not be less than 1");
        }
        $this->quantity -= $amount;
    }
}