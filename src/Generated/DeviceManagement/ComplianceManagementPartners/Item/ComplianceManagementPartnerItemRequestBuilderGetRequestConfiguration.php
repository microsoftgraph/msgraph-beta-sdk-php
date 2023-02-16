<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComplianceManagementPartners\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ComplianceManagementPartnerItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ComplianceManagementPartnerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ComplianceManagementPartnerItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ComplianceManagementPartnerItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ComplianceManagementPartnerItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ComplianceManagementPartnerItemRequestBuilderGetQueryParameters {
        return new ComplianceManagementPartnerItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ComplianceManagementPartnerItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ComplianceManagementPartnerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ComplianceManagementPartnerItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
