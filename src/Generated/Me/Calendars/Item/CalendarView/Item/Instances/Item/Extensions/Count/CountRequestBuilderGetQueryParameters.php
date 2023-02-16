<?php

namespace Microsoft\Graph\Beta\Generated\Me\Calendars\Item\CalendarView\Item\Instances\Item\Extensions\Count;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the number of the resource
*/
class CountRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter Filter items by property values
    */
    public function __construct(?string $filter = null) {
        $this->filter = $filter;
    }

}
