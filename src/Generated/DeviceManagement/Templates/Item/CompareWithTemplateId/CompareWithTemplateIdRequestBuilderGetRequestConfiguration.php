<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\CompareWithTemplateId;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CompareWithTemplateIdRequestBuilderGetRequestConfiguration 
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
     * @var CompareWithTemplateIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CompareWithTemplateIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new compareWithTemplateIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CompareWithTemplateIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CompareWithTemplateIdRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new compareWithTemplateIdRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return CompareWithTemplateIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): CompareWithTemplateIdRequestBuilderGetQueryParameters {
        return new CompareWithTemplateIdRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
