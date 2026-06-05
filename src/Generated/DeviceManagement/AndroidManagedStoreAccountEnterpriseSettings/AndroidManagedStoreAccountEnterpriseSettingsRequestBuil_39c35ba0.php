<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: androidManagedStoreAccountEnterpriseSettingsRequestBuilderGetRequestConfiguration
*/
class AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_39c35ba0 extends BaseRequestConfiguration 
{
    /**
     * @var AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f|null $queryParameters Request query parameters
    */
    public ?AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f $queryParameters = null;
    
    /**
     * Instantiates a new AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_39c35ba0 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f {
        return new AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f($expand, $select);
    }

}
