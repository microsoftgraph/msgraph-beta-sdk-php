<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\MobileApps\Item\GraphAndroidForWorkApp;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphAndroidForWorkAppRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphAndroidForWorkAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphAndroidForWorkAppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphAndroidForWorkAppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphAndroidForWorkAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphAndroidForWorkAppRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphAndroidForWorkAppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphAndroidForWorkAppRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphAndroidForWorkAppRequestBuilderGetQueryParameters {
        return new GraphAndroidForWorkAppRequestBuilderGetQueryParameters($expand, $select);
    }

}
