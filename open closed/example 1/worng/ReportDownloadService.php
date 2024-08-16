<?php

class ReportDownloadService
{
    public function downloadReport($report, $format = "html")
    {
        if ($format == "pdf") {
            return $this->downloadAsPDF($report);
        }
        if ($format == "csv") {
            return $this->downloadAsCSV($report);
        }
        if ($format == "xls") {
            return $this->downloadAsXLS($report);
        }
        if ($format == "json") {
            return $this->downloadAsJSON($report);
        }
    }


    private function downloadAsPDF($report)
    {
        echo "Download as PDF";
    }

    private function downloadAsCSV($report)
    {
        echo "Download as CSV";
    }

    private function downloadAsXLS($report)
    {
        echo "Download as XLS";
    }

    private function downloadAsJSON($report)
    {
        echo "Download as JSON";
    }
}

