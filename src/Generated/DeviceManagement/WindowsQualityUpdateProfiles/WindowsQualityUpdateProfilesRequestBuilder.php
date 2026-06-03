<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdateProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdateProfiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdateProfiles\Item\WindowsQualityUpdateProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsQualityUpdateProfile;
use Microsoft\Graph\Beta\Generated\Models\WindowsQualityUpdateProfileCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsQualityUpdateProfiles property of the microsoft.graph.deviceManagement entity.
*/
class WindowsQualityUpdateProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsQualityUpdateProfiles property of the microsoft.graph.deviceManagement entity.
     * @param string $windowsQualityUpdateProfileId The unique identifier of windowsQualityUpdateProfile
     * @return WindowsQualityUpdateProfileItemRequestBuilder
    */
    public function byWindowsQualityUpdateProfileId(string $windowsQualityUpdateProfileId): WindowsQualityUpdateProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsQualityUpdateProfile%2Did'] = $windowsQualityUpdateProfileId;
        return new WindowsQualityUpdateProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsQualityUpdateProfilesRequestBuilder and sets the default values.
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
     * A collection of windows quality update profiles
     * @param WindowsQualityUpdateProfilesRequestBuilderGetRequestCon_5f1e275e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsQualityUpdateProfileCollectionResponse|null>
     * @throws Exception
    */
    public function get(?WindowsQualityUpdateProfilesRequestBuilderGetRequestCon_5f1e275e $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsQualityUpdateProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to windowsQualityUpdateProfiles for deviceManagement
     * @param WindowsQualityUpdateProfile $body The request body
     * @param WindowsQualityUpdateProfilesRequestBuilderPostRequestCo_c3882948|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsQualityUpdateProfile|null>
     * @throws Exception
    */
    public function post(WindowsQualityUpdateProfile $body, ?WindowsQualityUpdateProfilesRequestBuilderPostRequestCo_c3882948 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsQualityUpdateProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of windows quality update profiles
     * @param WindowsQualityUpdateProfilesRequestBuilderGetRequestCon_5f1e275e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsQualityUpdateProfilesRequestBuilderGetRequestCon_5f1e275e $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to windowsQualityUpdateProfiles for deviceManagement
     * @param WindowsQualityUpdateProfile $body The request body
     * @param WindowsQualityUpdateProfilesRequestBuilderPostRequestCo_c3882948|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WindowsQualityUpdateProfile $body, ?WindowsQualityUpdateProfilesRequestBuilderPostRequestCo_c3882948 $requestConfiguration = null): RequestInformation {
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
     * @return WindowsQualityUpdateProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsQualityUpdateProfilesRequestBuilder {
        return new WindowsQualityUpdateProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
