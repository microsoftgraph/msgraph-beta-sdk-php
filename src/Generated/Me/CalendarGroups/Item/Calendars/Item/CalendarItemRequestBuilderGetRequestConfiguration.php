<?php

namespace Microsoft\Graph\Beta\Generated\Me\CalendarGroups\Item\Calendars\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CalendarItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CalendarItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CalendarItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CalendarItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CalendarItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CalendarItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CalendarItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return CalendarItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): CalendarItemRequestBuilderGetQueryParameters {
        return new CalendarItemRequestBuilderGetQueryParameters($select);
    }

}
