<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\MailFolders\Item\UserConfigurations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserConfigurationsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var UserConfigurationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserConfigurationsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
