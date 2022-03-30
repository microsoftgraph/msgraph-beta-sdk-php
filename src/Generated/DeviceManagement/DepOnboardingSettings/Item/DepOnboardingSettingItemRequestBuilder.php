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
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DepOnboardingSetting;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DepOnboardingSettingItemRequestBuilder 
{
    public function defaultIosEnrollmentProfile(): DefaultIosEnrollmentProfileRequestBuilder {
        return new DefaultIosEnrollmentProfileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function defaultMacOsEnrollmentProfile(): DefaultMacOsEnrollmentProfileRequestBuilder {
        return new DefaultMacOsEnrollmentProfileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function enrollmentProfiles(): EnrollmentProfilesRequestBuilder {
        return new EnrollmentProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function generateEncryptionPublicKey(): GenerateEncryptionPublicKeyRequestBuilder {
        return new GenerateEncryptionPublicKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function importedAppleDeviceIdentities(): ImportedAppleDeviceIdentitiesRequestBuilder {
        return new ImportedAppleDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function shareForSchoolDataSyncService(): ShareForSchoolDataSyncServiceRequestBuilder {
        return new ShareForSchoolDataSyncServiceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function syncWithAppleDeviceEnrollmentProgram(): SyncWithAppleDeviceEnrollmentProgramRequestBuilder {
        return new SyncWithAppleDeviceEnrollmentProgramRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function unshareForSchoolDataSyncService(): UnshareForSchoolDataSyncServiceRequestBuilder {
        return new UnshareForSchoolDataSyncServiceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function uploadDepToken(): UploadDepTokenRequestBuilder {
        return new UploadDepTokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new DepOnboardingSettingItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/depOnboardingSettings/{depOnboardingSetting_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property depOnboardingSettings for deviceManagement
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * This collections of multiple DEP tokens per-tenant.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property depOnboardingSettings in deviceManagement
     * @param DepOnboardingSetting $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DepOnboardingSetting $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property depOnboardingSettings for deviceManagement
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.depOnboardingSettings.item.enrollmentProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return EnrollmentProfileItemRequestBuilder
    */
    public function enrollmentProfilesById(string $id): EnrollmentProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['enrollmentProfile_id'] = $id;
        return new EnrollmentProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * This collections of multiple DEP tokens per-tenant.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DepOnboardingSetting::class, $responseHandler);
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.depOnboardingSettings.item.importedAppleDeviceIdentities.item collection
     * @param string $id Unique identifier of the item
     * @return ImportedAppleDeviceIdentityItemRequestBuilder
    */
    public function importedAppleDeviceIdentitiesById(string $id): ImportedAppleDeviceIdentityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['importedAppleDeviceIdentity_id'] = $id;
        return new ImportedAppleDeviceIdentityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property depOnboardingSettings in deviceManagement
     * @param DepOnboardingSetting $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DepOnboardingSetting $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
