<?php

namespace Microsoft\Graph\Beta\Generated\Teams\Item\Channels\Item\AllMembers\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a single conversationMember (direct or indirect) from the allMembers collection using the membership ID. This API provides access to the following member types:- *Direct members*: Users who are added directly to the channel, including users from other tenants (cross-tenant).- *Indirect members*: Users who are members of a team with which the channel is shared, including teams in the same tenant or in a different tenant (cross-tenant). When you retrieve an indirect member, the @microsoft.graph.originalSourceMembershipUrl property identifies the original source team, which indicates that the user is an indirect member of the shared channel.
*/
class ConversationMemberItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ConversationMemberItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
