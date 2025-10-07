<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Deployments\Item\Audience;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AudienceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AudienceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AudienceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AudienceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AudienceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AudienceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AudienceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AudienceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AudienceRequestBuilderGetQueryParameters {
        return new AudienceRequestBuilderGetQueryParameters($expand, $select);
    }

}
