<?php

namespace Microsoft\Graph\Beta\Generated\Security\Partner\SecurityAlerts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PartnerSecurityAlertItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PartnerSecurityAlertItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PartnerSecurityAlertItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PartnerSecurityAlertItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PartnerSecurityAlertItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PartnerSecurityAlertItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PartnerSecurityAlertItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PartnerSecurityAlertItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PartnerSecurityAlertItemRequestBuilderGetQueryParameters {
        return new PartnerSecurityAlertItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
