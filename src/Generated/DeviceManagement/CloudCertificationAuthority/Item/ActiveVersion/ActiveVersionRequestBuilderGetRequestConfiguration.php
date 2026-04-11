<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\ActiveVersion;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActiveVersionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ActiveVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActiveVersionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ActiveVersionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActiveVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActiveVersionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ActiveVersionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ActiveVersionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ActiveVersionRequestBuilderGetQueryParameters {
        return new ActiveVersionRequestBuilderGetQueryParameters($expand, $select);
    }

}
