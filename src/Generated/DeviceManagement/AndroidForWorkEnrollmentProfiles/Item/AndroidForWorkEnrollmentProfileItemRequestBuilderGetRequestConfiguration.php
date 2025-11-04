<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AndroidForWorkEnrollmentProfileItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AndroidForWorkEnrollmentProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AndroidForWorkEnrollmentProfileItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AndroidForWorkEnrollmentProfileItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidForWorkEnrollmentProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidForWorkEnrollmentProfileItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidForWorkEnrollmentProfileItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidForWorkEnrollmentProfileItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidForWorkEnrollmentProfileItemRequestBuilderGetQueryParameters {
        return new AndroidForWorkEnrollmentProfileItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
