<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ExclusionUnits\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExclusionUnitBaseItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExclusionUnitBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExclusionUnitBaseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExclusionUnitBaseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExclusionUnitBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExclusionUnitBaseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExclusionUnitBaseItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExclusionUnitBaseItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExclusionUnitBaseItemRequestBuilderGetQueryParameters {
        return new ExclusionUnitBaseItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
