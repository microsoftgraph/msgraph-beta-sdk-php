<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\CustomSecurityAttributeAudits\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomSecurityAttributeAuditItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CustomSecurityAttributeAuditItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomSecurityAttributeAuditItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CustomSecurityAttributeAuditItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomSecurityAttributeAuditItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomSecurityAttributeAuditItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomSecurityAttributeAuditItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomSecurityAttributeAuditItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomSecurityAttributeAuditItemRequestBuilderGetQueryParameters {
        return new CustomSecurityAttributeAuditItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
