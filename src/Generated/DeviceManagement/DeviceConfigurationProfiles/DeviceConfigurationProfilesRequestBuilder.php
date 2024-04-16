<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationProfiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationProfiles\Item\DeviceConfigurationProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceConfigurationProfile;
use Microsoft\Graph\Beta\Generated\Models\DeviceConfigurationProfileCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceConfigurationProfiles property of the microsoft.graph.deviceManagement entity.
*/
class DeviceConfigurationProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationProfiles property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceConfigurationProfileId The unique identifier of deviceConfigurationProfile
     * @return DeviceConfigurationProfileItemRequestBuilder
    */
    public function byDeviceConfigurationProfileId(string $deviceConfigurationProfileId): DeviceConfigurationProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationProfile%2Did'] = $deviceConfigurationProfileId;
        return new DeviceConfigurationProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceConfigurationProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceConfigurationProfiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Profile Id of the object.
     * @param DeviceConfigurationProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfigurationProfileCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceConfigurationProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfigurationProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceConfigurationProfiles for deviceManagement
     * @param DeviceConfigurationProfile $body The request body
     * @param DeviceConfigurationProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfigurationProfile|null>
     * @throws Exception
    */
    public function post(DeviceConfigurationProfile $body, ?DeviceConfigurationProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfigurationProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Profile Id of the object.
     * @param DeviceConfigurationProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceConfigurationProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceConfigurationProfiles for deviceManagement
     * @param DeviceConfigurationProfile $body The request body
     * @param DeviceConfigurationProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceConfigurationProfile $body, ?DeviceConfigurationProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceConfigurationProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceConfigurationProfilesRequestBuilder {
        return new DeviceConfigurationProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
