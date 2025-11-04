<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CloudPcExternalPartnerItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CloudPcExternalPartnerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudPcExternalPartnerItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CloudPcExternalPartnerItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudPcExternalPartnerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudPcExternalPartnerItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudPcExternalPartnerItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudPcExternalPartnerItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudPcExternalPartnerItemRequestBuilderGetQueryParameters {
        return new CloudPcExternalPartnerItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
