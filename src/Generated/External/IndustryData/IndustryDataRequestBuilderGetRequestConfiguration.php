<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IndustryDataRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IndustryDataRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IndustryDataRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IndustryDataRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IndustryDataRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IndustryDataRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IndustryDataRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IndustryDataRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IndustryDataRequestBuilderGetQueryParameters {
        return new IndustryDataRequestBuilderGetQueryParameters($expand, $select);
    }

}
