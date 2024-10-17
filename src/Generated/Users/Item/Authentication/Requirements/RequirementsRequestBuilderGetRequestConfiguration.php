<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\Requirements;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RequirementsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RequirementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RequirementsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RequirementsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RequirementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RequirementsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RequirementsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RequirementsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RequirementsRequestBuilderGetQueryParameters {
        return new RequirementsRequestBuilderGetQueryParameters($expand, $select);
    }

}
