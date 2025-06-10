<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\Item\CreateToken\CreateTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\Item\RevokeToken\RevokeTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AndroidForWorkEnrollmentProfile;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the androidForWorkEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
*/
class AndroidForWorkEnrollmentProfileItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the createToken method.
    */
    public function createToken(): CreateTokenRequestBuilder {
        return new CreateTokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeToken method.
    */
    public function revokeToken(): RevokeTokenRequestBuilder {
        return new RevokeTokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AndroidForWorkEnrollmentProfileItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/androidForWorkEnrollmentProfiles/{androidForWorkEnrollmentProfile%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property androidForWorkEnrollmentProfiles for deviceManagement
     * @param AndroidForWorkEnrollmentProfileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AndroidForWorkEnrollmentProfileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Android for Work enrollment profile entities.
     * @param AndroidForWorkEnrollmentProfileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidForWorkEnrollmentProfile|null>
     * @throws Exception
    */
    public function get(?AndroidForWorkEnrollmentProfileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidForWorkEnrollmentProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property androidForWorkEnrollmentProfiles in deviceManagement
     * @param AndroidForWorkEnrollmentProfile $body The request body
     * @param AndroidForWorkEnrollmentProfileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidForWorkEnrollmentProfile|null>
     * @throws Exception
    */
    public function patch(AndroidForWorkEnrollmentProfile $body, ?AndroidForWorkEnrollmentProfileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidForWorkEnrollmentProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property androidForWorkEnrollmentProfiles for deviceManagement
     * @param AndroidForWorkEnrollmentProfileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AndroidForWorkEnrollmentProfileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Android for Work enrollment profile entities.
     * @param AndroidForWorkEnrollmentProfileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AndroidForWorkEnrollmentProfileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property androidForWorkEnrollmentProfiles in deviceManagement
     * @param AndroidForWorkEnrollmentProfile $body The request body
     * @param AndroidForWorkEnrollmentProfileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AndroidForWorkEnrollmentProfile $body, ?AndroidForWorkEnrollmentProfileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AndroidForWorkEnrollmentProfileItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AndroidForWorkEnrollmentProfileItemRequestBuilder {
        return new AndroidForWorkEnrollmentProfileItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
