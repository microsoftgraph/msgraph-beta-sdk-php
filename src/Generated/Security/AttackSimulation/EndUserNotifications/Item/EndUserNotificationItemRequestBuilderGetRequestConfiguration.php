<?php

namespace Microsoft\Graph\Beta\Generated\Security\AttackSimulation\EndUserNotifications\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EndUserNotificationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EndUserNotificationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EndUserNotificationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EndUserNotificationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EndUserNotificationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EndUserNotificationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EndUserNotificationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EndUserNotificationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EndUserNotificationItemRequestBuilderGetQueryParameters {
        return new EndUserNotificationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
