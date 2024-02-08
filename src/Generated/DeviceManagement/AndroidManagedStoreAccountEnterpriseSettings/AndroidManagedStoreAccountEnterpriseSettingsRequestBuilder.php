<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\AddApps\AddAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\ApproveApps\ApproveAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\CompleteSignup\CompleteSignupRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\CreateGooglePlayWebToken\CreateGooglePlayWebTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\RequestSignupUrl\RequestSignupUrlRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\SetAndroidDeviceOwnerFullyManagedEnrollmentState\SetAndroidDeviceOwnerFullyManagedEnrollmentStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\SyncApps\SyncAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\Unbind\UnbindRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AndroidManagedStoreAccountEnterpriseSettings;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the androidManagedStoreAccountEnterpriseSettings property of the microsoft.graph.deviceManagement entity.
*/
class AndroidManagedStoreAccountEnterpriseSettingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the addApps method.
    */
    public function addApps(): AddAppsRequestBuilder {
        return new AddAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the approveApps method.
    */
    public function approveApps(): ApproveAppsRequestBuilder {
        return new ApproveAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the completeSignup method.
    */
    public function completeSignup(): CompleteSignupRequestBuilder {
        return new CompleteSignupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createGooglePlayWebToken method.
    */
    public function createGooglePlayWebToken(): CreateGooglePlayWebTokenRequestBuilder {
        return new CreateGooglePlayWebTokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the requestSignupUrl method.
    */
    public function requestSignupUrl(): RequestSignupUrlRequestBuilder {
        return new RequestSignupUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setAndroidDeviceOwnerFullyManagedEnrollmentState method.
    */
    public function setAndroidDeviceOwnerFullyManagedEnrollmentState(): SetAndroidDeviceOwnerFullyManagedEnrollmentStateRequestBuilder {
        return new SetAndroidDeviceOwnerFullyManagedEnrollmentStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncApps method.
    */
    public function syncApps(): SyncAppsRequestBuilder {
        return new SyncAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unbind method.
    */
    public function unbind(): UnbindRequestBuilder {
        return new UnbindRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AndroidManagedStoreAccountEnterpriseSettingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/androidManagedStoreAccountEnterpriseSettings{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property androidManagedStoreAccountEnterpriseSettings for deviceManagement
     * @param AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The singleton Android managed store account enterprise settings entity.
     * @param AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidManagedStoreAccountEnterpriseSettings|null>
     * @throws Exception
    */
    public function get(?AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidManagedStoreAccountEnterpriseSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property androidManagedStoreAccountEnterpriseSettings in deviceManagement
     * @param AndroidManagedStoreAccountEnterpriseSettings $body The request body
     * @param AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidManagedStoreAccountEnterpriseSettings|null>
     * @throws Exception
    */
    public function patch(AndroidManagedStoreAccountEnterpriseSettings $body, ?AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidManagedStoreAccountEnterpriseSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property androidManagedStoreAccountEnterpriseSettings for deviceManagement
     * @param AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The singleton Android managed store account enterprise settings entity.
     * @param AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property androidManagedStoreAccountEnterpriseSettings in deviceManagement
     * @param AndroidManagedStoreAccountEnterpriseSettings $body The request body
     * @param AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AndroidManagedStoreAccountEnterpriseSettings $body, ?AndroidManagedStoreAccountEnterpriseSettingsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AndroidManagedStoreAccountEnterpriseSettingsRequestBuilder
    */
    public function withUrl(string $rawUrl): AndroidManagedStoreAccountEnterpriseSettingsRequestBuilder {
        return new AndroidManagedStoreAccountEnterpriseSettingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
