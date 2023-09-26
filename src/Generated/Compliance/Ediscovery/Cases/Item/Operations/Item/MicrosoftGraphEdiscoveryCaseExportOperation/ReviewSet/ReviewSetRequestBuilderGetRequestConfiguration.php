<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Operations\Item\MicrosoftGraphEdiscoveryCaseExportOperation\ReviewSet;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReviewSetRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReviewSetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReviewSetRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new reviewSetRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReviewSetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReviewSetRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new reviewSetRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ReviewSetRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ReviewSetRequestBuilderGetQueryParameters {
        return new ReviewSetRequestBuilderGetQueryParameters($expand, $select);
    }

}
