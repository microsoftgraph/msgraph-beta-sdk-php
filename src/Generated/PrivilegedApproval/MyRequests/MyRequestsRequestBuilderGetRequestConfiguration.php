<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedApproval\MyRequests;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MyRequestsRequestBuilderGetRequestConfiguration 
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
     * @var MyRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MyRequestsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new myRequestsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MyRequestsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): MyRequestsRequestBuilderGetQueryParameters {
        return new MyRequestsRequestBuilderGetQueryParameters($count, $filter, $orderby, $search, $select, $skip, $top);
    }

    /**
     * Instantiates a new myRequestsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MyRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MyRequestsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
