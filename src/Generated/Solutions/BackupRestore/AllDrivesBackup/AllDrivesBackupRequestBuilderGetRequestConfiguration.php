<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\AllDrivesBackup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AllDrivesBackupRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AllDrivesBackupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AllDrivesBackupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AllDrivesBackupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AllDrivesBackupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AllDrivesBackupRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AllDrivesBackupRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AllDrivesBackupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AllDrivesBackupRequestBuilderGetQueryParameters {
        return new AllDrivesBackupRequestBuilderGetQueryParameters($expand, $select);
    }

}
