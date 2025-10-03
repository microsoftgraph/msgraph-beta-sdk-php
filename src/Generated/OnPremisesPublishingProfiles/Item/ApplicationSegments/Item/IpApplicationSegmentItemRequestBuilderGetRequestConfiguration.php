<?php

namespace Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles\Item\ApplicationSegments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IpApplicationSegmentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IpApplicationSegmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IpApplicationSegmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IpApplicationSegmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IpApplicationSegmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IpApplicationSegmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IpApplicationSegmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IpApplicationSegmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IpApplicationSegmentItemRequestBuilderGetQueryParameters {
        return new IpApplicationSegmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
