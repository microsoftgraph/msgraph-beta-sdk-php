<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\DefaultMacOsEnrollmentProfile;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefaultMacOsEnrollmentProfileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefaultMacOsEnrollmentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefaultMacOsEnrollmentProfileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefaultMacOsEnrollmentProfileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefaultMacOsEnrollmentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefaultMacOsEnrollmentProfileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DefaultMacOsEnrollmentProfileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefaultMacOsEnrollmentProfileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefaultMacOsEnrollmentProfileRequestBuilderGetQueryParameters {
        return new DefaultMacOsEnrollmentProfileRequestBuilderGetQueryParameters($expand, $select);
    }

}
