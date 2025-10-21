<?php

namespace Microsoft\\Graph\\Beta\\Generated\GovernanceSubjects\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GovernanceSubjectItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GovernanceSubjectItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GovernanceSubjectItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GovernanceSubjectItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GovernanceSubjectItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GovernanceSubjectItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GovernanceSubjectItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GovernanceSubjectItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GovernanceSubjectItemRequestBuilderGetQueryParameters {
        return new GovernanceSubjectItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
