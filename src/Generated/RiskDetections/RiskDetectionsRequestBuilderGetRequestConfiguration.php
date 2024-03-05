<?php

namespace Microsoft\Graph\Beta\Generated\RiskDetections;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RiskDetectionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RiskDetectionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RiskDetectionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RiskDetectionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RiskDetectionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RiskDetectionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RiskDetectionsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $top Show only the first n items
     * @return RiskDetectionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $top = null): RiskDetectionsRequestBuilderGetQueryParameters {
        return new RiskDetectionsRequestBuilderGetQueryParameters($expand, $filter, $orderby, $search, $select, $top);
    }

}
