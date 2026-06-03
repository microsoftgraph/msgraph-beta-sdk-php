<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedTenantEmailNotificationItemRequestBuilderGetRequestConfiguration
*/
class ManagedTenantEmailNotificationItemRequestBuilderGetRequ_21e71658 extends BaseRequestConfiguration 
{
    /**
     * @var ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0|null $queryParameters Request query parameters
    */
    public ?ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedTenantEmailNotificationItemRequestBuilderGetRequ_21e71658 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0 {
        return new ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0($expand, $select);
    }

}
