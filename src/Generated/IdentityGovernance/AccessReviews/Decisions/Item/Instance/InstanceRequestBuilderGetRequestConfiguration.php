<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\AccessReviews\Decisions\Item\Instance;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InstanceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InstanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InstanceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new instanceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InstanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InstanceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new instanceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InstanceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InstanceRequestBuilderGetQueryParameters {
        return new InstanceRequestBuilderGetQueryParameters($expand, $select);
    }

}
