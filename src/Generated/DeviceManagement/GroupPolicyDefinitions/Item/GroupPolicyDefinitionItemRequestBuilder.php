<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item\Category\CategoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item\DefinitionFile\DefinitionFileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item\NextVersionDefinition\NextVersionDefinitionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item\Presentations\Item\GroupPolicyPresentationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item\Presentations\PresentationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item\PreviousVersionDefinition\PreviousVersionDefinitionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinition;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the groupPolicyDefinitions property of the microsoft.graph.deviceManagement entity.
*/
class GroupPolicyDefinitionItemRequestBuilder 
{
    /**
     * Provides operations to manage the category property of the microsoft.graph.groupPolicyDefinition entity.
    */
    public function category(): CategoryRequestBuilder {
        return new CategoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the definitionFile property of the microsoft.graph.groupPolicyDefinition entity.
    */
    public function definitionFile(): DefinitionFileRequestBuilder {
        return new DefinitionFileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the nextVersionDefinition property of the microsoft.graph.groupPolicyDefinition entity.
    */
    public function nextVersionDefinition(): NextVersionDefinitionRequestBuilder {
        return new NextVersionDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the presentations property of the microsoft.graph.groupPolicyDefinition entity.
    */
    public function presentations(): PresentationsRequestBuilder {
        return new PresentationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the previousVersionDefinition property of the microsoft.graph.groupPolicyDefinition entity.
    */
    public function previousVersionDefinition(): PreviousVersionDefinitionRequestBuilder {
        return new PreviousVersionDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new GroupPolicyDefinitionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/groupPolicyDefinitions/{groupPolicyDefinition%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property groupPolicyDefinitions for deviceManagement
     * @param GroupPolicyDefinitionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?GroupPolicyDefinitionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The available group policy definitions for this account.
     * @param GroupPolicyDefinitionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?GroupPolicyDefinitionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property groupPolicyDefinitions in deviceManagement
     * @param GroupPolicyDefinition $body The request body
     * @param GroupPolicyDefinitionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(GroupPolicyDefinition $body, ?GroupPolicyDefinitionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the presentations property of the microsoft.graph.groupPolicyDefinition entity.
     * @param string $id Unique identifier of the item
     * @return GroupPolicyPresentationItemRequestBuilder
    */
    public function presentationsById(string $id): GroupPolicyPresentationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupPolicyPresentation%2Did'] = $id;
        return new GroupPolicyPresentationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property groupPolicyDefinitions for deviceManagement
     * @param GroupPolicyDefinitionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?GroupPolicyDefinitionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The available group policy definitions for this account.
     * @param GroupPolicyDefinitionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupPolicyDefinitionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property groupPolicyDefinitions in deviceManagement
     * @param GroupPolicyDefinition $body The request body
     * @param GroupPolicyDefinitionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(GroupPolicyDefinition $body, ?GroupPolicyDefinitionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
