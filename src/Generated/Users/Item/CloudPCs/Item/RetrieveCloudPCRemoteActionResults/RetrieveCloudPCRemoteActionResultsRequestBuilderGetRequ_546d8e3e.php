<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\RetrieveCloudPCRemoteActionResults;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: retrieveCloudPCRemoteActionResultsRequestBuilderGetRequestConfiguration
*/
class RetrieveCloudPCRemoteActionResultsRequestBuilderGetRequ_546d8e3e extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveCloudPCRemoteActionResultsRequestBuilderGetQuer_c003bb15|null $queryParameters Request query parameters
    */
    public ?RetrieveCloudPCRemoteActionResultsRequestBuilderGetQuer_c003bb15 $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveCloudPCRemoteActionResultsRequestBuilderGetRequ_546d8e3e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveCloudPCRemoteActionResultsRequestBuilderGetQuer_c003bb15|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveCloudPCRemoteActionResultsRequestBuilderGetQuer_c003bb15 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveCloudPCRemoteActionResultsRequestBuilderGetQuer_c003bb15.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveCloudPCRemoteActionResultsRequestBuilderGetQuer_c003bb15
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveCloudPCRemoteActionResultsRequestBuilderGetQuer_c003bb15 {
        return new RetrieveCloudPCRemoteActionResultsRequestBuilderGetQuer_c003bb15($count, $filter, $search, $skip, $top);
    }

}
