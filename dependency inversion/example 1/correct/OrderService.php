<?php

class OrderService
{
    public function __construct(private DataProvider $orderDataAccess)
    {
    }

    public function getOrders()
    {
        return $this->orderDataAccess->fetchData();
    }
}
