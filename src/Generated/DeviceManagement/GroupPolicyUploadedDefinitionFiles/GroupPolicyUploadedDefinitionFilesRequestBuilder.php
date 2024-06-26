<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\GroupPolicyUploadedDefinitionFileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyUploadedDefinitionFile;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyUploadedDefinitionFileCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the groupPolicyUploadedDefinitionFiles property of the microsoft.graph.deviceManagement entity.
*/
class GroupPolicyUploadedDefinitionFilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyUploadedDefinitionFiles property of the microsoft.graph.deviceManagement entity.
     * @param string $groupPolicyUploadedDefinitionFileId The unique identifier of groupPolicyUploadedDefinitionFile
     * @return GroupPolicyUploadedDefinitionFileItemRequestBuilder
    */
    public function byGroupPolicyUploadedDefinitionFileId(string $groupPolicyUploadedDefinitionFileId): GroupPolicyUploadedDefinitionFileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupPolicyUploadedDefinitionFile%2Did'] = $groupPolicyUploadedDefinitionFileId;
        return new GroupPolicyUploadedDefinitionFileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupPolicyUploadedDefinitionFilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/groupPolicyUploadedDefinitionFiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The available group policy uploaded definition files for this account.
     * @param GroupPolicyUploadedDefinitionFilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyUploadedDefinitionFileCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GroupPolicyUploadedDefinitionFilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyUploadedDefinitionFileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to groupPolicyUploadedDefinitionFiles for deviceManagement
     * @param GroupPolicyUploadedDefinitionFile $body The request body
     * @param GroupPolicyUploadedDefinitionFilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyUploadedDefinitionFile|null>
     * @throws Exception
    */
    public function post(GroupPolicyUploadedDefinitionFile $body, ?GroupPolicyUploadedDefinitionFilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyUploadedDefinitionFile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The available group policy uploaded definition files for this account.
     * @param GroupPolicyUploadedDefinitionFilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupPolicyUploadedDefinitionFilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to groupPolicyUploadedDefinitionFiles for deviceManagement
     * @param GroupPolicyUploadedDefinitionFile $body The request body
     * @param GroupPolicyUploadedDefinitionFilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GroupPolicyUploadedDefinitionFile $body, ?GroupPolicyUploadedDefinitionFilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GroupPolicyUploadedDefinitionFilesRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupPolicyUploadedDefinitionFilesRequestBuilder {
        return new GroupPolicyUploadedDefinitionFilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
