<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ReportSettings;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReportSettingsRequestBuilderGetRequestConfiguration 
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
     * @var ReportSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReportSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
