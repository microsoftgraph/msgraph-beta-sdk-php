<?php

namespace Microsoft\Graph\Beta\Generated\Programs\Item\Controls\Item\Program;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProgramRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProgramRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProgramRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new programRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProgramRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProgramRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new programRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProgramRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProgramRequestBuilderGetQueryParameters {
        return new ProgramRequestBuilderGetQueryParameters($expand, $select);
    }

}
