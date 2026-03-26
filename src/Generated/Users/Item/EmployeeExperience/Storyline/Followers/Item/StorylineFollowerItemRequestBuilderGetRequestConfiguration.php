<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline\Followers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StorylineFollowerItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StorylineFollowerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StorylineFollowerItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StorylineFollowerItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StorylineFollowerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StorylineFollowerItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StorylineFollowerItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return StorylineFollowerItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): StorylineFollowerItemRequestBuilderGetQueryParameters {
        return new StorylineFollowerItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
