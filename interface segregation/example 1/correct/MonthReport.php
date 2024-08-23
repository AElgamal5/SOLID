<?php

class MonthReport implements DownloadReportInterface, DataReportInterface
{
    public function getDate(): array
    {
        return [];
    }

    public function download(string $format): void
    {
        //download
    }
}
