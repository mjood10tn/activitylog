<?php

namespace mjood10tn\Activitylog\Resources\ActivitylogResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use mjood10tn\Activitylog\Resources\ActivitylogResource;

class ViewActivitylog extends ViewRecord
{
    public static function getResource(): string
    {
        return ActivitylogResource::class;
    }
}
