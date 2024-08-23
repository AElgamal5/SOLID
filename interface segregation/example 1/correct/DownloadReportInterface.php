<?php

interface DownloadReportInterface
{
    public function download(string $format): void;
}
