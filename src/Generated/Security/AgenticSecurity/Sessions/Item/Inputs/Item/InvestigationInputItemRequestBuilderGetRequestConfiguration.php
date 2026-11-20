<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\Inputs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvestigationInputItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvestigationInputItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvestigationInputItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InvestigationInputItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvestigationInputItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvestigationInputItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InvestigationInputItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InvestigationInputItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InvestigationInputItemRequestBuilderGetQueryParameters {
        return new InvestigationInputItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
