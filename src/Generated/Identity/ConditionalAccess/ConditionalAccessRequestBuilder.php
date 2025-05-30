<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess;

use Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationContextClassReferences\AuthenticationContextClassReferencesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationStrength\AuthenticationStrengthRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationStrengths\AuthenticationStrengthsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\Templates\TemplatesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /identity/conditionalAccess
*/
class ConditionalAccessRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the authenticationContextClassReferences property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function authenticationContextClassReferences(): AuthenticationContextClassReferencesRequestBuilder {
        return new AuthenticationContextClassReferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationStrength property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function authenticationStrength(): AuthenticationStrengthRequestBuilder {
        return new AuthenticationStrengthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationStrengths property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function authenticationStrengths(): AuthenticationStrengthsRequestBuilder {
        return new AuthenticationStrengthsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the templates property of the microsoft.graph.conditionalAccessRoot entity.
    */
    public function templates(): TemplatesRequestBuilder {
        return new TemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ConditionalAccessRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
