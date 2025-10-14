<?php

namespace Microsoft\\Graph\\Beta\\Generated\External\IndustryData\DataConnectors\Item\SourceSystem;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SourceSystemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SourceSystemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SourceSystemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SourceSystemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SourceSystemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SourceSystemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SourceSystemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SourceSystemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SourceSystemRequestBuilderGetQueryParameters {
        return new SourceSystemRequestBuilderGetQueryParameters($expand, $select);
    }

}
