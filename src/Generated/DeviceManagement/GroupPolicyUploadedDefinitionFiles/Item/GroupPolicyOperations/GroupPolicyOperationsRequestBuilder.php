<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\GroupPolicyOperations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\GroupPolicyOperations\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\GroupPolicyOperations\Item\GroupPolicyOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyOperation;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyOperationCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the groupPolicyOperations property of the microsoft.graph.groupPolicyUploadedDefinitionFile entity.
*/
class GroupPolicyOperationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyOperations property of the microsoft.graph.groupPolicyUploadedDefinitionFile entity.
     * @param string $groupPolicyOperationId The unique identifier of groupPolicyOperation
     * @return GroupPolicyOperationItemRequestBuilder
    */
    public function byGroupPolicyOperationId(string $groupPolicyOperationId): GroupPolicyOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupPolicyOperation%2Did'] = $groupPolicyOperationId;
        return new GroupPolicyOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupPolicyOperationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/groupPolicyUploadedDefinitionFiles/{groupPolicyUploadedDefinitionFile%2Did}/groupPolicyOperations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of operations on the uploaded ADMX file.
     * @param GroupPolicyOperationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyOperationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GroupPolicyOperationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyOperationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to groupPolicyOperations for deviceManagement
     * @param GroupPolicyOperation $body The request body
     * @param GroupPolicyOperationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyOperation|null>
     * @throws Exception
    */
    public function post(GroupPolicyOperation $body, ?GroupPolicyOperationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of operations on the uploaded ADMX file.
     * @param GroupPolicyOperationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupPolicyOperationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to groupPolicyOperations for deviceManagement
     * @param GroupPolicyOperation $body The request body
     * @param GroupPolicyOperationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GroupPolicyOperation $body, ?GroupPolicyOperationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GroupPolicyOperationsRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupPolicyOperationsRequestBuilder {
        return new GroupPolicyOperationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
