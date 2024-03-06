<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters {
        return new AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
