<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsManagementApp;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsManagementAppRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WindowsManagementAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsManagementAppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsManagementAppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsManagementAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsManagementAppRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsManagementAppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsManagementAppRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsManagementAppRequestBuilderGetQueryParameters {
        return new WindowsManagementAppRequestBuilderGetQueryParameters($expand, $select);
    }

}
