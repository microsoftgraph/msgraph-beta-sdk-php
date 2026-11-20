<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\BuiltInDefinitions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\BuiltInDefinitions\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\BuiltInDefinitions\Item\PreviousVersions\PreviousVersionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\BuiltInDefinitions\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ResourcePolicyDefinition;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the builtInDefinitions property of the microsoft.graph.resourcePolicyRoot entity.
*/
class ResourcePolicyDefinitionUniqueNameItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.resourcePolicyDefinition entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the previousVersions property of the microsoft.graph.resourcePolicyDefinition entity.
    */
    public function previousVersions(): PreviousVersionsRequestBuilder {
        return new PreviousVersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ResourcePolicyDefinitionUniqueNameItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/resourcePolicy/builtInDefinitions/{resourcePolicyDefinition%2DuniqueName}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get builtInDefinitions from admin
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ResourcePolicyDefinition|null>
     * @throws Exception
    */
    public function get(?ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ResourcePolicyDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get builtInDefinitions from admin
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ResourcePolicyDefinitionUniqueNameItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ResourcePolicyDefinitionUniqueNameItemRequestBuilder {
        return new ResourcePolicyDefinitionUniqueNameItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
