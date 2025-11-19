<?php

namespace Microsoft\\Graph\\Beta\\Generated\Solutions\BackupRestore\AllMailboxesBackup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AllMailboxesBackupRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AllMailboxesBackupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AllMailboxesBackupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AllMailboxesBackupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AllMailboxesBackupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AllMailboxesBackupRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AllMailboxesBackupRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AllMailboxesBackupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AllMailboxesBackupRequestBuilderGetQueryParameters {
        return new AllMailboxesBackupRequestBuilderGetQueryParameters($expand, $select);
    }

}
