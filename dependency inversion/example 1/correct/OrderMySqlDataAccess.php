<?php

class OrderMySqlDataAccess implements DataProvider
{
    public function fetchData()
    {
        print_r("Fetching orders form mysql..." . PHP_EOL);
    }
}

