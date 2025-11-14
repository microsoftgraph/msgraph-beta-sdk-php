<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\AuditActivityTypes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuditActivityTypeItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuditActivityTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuditActivityTypeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuditActivityTypeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuditActivityTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuditActivityTypeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuditActivityTypeItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuditActivityTypeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuditActivityTypeItemRequestBuilderGetQueryParameters {
        return new AuditActivityTypeItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
