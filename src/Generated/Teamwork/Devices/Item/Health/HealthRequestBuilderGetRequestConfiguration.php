<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\Health;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HealthRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HealthRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HealthRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HealthRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HealthRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HealthRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HealthRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HealthRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HealthRequestBuilderGetQueryParameters {
        return new HealthRequestBuilderGetQueryParameters($expand, $select);
    }

}
