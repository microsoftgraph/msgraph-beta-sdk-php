<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline\Followings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StorylineFollowingItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StorylineFollowingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StorylineFollowingItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StorylineFollowingItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StorylineFollowingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StorylineFollowingItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StorylineFollowingItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return StorylineFollowingItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): StorylineFollowingItemRequestBuilderGetQueryParameters {
        return new StorylineFollowingItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
