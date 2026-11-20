<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvestigationSessionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvestigationSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvestigationSessionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InvestigationSessionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvestigationSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvestigationSessionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InvestigationSessionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InvestigationSessionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InvestigationSessionItemRequestBuilderGetQueryParameters {
        return new InvestigationSessionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
