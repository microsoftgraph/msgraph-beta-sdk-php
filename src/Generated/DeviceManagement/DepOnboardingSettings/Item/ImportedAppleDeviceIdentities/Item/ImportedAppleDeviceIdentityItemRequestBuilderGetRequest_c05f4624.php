<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\ImportedAppleDeviceIdentities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ImportedAppleDeviceIdentityItemRequestBuilderGetRequestConfiguration
*/
class ImportedAppleDeviceIdentityItemRequestBuilderGetRequest_c05f4624 extends BaseRequestConfiguration 
{
    /**
     * @var ImportedAppleDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ImportedAppleDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ImportedAppleDeviceIdentityItemRequestBuilderGetRequest_c05f4624 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ImportedAppleDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ImportedAppleDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ImportedAppleDeviceIdentityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ImportedAppleDeviceIdentityItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ImportedAppleDeviceIdentityItemRequestBuilderGetQueryParameters {
        return new ImportedAppleDeviceIdentityItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
