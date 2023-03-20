<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365GroupsActivityDetailWithDate;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetOffice365GroupsActivityDetailWithDateRequestBuilderGetRequestConfiguration 
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
     * @var GetOffice365GroupsActivityDetailWithDateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetOffice365GroupsActivityDetailWithDateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getOffice365GroupsActivityDetailWithDateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetOffice365GroupsActivityDetailWithDateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetOffice365GroupsActivityDetailWithDateRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new getOffice365GroupsActivityDetailWithDateRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetOffice365GroupsActivityDetailWithDateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetOffice365GroupsActivityDetailWithDateRequestBuilderGetQueryParameters {
        return new GetOffice365GroupsActivityDetailWithDateRequestBuilderGetQueryParameters($count, $filter, $orderby, $search, $select, $skip, $top);
    }

}
