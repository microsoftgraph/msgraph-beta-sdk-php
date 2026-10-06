<?php

namespace Microsoft\Graph\Beta\Generated\Security\MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @param string|null $workspaceId Usage: workspaceId=@workspaceId
     * @return MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null, ?string $workspaceId = null): MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters {
        return new MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top, $workspaceId);
    }

}
