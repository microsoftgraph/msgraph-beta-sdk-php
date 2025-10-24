<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\AuthenticationMethodDevices\HardwareOathDevices\Item\AssignTo;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignToRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AssignToRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignToRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AssignToRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignToRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignToRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AssignToRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignToRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignToRequestBuilderGetQueryParameters {
        return new AssignToRequestBuilderGetQueryParameters($expand, $select);
    }

}
