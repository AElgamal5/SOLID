<?php

class MonthReport implements ReportInterface
{
    public function getDate(): array
    {
        return [];
    }

    public function download(string $format): void
    {
        throw new Exception("Method not implemented");
    }
}
