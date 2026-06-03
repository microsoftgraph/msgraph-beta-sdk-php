<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\UnsupportedGroupPolicyExtensions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\UnsupportedGroupPolicyExtensions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\UnsupportedGroupPolicyExtensions\Item\UnsupportedGroupPolicyExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UnsupportedGroupPolicyExtension;
use Microsoft\Graph\Beta\Generated\Models\UnsupportedGroupPolicyExtensionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the unsupportedGroupPolicyExtensions property of the microsoft.graph.groupPolicyMigrationReport entity.
*/
class UnsupportedGroupPolicyExtensionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the unsupportedGroupPolicyExtensions property of the microsoft.graph.groupPolicyMigrationReport entity.
     * @param string $unsupportedGroupPolicyExtensionId The unique identifier of unsupportedGroupPolicyExtension
     * @return UnsupportedGroupPolicyExtensionItemRequestBuilder
    */
    public function byUnsupportedGroupPolicyExtensionId(string $unsupportedGroupPolicyExtensionId): UnsupportedGroupPolicyExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unsupportedGroupPolicyExtension%2Did'] = $unsupportedGroupPolicyExtensionId;
        return new UnsupportedGroupPolicyExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UnsupportedGroupPolicyExtensionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A list of unsupported group policy extensions inside the Group Policy Object.
     * @param UnsupportedGroupPolicyExtensionsRequestBuilderGetReques_907b3b3d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnsupportedGroupPolicyExtensionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UnsupportedGroupPolicyExtensionsRequestBuilderGetReques_907b3b3d $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnsupportedGroupPolicyExtensionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to unsupportedGroupPolicyExtensions for deviceManagement
     * @param UnsupportedGroupPolicyExtension $body The request body
     * @param UnsupportedGroupPolicyExtensionsRequestBuilderPostReque_55b746e7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnsupportedGroupPolicyExtension|null>
     * @throws Exception
    */
    public function post(UnsupportedGroupPolicyExtension $body, ?UnsupportedGroupPolicyExtensionsRequestBuilderPostReque_55b746e7 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnsupportedGroupPolicyExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A list of unsupported group policy extensions inside the Group Policy Object.
     * @param UnsupportedGroupPolicyExtensionsRequestBuilderGetReques_907b3b3d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UnsupportedGroupPolicyExtensionsRequestBuilderGetReques_907b3b3d $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to unsupportedGroupPolicyExtensions for deviceManagement
     * @param UnsupportedGroupPolicyExtension $body The request body
     * @param UnsupportedGroupPolicyExtensionsRequestBuilderPostReque_55b746e7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnsupportedGroupPolicyExtension $body, ?UnsupportedGroupPolicyExtensionsRequestBuilderPostReque_55b746e7 $requestConfiguration = null): RequestInformation {
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
     * @return UnsupportedGroupPolicyExtensionsRequestBuilder
    */
    public function withUrl(string $rawUrl): UnsupportedGroupPolicyExtensionsRequestBuilder {
        return new UnsupportedGroupPolicyExtensionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
