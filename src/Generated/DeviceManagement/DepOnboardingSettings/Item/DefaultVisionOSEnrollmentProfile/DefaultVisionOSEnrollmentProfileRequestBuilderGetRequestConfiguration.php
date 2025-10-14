<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DepOnboardingSettings\Item\DefaultVisionOSEnrollmentProfile;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefaultVisionOSEnrollmentProfileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefaultVisionOSEnrollmentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefaultVisionOSEnrollmentProfileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefaultVisionOSEnrollmentProfileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefaultVisionOSEnrollmentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefaultVisionOSEnrollmentProfileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DefaultVisionOSEnrollmentProfileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefaultVisionOSEnrollmentProfileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefaultVisionOSEnrollmentProfileRequestBuilderGetQueryParameters {
        return new DefaultVisionOSEnrollmentProfileRequestBuilderGetQueryParameters($expand, $select);
    }

}
