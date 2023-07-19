<?php

class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    // TODO Generate getters and setters of properties

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     * @throws Exception
     */

    public function addProduct(Product $product, int $quantity): CartItem
    {
        //TODO Implement method
        $cardItem = $this->findCartItem($product->getId());
        if($cardItem === null){
            #create a new card item
            $cardItem = new CartItem($product, 0);
            $this->items[$product->getId()] = $cardItem;
        }
        $cardItem->increaseQuantity($quantity);
        return $cardItem;
    }

    private function findCartItem(int $productId): ?CartItem
    {
        return $this->items[$productId] ?? null;
    }
    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product): void
    {
        unset($this->items[$product->getId()]);
    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        $sumQuantity = 0;
        foreach($this->items as $item){
            $sumQuantity += $item->getQuantity();
        }
        return $sumQuantity;
    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        $sumOfPrize = 0;
        foreach($this->items as $item){
            $sumOfPrize += ($item->getQuantity() * $item->getProduct()->getPrice());
        }
        return $sumOfPrize;
    }
}