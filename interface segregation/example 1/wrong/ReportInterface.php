<?php

interface ReportInterface
{
    public function getDate(): array;

    public function download(string $format): void;
}
