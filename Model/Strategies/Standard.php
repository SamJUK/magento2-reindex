<?php

namespace MagePal\Reindex\Model\Strategies;

use MagePal\Reindex\Api\StrategyInterface;
use MagePal\Reindex\Model\Reindex;

class Standard implements StrategyInterface
{
    private $reindexService;

    public function __construct(Reindex $reindexService)
    {
        $this->reindexService = $reindexService;
    }

    public function process(array $indexIds = null) : void
    {
        $this->reindexService->reindex($indexIds);
    }
}