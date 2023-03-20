<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\GetCloudPcRemoteActionResults;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetCloudPcRemoteActionResultsRequestBuilderGetRequestConfiguration 
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
     * @var GetCloudPcRemoteActionResultsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetCloudPcRemoteActionResultsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getCloudPcRemoteActionResultsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetCloudPcRemoteActionResultsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetCloudPcRemoteActionResultsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new getCloudPcRemoteActionResultsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetCloudPcRemoteActionResultsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetCloudPcRemoteActionResultsRequestBuilderGetQueryParameters {
        return new GetCloudPcRemoteActionResultsRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
