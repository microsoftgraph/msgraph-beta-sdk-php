<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\DeploymentAudiences\Item\ApplicableContent\Item\MatchedDevices\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of devices and recommendations for applicable catalog content.
*/
class ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ApplicableContentDeviceMatchDeviceItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
