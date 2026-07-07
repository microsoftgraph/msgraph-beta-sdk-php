<?php

namespace Microsoft\Graph\Beta\Generated\Directory\SubscriptionsWithOcpSubscriptionId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: subscriptionsWithOcpSubscriptionIdRequestBuilderGetRequestConfiguration
*/
class SubscriptionsWithOcpSubscriptionIdRequestBuilderGetRequ_54f51c87 extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQuer_dd154d21|null $queryParameters Request query parameters
    */
    public ?SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQuer_dd154d21 $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionsWithOcpSubscriptionIdRequestBuilderGetRequ_54f51c87 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQuer_dd154d21|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQuer_dd154d21 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQuer_dd154d21.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQuer_dd154d21
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQuer_dd154d21 {
        return new SubscriptionsWithOcpSubscriptionIdRequestBuilderGetQuer_dd154d21($expand, $select);
    }

}
