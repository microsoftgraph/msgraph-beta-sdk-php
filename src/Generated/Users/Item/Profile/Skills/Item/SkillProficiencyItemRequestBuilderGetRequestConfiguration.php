<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Profile\Skills\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SkillProficiencyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SkillProficiencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SkillProficiencyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SkillProficiencyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SkillProficiencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SkillProficiencyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SkillProficiencyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SkillProficiencyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SkillProficiencyItemRequestBuilderGetQueryParameters {
        return new SkillProficiencyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
