<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Teamwork\Sections\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * User's teamwork sections for organizing chats and channels. The collection response may include @microsoft.graph.sectionsOrder and @microsoft.graph.sectionsVersion instance annotations for ordering and optimistic concurrency control.
*/
class TeamworkSectionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new TeamworkSectionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
