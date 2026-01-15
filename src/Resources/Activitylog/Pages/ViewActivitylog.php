<?php

namespace mjood10tn\Activitylog\Resources\Activitylog\Pages;

use Filament\Resources\Pages\ViewRecord;
use mjood10tn\Activitylog\Resources\Activitylog\ActivitylogResource;

class ViewActivitylog extends ViewRecord
{
    public static function getResource(): string
    {
        return ActivitylogResource::class;
    }
}
