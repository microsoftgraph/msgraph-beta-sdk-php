<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item\ClearEnrollmentTimeDeviceMembershipTarget\ClearEnrollmentTimeDeviceMembershipTargetRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item\CreateToken\CreateTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item\RetrieveEnrollmentTimeDeviceMembershipTarget\RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item\RevokeToken\RevokeTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item\SetEnrollmentTimeDeviceMembershipTarget\SetEnrollmentTimeDeviceMembershipTargetRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AndroidDeviceOwnerEnrollmentProfile;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the androidDeviceOwnerEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
*/
class AndroidDeviceOwnerEnrollmentProfileItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the clearEnrollmentTimeDeviceMembershipTarget method.
    */
    public function clearEnrollmentTimeDeviceMembershipTarget(): ClearEnrollmentTimeDeviceMembershipTargetRequestBuilder {
        return new ClearEnrollmentTimeDeviceMembershipTargetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createToken method.
    */
    public function createToken(): CreateTokenRequestBuilder {
        return new CreateTokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveEnrollmentTimeDeviceMembershipTarget method.
    */
    public function retrieveEnrollmentTimeDeviceMembershipTarget(): RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder {
        return new RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeToken method.
    */
    public function revokeToken(): RevokeTokenRequestBuilder {
        return new RevokeTokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setEnrollmentTimeDeviceMembershipTarget method.
    */
    public function setEnrollmentTimeDeviceMembershipTarget(): SetEnrollmentTimeDeviceMembershipTargetRequestBuilder {
        return new SetEnrollmentTimeDeviceMembershipTargetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AndroidDeviceOwnerEnrollmentProfileItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/androidDeviceOwnerEnrollmentProfiles/{androidDeviceOwnerEnrollmentProfile%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property androidDeviceOwnerEnrollmentProfiles for deviceManagement
     * @param AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Android device owner enrollment profile entities.
     * @param AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidDeviceOwnerEnrollmentProfile|null>
     * @throws Exception
    */
    public function get(?AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidDeviceOwnerEnrollmentProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property androidDeviceOwnerEnrollmentProfiles in deviceManagement
     * @param AndroidDeviceOwnerEnrollmentProfile $body The request body
     * @param AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidDeviceOwnerEnrollmentProfile|null>
     * @throws Exception
    */
    public function patch(AndroidDeviceOwnerEnrollmentProfile $body, ?AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidDeviceOwnerEnrollmentProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property androidDeviceOwnerEnrollmentProfiles for deviceManagement
     * @param AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Android device owner enrollment profile entities.
     * @param AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property androidDeviceOwnerEnrollmentProfiles in deviceManagement
     * @param AndroidDeviceOwnerEnrollmentProfile $body The request body
     * @param AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AndroidDeviceOwnerEnrollmentProfile $body, ?AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AndroidDeviceOwnerEnrollmentProfileItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AndroidDeviceOwnerEnrollmentProfileItemRequestBuilder {
        return new AndroidDeviceOwnerEnrollmentProfileItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
