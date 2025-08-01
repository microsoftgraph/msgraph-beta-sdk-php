<?php

namespace Microsoft\Graph\Beta\Generated\Security\IncidentTasks\Item\Incident;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IncidentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IncidentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IncidentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IncidentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IncidentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IncidentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IncidentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IncidentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IncidentRequestBuilderGetQueryParameters {
        return new IncidentRequestBuilderGetQueryParameters($expand, $select);
    }

}
