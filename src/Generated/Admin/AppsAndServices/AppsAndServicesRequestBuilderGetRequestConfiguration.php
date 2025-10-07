<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\AppsAndServices;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppsAndServicesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AppsAndServicesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppsAndServicesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AppsAndServicesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppsAndServicesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppsAndServicesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppsAndServicesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppsAndServicesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppsAndServicesRequestBuilderGetQueryParameters {
        return new AppsAndServicesRequestBuilderGetQueryParameters($expand, $select);
    }

}
