<?php

namespace Microsoft\\Graph\\Beta\\Generated\Sites\Item\DocumentProcessingJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DocumentProcessingJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DocumentProcessingJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DocumentProcessingJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DocumentProcessingJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DocumentProcessingJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DocumentProcessingJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DocumentProcessingJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DocumentProcessingJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DocumentProcessingJobItemRequestBuilderGetQueryParameters {
        return new DocumentProcessingJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
