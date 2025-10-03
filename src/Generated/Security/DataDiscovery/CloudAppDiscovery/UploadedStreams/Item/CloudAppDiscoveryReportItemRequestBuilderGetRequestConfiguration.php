<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\DataDiscovery\CloudAppDiscovery\UploadedStreams\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CloudAppDiscoveryReportItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CloudAppDiscoveryReportItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudAppDiscoveryReportItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CloudAppDiscoveryReportItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudAppDiscoveryReportItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudAppDiscoveryReportItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudAppDiscoveryReportItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudAppDiscoveryReportItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudAppDiscoveryReportItemRequestBuilderGetQueryParameters {
        return new CloudAppDiscoveryReportItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
