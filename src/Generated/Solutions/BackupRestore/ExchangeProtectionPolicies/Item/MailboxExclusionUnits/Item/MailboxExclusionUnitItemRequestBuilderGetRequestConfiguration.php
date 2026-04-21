<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxExclusionUnits\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MailboxExclusionUnitItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MailboxExclusionUnitItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MailboxExclusionUnitItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MailboxExclusionUnitItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxExclusionUnitItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxExclusionUnitItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxExclusionUnitItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MailboxExclusionUnitItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MailboxExclusionUnitItemRequestBuilderGetQueryParameters {
        return new MailboxExclusionUnitItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
