<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelServerLogCollectionResponses;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftTunnelServerLogCollectionResponsesRequestBuilderGetRequestConfiguration
*/
class MicrosoftTunnelServerLogCollectionResponsesRequestBuild_292e8c77 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftTunnelServerLogCollectionResponsesRequestBuild_adf11d06|null $queryParameters Request query parameters
    */
    public ?MicrosoftTunnelServerLogCollectionResponsesRequestBuild_adf11d06 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftTunnelServerLogCollectionResponsesRequestBuild_292e8c77 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftTunnelServerLogCollectionResponsesRequestBuild_adf11d06|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftTunnelServerLogCollectionResponsesRequestBuild_adf11d06 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftTunnelServerLogCollectionResponsesRequestBuild_adf11d06.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftTunnelServerLogCollectionResponsesRequestBuild_adf11d06
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): MicrosoftTunnelServerLogCollectionResponsesRequestBuild_adf11d06 {
        return new MicrosoftTunnelServerLogCollectionResponsesRequestBuild_adf11d06($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
