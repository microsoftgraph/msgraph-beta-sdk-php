<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\OemWarrantyInformationOnboarding\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OemWarrantyInformationOnboardingItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OemWarrantyInformationOnboardingItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters {
        return new OemWarrantyInformationOnboardingItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
