<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Outlook\Tasks;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TasksRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TasksRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TasksRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TasksRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TasksRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TasksRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TasksRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return TasksRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): TasksRequestBuilderGetQueryParameters {
        return new TasksRequestBuilderGetQueryParameters($count, $filter, $orderby, $select, $skip, $top);
    }

}
