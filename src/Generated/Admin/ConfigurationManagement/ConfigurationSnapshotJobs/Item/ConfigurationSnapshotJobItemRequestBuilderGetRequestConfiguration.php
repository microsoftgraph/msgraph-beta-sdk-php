<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ConfigurationManagement\ConfigurationSnapshotJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConfigurationSnapshotJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConfigurationSnapshotJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConfigurationSnapshotJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConfigurationSnapshotJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConfigurationSnapshotJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConfigurationSnapshotJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConfigurationSnapshotJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConfigurationSnapshotJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConfigurationSnapshotJobItemRequestBuilderGetQueryParameters {
        return new ConfigurationSnapshotJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
