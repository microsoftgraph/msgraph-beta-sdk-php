<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\FrontLineServicePlans\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CloudPcFrontLineServicePlanItemRequestBuilderGetRequestConfiguration
*/
class CloudPcFrontLineServicePlanItemRequestBuilderGetRequest_4ca9bb24 extends BaseRequestConfiguration 
{
    /**
     * @var CloudPcFrontLineServicePlanItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudPcFrontLineServicePlanItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CloudPcFrontLineServicePlanItemRequestBuilderGetRequest_4ca9bb24 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudPcFrontLineServicePlanItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudPcFrontLineServicePlanItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudPcFrontLineServicePlanItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudPcFrontLineServicePlanItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudPcFrontLineServicePlanItemRequestBuilderGetQueryParameters {
        return new CloudPcFrontLineServicePlanItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
