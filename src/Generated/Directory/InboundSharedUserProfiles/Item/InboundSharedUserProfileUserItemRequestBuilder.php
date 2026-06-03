<?php

namespace Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\Item\ExportPersonalData\ExportPersonalDataRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\Item\RemovePersonalData\RemovePersonalDataRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\InboundSharedUserProfile;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the inboundSharedUserProfiles property of the microsoft.graph.directory entity.
*/
class InboundSharedUserProfileUserItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the exportPersonalData method.
    */
    public function exportPersonalData(): ExportPersonalDataRequestBuilder {
        return new ExportPersonalDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removePersonalData method.
    */
    public function removePersonalData(): RemovePersonalDataRequestBuilder {
        return new RemovePersonalDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InboundSharedUserProfileUserItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/inboundSharedUserProfiles/{inboundSharedUserProfile%2DuserId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property inboundSharedUserProfiles for directory
     * @param InboundSharedUserProfileUserItemRequestBuilderDeleteReq_3b018cbc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?InboundSharedUserProfileUserItemRequestBuilderDeleteReq_3b018cbc $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties of an inboundSharedUserProfile.
     * @param InboundSharedUserProfileUserItemRequestBuilderGetReques_a0e876f3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InboundSharedUserProfile|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/inboundshareduserprofile-get?view=graph-rest-beta Find more info here
    */
    public function get(?InboundSharedUserProfileUserItemRequestBuilderGetReques_a0e876f3 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InboundSharedUserProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property inboundSharedUserProfiles in directory
     * @param InboundSharedUserProfile $body The request body
     * @param InboundSharedUserProfileUserItemRequestBuilderPatchRequ_9d7392b4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InboundSharedUserProfile|null>
     * @throws Exception
    */
    public function patch(InboundSharedUserProfile $body, ?InboundSharedUserProfileUserItemRequestBuilderPatchRequ_9d7392b4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InboundSharedUserProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property inboundSharedUserProfiles for directory
     * @param InboundSharedUserProfileUserItemRequestBuilderDeleteReq_3b018cbc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?InboundSharedUserProfileUserItemRequestBuilderDeleteReq_3b018cbc $requestConfiguration = null): RequestInformation {
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
     * Read the properties of an inboundSharedUserProfile.
     * @param InboundSharedUserProfileUserItemRequestBuilderGetReques_a0e876f3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InboundSharedUserProfileUserItemRequestBuilderGetReques_a0e876f3 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property inboundSharedUserProfiles in directory
     * @param InboundSharedUserProfile $body The request body
     * @param InboundSharedUserProfileUserItemRequestBuilderPatchRequ_9d7392b4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(InboundSharedUserProfile $body, ?InboundSharedUserProfileUserItemRequestBuilderPatchRequ_9d7392b4 $requestConfiguration = null): RequestInformation {
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
     * @return InboundSharedUserProfileUserItemRequestBuilder
    */
    public function withUrl(string $rawUrl): InboundSharedUserProfileUserItemRequestBuilder {
        return new InboundSharedUserProfileUserItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
