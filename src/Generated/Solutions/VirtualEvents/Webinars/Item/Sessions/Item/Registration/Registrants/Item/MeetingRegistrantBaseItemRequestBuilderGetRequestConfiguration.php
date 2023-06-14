<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\VirtualEvents\Webinars\Item\Sessions\Item\Registration\Registrants\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MeetingRegistrantBaseItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MeetingRegistrantBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MeetingRegistrantBaseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MeetingRegistrantBaseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MeetingRegistrantBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MeetingRegistrantBaseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MeetingRegistrantBaseItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MeetingRegistrantBaseItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MeetingRegistrantBaseItemRequestBuilderGetQueryParameters {
        return new MeetingRegistrantBaseItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
