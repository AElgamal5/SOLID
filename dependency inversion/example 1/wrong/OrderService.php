<?php

class OrderService
{
    private OrderDataAccess $orderDataAccess = new OrderDataAccess();

    public function getOrders()
    {
        return $this->orderDataAccess->fetchOrders();
    }
}
