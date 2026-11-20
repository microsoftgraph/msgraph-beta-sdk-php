<?php

namespace Microsoft\Graph\Beta\Generated\Security\ContentManagement;

use Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\RepositoriesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /security/contentManagement
*/
class ContentManagementRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the repositories property of the microsoft.graph.contentManagementRoot entity.
    */
    public function repositories(): RepositoriesRequestBuilder {
        return new RepositoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ContentManagementRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/contentManagement');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
