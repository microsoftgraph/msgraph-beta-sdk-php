<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitionFiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitionFiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitionFiles\Item\GroupPolicyDefinitionFileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinitionFile;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinitionFileCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the groupPolicyDefinitionFiles property of the microsoft.graph.deviceManagement entity.
*/
class GroupPolicyDefinitionFilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyDefinitionFiles property of the microsoft.graph.deviceManagement entity.
     * @param string $groupPolicyDefinitionFileId The unique identifier of groupPolicyDefinitionFile
     * @return GroupPolicyDefinitionFileItemRequestBuilder
    */
    public function byGroupPolicyDefinitionFileId(string $groupPolicyDefinitionFileId): GroupPolicyDefinitionFileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupPolicyDefinitionFile%2Did'] = $groupPolicyDefinitionFileId;
        return new GroupPolicyDefinitionFileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupPolicyDefinitionFilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/groupPolicyDefinitionFiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The available group policy definition files for this account.
     * @param GroupPolicyDefinitionFilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyDefinitionFileCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GroupPolicyDefinitionFilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyDefinitionFileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to groupPolicyDefinitionFiles for deviceManagement
     * @param GroupPolicyDefinitionFile $body The request body
     * @param GroupPolicyDefinitionFilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyDefinitionFile|null>
     * @throws Exception
    */
    public function post(GroupPolicyDefinitionFile $body, ?GroupPolicyDefinitionFilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyDefinitionFile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The available group policy definition files for this account.
     * @param GroupPolicyDefinitionFilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupPolicyDefinitionFilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to groupPolicyDefinitionFiles for deviceManagement
     * @param GroupPolicyDefinitionFile $body The request body
     * @param GroupPolicyDefinitionFilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GroupPolicyDefinitionFile $body, ?GroupPolicyDefinitionFilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GroupPolicyDefinitionFilesRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupPolicyDefinitionFilesRequestBuilder {
        return new GroupPolicyDefinitionFilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
