<?php

namespace mjood10tn\Activitylog\Resources\Activitylog\Pages;

use Filament\Resources\Pages\ListRecords;
use mjood10tn\Activitylog\Resources\Activitylog\ActivitylogResource;

class ListActivitylog extends ListRecords
{
    protected static string $resource = ActivitylogResource::class;
}
