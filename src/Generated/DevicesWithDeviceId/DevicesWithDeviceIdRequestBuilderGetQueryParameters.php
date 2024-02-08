<?php

namespace Microsoft\Graph\Beta\Generated\DevicesWithDeviceId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties and relationships of a device object. Since the device resource supports extensions, you can also use the GET operation to get custom properties and extension data in a device instance.
*/
class DevicesWithDeviceIdRequestBuilderGetQueryParameters 
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
     * Instantiates a new DevicesWithDeviceIdRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
