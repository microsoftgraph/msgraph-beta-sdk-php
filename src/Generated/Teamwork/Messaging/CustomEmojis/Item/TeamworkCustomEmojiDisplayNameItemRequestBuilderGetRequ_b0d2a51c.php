<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Messaging\CustomEmojis\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: TeamworkCustomEmojiDisplayNameItemRequestBuilderGetRequestConfiguration
*/
class TeamworkCustomEmojiDisplayNameItemRequestBuilderGetRequ_b0d2a51c extends BaseRequestConfiguration 
{
    /**
     * @var TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQuer_74191110|null $queryParameters Request query parameters
    */
    public ?TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQuer_74191110 $queryParameters = null;
    
    /**
     * Instantiates a new TeamworkCustomEmojiDisplayNameItemRequestBuilderGetRequ_b0d2a51c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQuer_74191110|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQuer_74191110 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQuer_74191110.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQuer_74191110
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQuer_74191110 {
        return new TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQuer_74191110($expand, $select);
    }

}
