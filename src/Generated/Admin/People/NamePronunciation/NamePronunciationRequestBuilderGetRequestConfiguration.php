<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\People\NamePronunciation;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NamePronunciationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var NamePronunciationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NamePronunciationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new NamePronunciationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param NamePronunciationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NamePronunciationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new NamePronunciationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return NamePronunciationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): NamePronunciationRequestBuilderGetQueryParameters {
        return new NamePronunciationRequestBuilderGetQueryParameters($expand, $select);
    }

}
