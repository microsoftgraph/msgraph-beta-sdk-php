<?php

namespace Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\CalendarView\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class BookingAppointmentItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
    */
    public ?string $end = null;
    
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * @var string|null $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
    */
    public ?string $start = null;
    
}
