<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\DefaultTvOSEnrollmentProfile;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefaultTvOSEnrollmentProfileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefaultTvOSEnrollmentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefaultTvOSEnrollmentProfileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefaultTvOSEnrollmentProfileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefaultTvOSEnrollmentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefaultTvOSEnrollmentProfileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DefaultTvOSEnrollmentProfileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefaultTvOSEnrollmentProfileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefaultTvOSEnrollmentProfileRequestBuilderGetQueryParameters {
        return new DefaultTvOSEnrollmentProfileRequestBuilderGetQueryParameters($expand, $select);
    }

}
