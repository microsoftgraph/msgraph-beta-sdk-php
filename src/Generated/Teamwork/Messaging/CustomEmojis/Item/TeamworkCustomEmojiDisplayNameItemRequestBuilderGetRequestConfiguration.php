<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Messaging\CustomEmojis\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TeamworkCustomEmojiDisplayNameItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TeamworkCustomEmojiDisplayNameItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQueryParameters {
        return new TeamworkCustomEmojiDisplayNameItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
