<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxExclusionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration
*/
class MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_0df77069 extends BaseRequestConfiguration 
{
    /**
     * @var MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478|null $queryParameters Request query parameters
    */
    public ?MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478 $queryParameters = null;
    
    /**
     * Instantiates a new MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_0df77069 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478 {
        return new MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478($expand, $select);
    }

}
