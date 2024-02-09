<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Logs;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LogsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LogsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LogsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LogsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LogsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LogsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LogsRequestBuilderGetQueryParameters {
        return new LogsRequestBuilderGetQueryParameters($expand, $select);
    }

}
