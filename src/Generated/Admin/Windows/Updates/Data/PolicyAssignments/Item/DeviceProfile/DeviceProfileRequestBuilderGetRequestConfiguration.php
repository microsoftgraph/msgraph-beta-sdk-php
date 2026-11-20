<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\PolicyAssignments\Item\DeviceProfile;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceProfileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceProfileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceProfileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceProfileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceProfileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceProfileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceProfileRequestBuilderGetQueryParameters {
        return new DeviceProfileRequestBuilderGetQueryParameters($expand, $select);
    }

}
