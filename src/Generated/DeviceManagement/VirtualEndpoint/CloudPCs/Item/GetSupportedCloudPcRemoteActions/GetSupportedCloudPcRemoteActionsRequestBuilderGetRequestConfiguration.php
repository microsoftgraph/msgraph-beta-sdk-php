<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\GetSupportedCloudPcRemoteActions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetSupportedCloudPcRemoteActionsRequestBuilderGetRequestConfiguration 
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
     * @var GetSupportedCloudPcRemoteActionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetSupportedCloudPcRemoteActionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getSupportedCloudPcRemoteActionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetSupportedCloudPcRemoteActionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetSupportedCloudPcRemoteActionsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new getSupportedCloudPcRemoteActionsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetSupportedCloudPcRemoteActionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetSupportedCloudPcRemoteActionsRequestBuilderGetQueryParameters {
        return new GetSupportedCloudPcRemoteActionsRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
