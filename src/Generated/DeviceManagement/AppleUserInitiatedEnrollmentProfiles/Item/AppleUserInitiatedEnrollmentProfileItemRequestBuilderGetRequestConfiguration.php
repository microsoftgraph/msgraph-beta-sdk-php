<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AppleUserInitiatedEnrollmentProfiles\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetQueryParameters {
        return new AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
