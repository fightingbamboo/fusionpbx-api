<?php

namespace Api\Extensions\Events;

use App\Events\Event;
use Api\Extensions\Models\Extension;

class ExtensionWasCreated extends Event
{
    public $object;

    public $clearCacheUri;

    public function __construct(Extension $object, $clearCacheUri = null)
    {
      $this->object = $object;
      $this->clearCacheUri = $clearCacheUri;
    }
}
