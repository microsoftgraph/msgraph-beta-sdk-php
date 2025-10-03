<?php

namespace Microsoft\\Graph\\Beta\\Generated\Policies\ExternalIdentitiesPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalIdentitiesPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExternalIdentitiesPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalIdentitiesPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExternalIdentitiesPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalIdentitiesPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalIdentitiesPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalIdentitiesPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalIdentitiesPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalIdentitiesPolicyRequestBuilderGetQueryParameters {
        return new ExternalIdentitiesPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
