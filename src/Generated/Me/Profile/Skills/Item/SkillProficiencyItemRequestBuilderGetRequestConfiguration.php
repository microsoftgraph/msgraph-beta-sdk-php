<?php

namespace Microsoft\Graph\Beta\Generated\Me\Profile\Skills\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SkillProficiencyItemRequestBuilderGetRequestConfiguration 
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
     * @var SkillProficiencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SkillProficiencyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SkillProficiencyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SkillProficiencyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SkillProficiencyItemRequestBuilderGetQueryParameters {
        return new SkillProficiencyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new SkillProficiencyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SkillProficiencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SkillProficiencyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
