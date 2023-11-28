<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Settings\ForwardingOptions;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the forwarding options for the tenant, with a specific focus on the 'skipDnsLookupState' flag. This flag determines whether DNS lookup will be skipped, allowing Microsoft 365 traffic to be forwarded directly to the Front Door using the client-resolved destination.
*/
class ForwardingOptionsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new forwardingOptionsRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
