<?php

class ReportDownloadService
{
    public function downloadReport($report, $format = "html")
    {
        try {
            $className = "PATH\DownloadReport" . strtoupper($format) . "Service";
            return (new $className)->download($report);

        } catch (\Exception $ex) {
            throw new Exception("Wrong format");
        }
    }
}

