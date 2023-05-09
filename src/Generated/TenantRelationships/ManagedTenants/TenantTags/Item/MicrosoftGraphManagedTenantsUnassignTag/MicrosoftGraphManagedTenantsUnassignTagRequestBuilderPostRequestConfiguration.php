<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantTags\Item\MicrosoftGraphManagedTenantsUnassignTag;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftGraphManagedTenantsUnassignTagRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * Instantiates a new microsoftGraphManagedTenantsUnassignTagRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        parent::__construct($headers ?? [], $options ?? []);
    }

}
