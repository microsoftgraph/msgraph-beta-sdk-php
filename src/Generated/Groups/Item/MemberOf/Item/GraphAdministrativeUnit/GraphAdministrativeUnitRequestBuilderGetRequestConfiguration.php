<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\MemberOf\Item\GraphAdministrativeUnit;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphAdministrativeUnitRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var GraphAdministrativeUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphAdministrativeUnitRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphAdministrativeUnitRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphAdministrativeUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphAdministrativeUnitRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new graphAdministrativeUnitRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphAdministrativeUnitRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphAdministrativeUnitRequestBuilderGetQueryParameters {
        return new GraphAdministrativeUnitRequestBuilderGetQueryParameters($expand, $select);
    }

}
