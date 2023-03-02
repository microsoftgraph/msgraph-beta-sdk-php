<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\OemWarrantyInformationOnboarding\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OemWarrantyInformationOnboardingItemRequestBuilderGetRequestConfiguration 
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
     * @var OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters {
        return new OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new OemWarrantyInformationOnboardingItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
