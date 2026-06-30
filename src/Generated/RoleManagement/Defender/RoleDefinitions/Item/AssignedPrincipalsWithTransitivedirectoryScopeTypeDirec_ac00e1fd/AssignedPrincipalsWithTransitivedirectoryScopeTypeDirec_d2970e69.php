<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Defender\RoleDefinitions\Item\AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_ac00e1fd;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: assignedPrincipalsWithTransitivedirectoryScopeTypeDirectoryScopeTypeDirectoryScopeIdDirectoryScopeIdRequestBuilderGetRequestConfiguration
*/
class AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_d2970e69 extends BaseRequestConfiguration 
{
    /**
     * @var AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_1ea01fbb|null $queryParameters Request query parameters
    */
    public ?AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_1ea01fbb $queryParameters = null;
    
    /**
     * Instantiates a new AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_d2970e69 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_1ea01fbb|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_1ea01fbb $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_1ea01fbb.
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
     * @return AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_1ea01fbb
    */
    public static function createQueryParameters(?bool $count = null, ?string $directoryScopeId = null, ?string $directoryScopeType = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null, ?bool $transitive = null): AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_1ea01fbb {
        return new AssignedPrincipalsWithTransitivedirectoryScopeTypeDirec_1ea01fbb($count, $directoryScopeId, $directoryScopeType, $expand, $filter, $orderby, $search, $select, $skip, $top, $transitive);
    }

}
