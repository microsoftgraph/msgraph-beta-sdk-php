<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item\ApplicableContent\Item\MatchedDevices\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApplicableContentDeviceMatchDeviceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApplicableContentDeviceMatchDeviceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters {
        return new ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
