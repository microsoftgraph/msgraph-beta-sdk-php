<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleDefinitions\Item\AssignedPrincipalsWithTransitivedirectoryScopeTypeDirectoryScopeTypeDirectoryScopeIdDirectoryScopeId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Invoke function assignedPrincipals
*/
class AssignedPrincipalsWithTransitivedirectoryScopeTypeDirectoryScopeTypeDirectoryScopeIdDirectoryScopeIdRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @var string|null $directoryScopeId Usage: directoryScopeId='@directoryScopeId'
    */
    public ?string $directoryScopeId = null;
    
    /**
     * @var string|null $directoryScopeType Usage: directoryScopeType='@directoryScopeType'
    */
    public ?string $directoryScopeType = null;
    
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
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
     * @var bool|null $transitive Usage: transitive=@transitive
    */
    public ?bool $transitive = null;
    
    /**
     * Instantiates a new assignedPrincipalsWithTransitivedirectoryScopeTypeDirectoryScopeTypeDirectoryScopeIdDirectoryScopeIdRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $directoryScopeId Usage: directoryScopeId='@directoryScopeId'
     * @param string|null $directoryScopeType Usage: directoryScopeType='@directoryScopeType'
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @param bool|null $transitive Usage: transitive=@transitive
    */
    public function __construct(?bool $count = null, ?string $directoryScopeId = null, ?string $directoryScopeType = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null, ?bool $transitive = null) {
        $this->count = $count;
        $this->directoryScopeId = $directoryScopeId;
        $this->directoryScopeType = $directoryScopeType;
        $this->expand = $expand;
        $this->filter = $filter;
        $this->orderby = $orderby;
        $this->search = $search;
        $this->select = $select;
        $this->skip = $skip;
        $this->top = $top;
        $this->transitive = $transitive;
    }

}
