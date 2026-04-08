<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StorylineRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StorylineRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StorylineRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StorylineRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StorylineRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StorylineRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StorylineRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return StorylineRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): StorylineRequestBuilderGetQueryParameters {
        return new StorylineRequestBuilderGetQueryParameters($expand, $select);
    }

}
