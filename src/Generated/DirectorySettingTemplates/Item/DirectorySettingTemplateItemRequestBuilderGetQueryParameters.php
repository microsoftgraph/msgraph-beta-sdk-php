<?php

namespace Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A directory setting template represents a template of settings from which settings may be created within a tenant. This operation allows retrieval of the properties of the directorySettingTemplate object, including the available settings and their defaults. This API is available in the following national cloud deployments.
*/
class DirectorySettingTemplateItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new DirectorySettingTemplateItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
