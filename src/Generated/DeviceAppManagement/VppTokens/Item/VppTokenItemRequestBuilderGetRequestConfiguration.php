<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VppTokenItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VppTokenItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VppTokenItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VppTokenItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VppTokenItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VppTokenItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VppTokenItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VppTokenItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VppTokenItemRequestBuilderGetQueryParameters {
        return new VppTokenItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
