<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Products\Item\KnownIssues\Item\ResolvingKnowledgeBaseArticle;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResolvingKnowledgeBaseArticleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResolvingKnowledgeBaseArticleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResolvingKnowledgeBaseArticleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResolvingKnowledgeBaseArticleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResolvingKnowledgeBaseArticleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResolvingKnowledgeBaseArticleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResolvingKnowledgeBaseArticleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResolvingKnowledgeBaseArticleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResolvingKnowledgeBaseArticleRequestBuilderGetQueryParameters {
        return new ResolvingKnowledgeBaseArticleRequestBuilderGetQueryParameters($expand, $select);
    }

}
