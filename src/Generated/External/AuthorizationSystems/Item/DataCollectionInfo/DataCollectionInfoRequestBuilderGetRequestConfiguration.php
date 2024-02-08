<?php

namespace Microsoft\Graph\Beta\Generated\External\AuthorizationSystems\Item\DataCollectionInfo;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataCollectionInfoRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataCollectionInfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataCollectionInfoRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataCollectionInfoRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataCollectionInfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataCollectionInfoRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataCollectionInfoRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataCollectionInfoRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataCollectionInfoRequestBuilderGetQueryParameters {
        return new DataCollectionInfoRequestBuilderGetQueryParameters($expand, $select);
    }

}
