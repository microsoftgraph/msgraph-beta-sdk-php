<?php

namespace Microsoft\Graph\Beta\Generated\Security\Identities\SensorMigration\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SensorMigrationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SensorMigrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SensorMigrationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SensorMigrationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SensorMigrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SensorMigrationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SensorMigrationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SensorMigrationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SensorMigrationItemRequestBuilderGetQueryParameters {
        return new SensorMigrationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
