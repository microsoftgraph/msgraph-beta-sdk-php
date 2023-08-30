<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\DefaultIosEnrollmentProfile\DefaultIosEnrollmentProfileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\DefaultMacOsEnrollmentProfile\DefaultMacOsEnrollmentProfileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\EnrollmentProfiles\EnrollmentProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\GenerateEncryptionPublicKey\GenerateEncryptionPublicKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\GetEncryptionPublicKey\GetEncryptionPublicKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\ImportedAppleDeviceIdentities\ImportedAppleDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\ShareForSchoolDataSyncService\ShareForSchoolDataSyncServiceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\SyncWithAppleDeviceEnrollmentProgram\SyncWithAppleDeviceEnrollmentProgramRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\UnshareForSchoolDataSyncService\UnshareForSchoolDataSyncServiceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\UploadDepToken\UploadDepTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DepOnboardingSetting;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the depOnboardingSettings property of the microsoft.graph.deviceManagement entity.
*/
class DepOnboardingSettingItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the defaultIosEnrollmentProfile property of the microsoft.graph.depOnboardingSetting entity.
    */
    public function defaultIosEnrollmentProfile(): DefaultIosEnrollmentProfileRequestBuilder {
        return new DefaultIosEnrollmentProfileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the defaultMacOsEnrollmentProfile property of the microsoft.graph.depOnboardingSetting entity.
    */
    public function defaultMacOsEnrollmentProfile(): DefaultMacOsEnrollmentProfileRequestBuilder {
        return new DefaultMacOsEnrollmentProfileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the enrollmentProfiles property of the microsoft.graph.depOnboardingSetting entity.
    */
    public function enrollmentProfiles(): EnrollmentProfilesRequestBuilder {
        return new EnrollmentProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the generateEncryptionPublicKey method.
    */
    public function generateEncryptionPublicKey(): GenerateEncryptionPublicKeyRequestBuilder {
        return new GenerateEncryptionPublicKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getEncryptionPublicKey method.
    */
    public function getEncryptionPublicKey(): GetEncryptionPublicKeyRequestBuilder {
        return new GetEncryptionPublicKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the importedAppleDeviceIdentities property of the microsoft.graph.depOnboardingSetting entity.
    */
    public function importedAppleDeviceIdentities(): ImportedAppleDeviceIdentitiesRequestBuilder {
        return new ImportedAppleDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the shareForSchoolDataSyncService method.
    */
    public function shareForSchoolDataSyncService(): ShareForSchoolDataSyncServiceRequestBuilder {
        return new ShareForSchoolDataSyncServiceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncWithAppleDeviceEnrollmentProgram method.
    */
    public function syncWithAppleDeviceEnrollmentProgram(): SyncWithAppleDeviceEnrollmentProgramRequestBuilder {
        return new SyncWithAppleDeviceEnrollmentProgramRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unshareForSchoolDataSyncService method.
    */
    public function unshareForSchoolDataSyncService(): UnshareForSchoolDataSyncServiceRequestBuilder {
        return new UnshareForSchoolDataSyncServiceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the uploadDepToken method.
    */
    public function uploadDepToken(): UploadDepTokenRequestBuilder {
        return new UploadDepTokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DepOnboardingSettingItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/depOnboardingSettings/{depOnboardingSetting%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property depOnboardingSettings for deviceManagement
     * @param DepOnboardingSettingItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?DepOnboardingSettingItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * This collections of multiple DEP tokens per-tenant.
     * @param DepOnboardingSettingItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?DepOnboardingSettingItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DepOnboardingSetting::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property depOnboardingSettings in deviceManagement
     * @param DepOnboardingSetting $body The request body
     * @param DepOnboardingSettingItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(DepOnboardingSetting $body, ?DepOnboardingSettingItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DepOnboardingSetting::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property depOnboardingSettings for deviceManagement
     * @param DepOnboardingSettingItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DepOnboardingSettingItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * This collections of multiple DEP tokens per-tenant.
     * @param DepOnboardingSettingItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DepOnboardingSettingItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property depOnboardingSettings in deviceManagement
     * @param DepOnboardingSetting $body The request body
     * @param DepOnboardingSettingItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DepOnboardingSetting $body, ?DepOnboardingSettingItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DepOnboardingSettingItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DepOnboardingSettingItemRequestBuilder {
        return new DepOnboardingSettingItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
