<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Settings\EnrichedAuditLogs;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EnrichedAuditLogsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EnrichedAuditLogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EnrichedAuditLogsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new enrichedAuditLogsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EnrichedAuditLogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EnrichedAuditLogsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new enrichedAuditLogsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EnrichedAuditLogsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EnrichedAuditLogsRequestBuilderGetQueryParameters {
        return new EnrichedAuditLogsRequestBuilderGetQueryParameters($expand, $select);
    }

}
