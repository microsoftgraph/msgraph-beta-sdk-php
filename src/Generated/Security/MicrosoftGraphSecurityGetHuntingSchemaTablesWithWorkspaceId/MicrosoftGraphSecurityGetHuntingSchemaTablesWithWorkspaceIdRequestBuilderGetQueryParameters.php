<?php

namespace Microsoft\Graph\Beta\Generated\Security\MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve only the advanced hunting tables that the signed-in user is authorized to query in advanced hunting with Microsoft Defender XDR. The returned tables reflect the user's effective permissions. Each user within a tenant might have a different effective set of tables depending on their role and access level. Unlike getHuntingSchema, which returns both tables and functions in a single huntingSchemaResult, this function returns the tables as a collection. Because the result is a collection, you can apply OData query parameters such as $filter, $select, and $top to retrieve only the tables and columns you need. Common use cases include:
*/
class MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
    /**
     * @var string|null $workspaceId Usage: workspaceId=@workspaceId
    */
    public ?string $workspaceId = null;
    
    /**
     * Instantiates a new MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @param string|null $workspaceId Usage: workspaceId=@workspaceId
    */
    public function __construct(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null, ?string $workspaceId = null) {
        $this->count = $count;
        $this->filter = $filter;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
        $this->workspaceId = $workspaceId;
    }

}
