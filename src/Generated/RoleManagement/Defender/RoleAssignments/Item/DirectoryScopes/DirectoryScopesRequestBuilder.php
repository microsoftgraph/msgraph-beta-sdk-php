<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Defender\RoleAssignments\Item\DirectoryScopes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DirectoryObjectCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\RoleManagement\Defender\RoleAssignments\Item\DirectoryScopes\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Defender\RoleAssignments\Item\DirectoryScopes\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the directoryScopes property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
*/
class DirectoryScopesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directoryScopes property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
     * @param string $directoryObjectId The unique identifier of directoryObject
     * @return DirectoryObjectItemRequestBuilder
    */
    public function byDirectoryObjectId(string $directoryObjectId): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $directoryObjectId;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DirectoryScopesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/defender/roleAssignments/{unifiedRoleAssignmentMultiple%2Did}/directoryScopes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read-only collection that references the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only. Supports $expand.
     * @param DirectoryScopesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryObjectCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DirectoryScopesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryObjectCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read-only collection that references the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only. Supports $expand.
     * @param DirectoryScopesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DirectoryScopesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DirectoryScopesRequestBuilder
    */
    public function withUrl(string $rawUrl): DirectoryScopesRequestBuilder {
        return new DirectoryScopesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
