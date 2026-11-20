<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity;

use Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\PlaybookDefinitions\PlaybookDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\SessionsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /security/agenticSecurity
*/
class AgenticSecurityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the playbookDefinitions property of the microsoft.graph.agenticSecurityRoot entity.
    */
    public function playbookDefinitions(): PlaybookDefinitionsRequestBuilder {
        return new PlaybookDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sessions property of the microsoft.graph.agenticSecurityRoot entity.
    */
    public function sessions(): SessionsRequestBuilder {
        return new SessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AgenticSecurityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/agenticSecurity');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
