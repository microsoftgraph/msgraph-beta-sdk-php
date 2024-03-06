<?php

namespace Microsoft\Graph\Beta\Generated\Directory\SubscriptionsWithOcpSubscriptionId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionsWithOcpSubscriptionIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionsWithOcpSubscriptionIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQueryParameters {
        return new SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
