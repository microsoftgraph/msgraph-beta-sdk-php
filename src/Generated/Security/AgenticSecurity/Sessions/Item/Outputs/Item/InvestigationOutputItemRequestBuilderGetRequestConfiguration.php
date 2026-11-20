<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\Outputs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvestigationOutputItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvestigationOutputItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvestigationOutputItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InvestigationOutputItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvestigationOutputItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvestigationOutputItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InvestigationOutputItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InvestigationOutputItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InvestigationOutputItemRequestBuilderGetQueryParameters {
        return new InvestigationOutputItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
