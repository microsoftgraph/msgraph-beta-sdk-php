<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\Sla;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SlaRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SlaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SlaRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SlaRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SlaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SlaRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SlaRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SlaRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SlaRequestBuilderGetQueryParameters {
        return new SlaRequestBuilderGetQueryParameters($expand, $select);
    }

}
