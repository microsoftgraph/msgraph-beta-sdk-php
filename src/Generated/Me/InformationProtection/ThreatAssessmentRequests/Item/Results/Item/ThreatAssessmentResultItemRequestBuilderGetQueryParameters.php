<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection\ThreatAssessmentRequests\Item\Results\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class ThreatAssessmentResultItemRequestBuilderGetQueryParameters 
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
    
}