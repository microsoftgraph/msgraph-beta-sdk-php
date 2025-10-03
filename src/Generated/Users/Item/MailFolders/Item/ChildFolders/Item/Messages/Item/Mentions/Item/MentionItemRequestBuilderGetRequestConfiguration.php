<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\MailFolders\Item\ChildFolders\Item\Messages\Item\Mentions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MentionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MentionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MentionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MentionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MentionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MentionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MentionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MentionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MentionItemRequestBuilderGetQueryParameters {
        return new MentionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
