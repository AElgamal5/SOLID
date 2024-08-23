<?php

class YearReport implements DownloadReportInterface, DataReportInterface
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
