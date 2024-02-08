<?php

namespace Microsoft\Graph\Beta\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\ColorIcon;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ColorIconRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ColorIconRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ColorIconRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ColorIconRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ColorIconRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ColorIconRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ColorIconRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ColorIconRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ColorIconRequestBuilderGetQueryParameters {
        return new ColorIconRequestBuilderGetQueryParameters($expand, $select);
    }

}
