<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DepOnboardingSettings\Item\DefaultIosEnrollmentProfile;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefaultIosEnrollmentProfileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefaultIosEnrollmentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefaultIosEnrollmentProfileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefaultIosEnrollmentProfileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefaultIosEnrollmentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefaultIosEnrollmentProfileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DefaultIosEnrollmentProfileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefaultIosEnrollmentProfileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefaultIosEnrollmentProfileRequestBuilderGetQueryParameters {
        return new DefaultIosEnrollmentProfileRequestBuilderGetQueryParameters($expand, $select);
    }

}
