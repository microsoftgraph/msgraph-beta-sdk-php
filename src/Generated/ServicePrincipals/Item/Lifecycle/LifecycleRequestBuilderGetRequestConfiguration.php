<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Lifecycle;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LifecycleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LifecycleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LifecycleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LifecycleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LifecycleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LifecycleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LifecycleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LifecycleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LifecycleRequestBuilderGetQueryParameters {
        return new LifecycleRequestBuilderGetQueryParameters($expand, $select);
    }

}
