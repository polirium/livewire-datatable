<?php

namespace PowerComponents\LivewirePowerGrid\Services\Contracts;

use PowerComponents\LivewirePowerGrid\Exportable;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

interface ExportInterface
{
    public function download(array $exportOptions): BinaryFileResponse;

    public function build(Exportable|array $exportOptions): void;
}
