<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\DefaultIosEnrollmentProfile\DefaultIosEnrollmentProfileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\DefaultMacOsEnrollmentProfile\DefaultMacOsEnrollmentProfileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\EnrollmentProfiles\EnrollmentProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\EnrollmentProfiles\Item\EnrollmentProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\GenerateEncryptionPublicKey\GenerateEncryptionPublicKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\GetEncryptionPublicKey\GetEncryptionPublicKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\ImportedAppleDeviceIdentities\ImportedAppleDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\ImportedAppleDeviceIdentities\Item\ImportedAppleDeviceIdentityItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\ShareForSchoolDataSyncService\ShareForSchoolDataSyncServiceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\SyncWithAppleDeviceEnrollmentProgram\SyncWithAppleDeviceEnrollmentProgramRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\UnshareForSchoolDataSyncService\UnshareForSchoolDataSyncServiceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\UploadDepToken\UploadDepTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DepOnboardingSetting;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DepOnboardingSettingItemRequestBuilder 
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
     * Provides operations to manage the importedAppleDeviceIdentities property of the microsoft.graph.depOnboardingSetting entity.
    */
    public function importedAppleDeviceIdentities(): ImportedAppleDeviceIdentitiesRequestBuilder {
        return new ImportedAppleDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new DepOnboardingSettingItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/depOnboardingSettings/{depOnboardingSetting%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property depOnboardingSettings for deviceManagement
     * @param DepOnboardingSettingItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?DepOnboardingSettingItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the enrollmentProfiles property of the microsoft.graph.depOnboardingSetting entity.
     * @param string $id Unique identifier of the item
     * @return EnrollmentProfileItemRequestBuilder
    */
    public function enrollmentProfilesById(string $id): EnrollmentProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['enrollmentProfile%2Did'] = $id;
        return new EnrollmentProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * This collections of multiple DEP tokens per-tenant.
     * @param DepOnboardingSettingItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DepOnboardingSettingItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DepOnboardingSetting::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getEncryptionPublicKey method.
     * @return GetEncryptionPublicKeyRequestBuilder
    */
    public function getEncryptionPublicKey(): GetEncryptionPublicKeyRequestBuilder {
        return new GetEncryptionPublicKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the importedAppleDeviceIdentities property of the microsoft.graph.depOnboardingSetting entity.
     * @param string $id Unique identifier of the item
     * @return ImportedAppleDeviceIdentityItemRequestBuilder
    */
    public function importedAppleDeviceIdentitiesById(string $id): ImportedAppleDeviceIdentityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['importedAppleDeviceIdentity%2Did'] = $id;
        return new ImportedAppleDeviceIdentityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property depOnboardingSettings in deviceManagement
     * @param DepOnboardingSetting $body The request body
     * @param DepOnboardingSettingItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DepOnboardingSetting $body, ?DepOnboardingSettingItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DepOnboardingSetting::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
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
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
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
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
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
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
