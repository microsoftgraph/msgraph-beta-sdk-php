<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\Item\Audience\ApplicableContent\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\Item\Audience\ApplicableContent\Item\CatalogEntry\CatalogEntryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\Item\Audience\ApplicableContent\Item\MatchedDevices\MatchedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\ApplicableContent;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the applicableContent property of the microsoft.graph.windowsUpdates.deploymentAudience entity.
*/
class ApplicableContentCatalogEntryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the catalogEntry property of the microsoft.graph.windowsUpdates.applicableContent entity.
    */
    public function catalogEntry(): CatalogEntryRequestBuilder {
        return new CatalogEntryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the matchedDevices property of the microsoft.graph.windowsUpdates.applicableContent entity.
    */
    public function matchedDevices(): MatchedDevicesRequestBuilder {
        return new MatchedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApplicableContentCatalogEntryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/updatePolicies/{updatePolicy%2Did}/audience/applicableContent/{applicableContent%2DcatalogEntryId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property applicableContent for admin
     * @param ApplicableContentCatalogEntryItemRequestBuilderDeleteRe_5d0c54f1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ApplicableContentCatalogEntryItemRequestBuilderDeleteRe_5d0c54f1 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Content eligible to deploy to devices in the audience. Not nullable. Read-only.
     * @param ApplicableContentCatalogEntryItemRequestBuilderGetReque_060c92af|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicableContent|null>
     * @throws Exception
    */
    public function get(?ApplicableContentCatalogEntryItemRequestBuilderGetReque_060c92af $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicableContent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property applicableContent in admin
     * @param ApplicableContent $body The request body
     * @param ApplicableContentCatalogEntryItemRequestBuilderPatchReq_5a89ab05|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicableContent|null>
     * @throws Exception
    */
    public function patch(ApplicableContent $body, ?ApplicableContentCatalogEntryItemRequestBuilderPatchReq_5a89ab05 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicableContent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property applicableContent for admin
     * @param ApplicableContentCatalogEntryItemRequestBuilderDeleteRe_5d0c54f1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ApplicableContentCatalogEntryItemRequestBuilderDeleteRe_5d0c54f1 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Content eligible to deploy to devices in the audience. Not nullable. Read-only.
     * @param ApplicableContentCatalogEntryItemRequestBuilderGetReque_060c92af|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicableContentCatalogEntryItemRequestBuilderGetReque_060c92af $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property applicableContent in admin
     * @param ApplicableContent $body The request body
     * @param ApplicableContentCatalogEntryItemRequestBuilderPatchReq_5a89ab05|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ApplicableContent $body, ?ApplicableContentCatalogEntryItemRequestBuilderPatchReq_5a89ab05 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return ApplicableContentCatalogEntryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplicableContentCatalogEntryItemRequestBuilder {
        return new ApplicableContentCatalogEntryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
