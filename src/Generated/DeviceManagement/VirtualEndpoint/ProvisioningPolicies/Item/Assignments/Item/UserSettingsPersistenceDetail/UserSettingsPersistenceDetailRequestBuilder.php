<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\UserSettingsPersistenceDetail;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\UserSettingsPersistenceDetail\BatchCleanupUserSettingsPersistenceProfile\BatchCleanupUserSettingsPersistenceProfileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\UserSettingsPersistenceDetail\RetrieveUserSettingsPersistenceProfilesWithConfigurationId\RetrieveUserSettingsPersistenceProfilesWithConfiguratio_6fc96f34;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\UserSettingsPersistenceDetail\RetrieveUserSettingsPersistenceProfileUsageWithConfigurationId\RetrieveUserSettingsPersistenceProfileUsageWithConfigur_18b41b94;
use Microsoft\Graph\Beta\Generated\Models\CloudPCUserSettingsPersistenceDetail;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userSettingsPersistenceDetail property of the microsoft.graph.cloudPcProvisioningPolicyAssignment entity.
*/
class UserSettingsPersistenceDetailRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the batchCleanupUserSettingsPersistenceProfile method.
    */
    public function batchCleanupUserSettingsPersistenceProfile(): BatchCleanupUserSettingsPersistenceProfileRequestBuilder {
        return new BatchCleanupUserSettingsPersistenceProfileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UserSettingsPersistenceDetailRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/provisioningPolicies/{cloudPcProvisioningPolicy%2Did}/assignments/{cloudPcProvisioningPolicyAssignment%2Did}/userSettingsPersistenceDetail{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userSettingsPersistenceDetail for deviceManagement
     * @param UserSettingsPersistenceDetailRequestBuilderDeleteReques_dc1d653c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserSettingsPersistenceDetailRequestBuilderDeleteReques_dc1d653c $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The assignment targeted user settings persistence for the provisioning policy. It allows user application data and Windows settings to be saved and applied between sessions.
     * @param UserSettingsPersistenceDetailRequestBuilderGetRequestCo_66273237|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPCUserSettingsPersistenceDetail|null>
     * @throws Exception
    */
    public function get(?UserSettingsPersistenceDetailRequestBuilderGetRequestCo_66273237 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPCUserSettingsPersistenceDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userSettingsPersistenceDetail in deviceManagement
     * @param CloudPCUserSettingsPersistenceDetail $body The request body
     * @param UserSettingsPersistenceDetailRequestBuilderPatchRequest_a2d56dbd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPCUserSettingsPersistenceDetail|null>
     * @throws Exception
    */
    public function patch(CloudPCUserSettingsPersistenceDetail $body, ?UserSettingsPersistenceDetailRequestBuilderPatchRequest_a2d56dbd $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPCUserSettingsPersistenceDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the retrieveUserSettingsPersistenceProfiles method.
     * @param string $configurationId Usage: configurationId='{configurationId}'
     * @return RetrieveUserSettingsPersistenceProfilesWithConfiguratio_6fc96f34
    */
    public function retrieveUserSettingsPersistenceProfilesWithConfigurationId(string $configurationId): RetrieveUserSettingsPersistenceProfilesWithConfiguratio_6fc96f34 {
        return new RetrieveUserSettingsPersistenceProfilesWithConfiguratio_6fc96f34($this->pathParameters, $this->requestAdapter, $configurationId);
    }

    /**
     * Provides operations to call the retrieveUserSettingsPersistenceProfileUsage method.
     * @param string $configurationId Usage: configurationId='{configurationId}'
     * @return RetrieveUserSettingsPersistenceProfileUsageWithConfigur_18b41b94
    */
    public function retrieveUserSettingsPersistenceProfileUsageWithConfigurationId(string $configurationId): RetrieveUserSettingsPersistenceProfileUsageWithConfigur_18b41b94 {
        return new RetrieveUserSettingsPersistenceProfileUsageWithConfigur_18b41b94($this->pathParameters, $this->requestAdapter, $configurationId);
    }

    /**
     * Delete navigation property userSettingsPersistenceDetail for deviceManagement
     * @param UserSettingsPersistenceDetailRequestBuilderDeleteReques_dc1d653c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserSettingsPersistenceDetailRequestBuilderDeleteReques_dc1d653c $requestConfiguration = null): RequestInformation {
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
     * The assignment targeted user settings persistence for the provisioning policy. It allows user application data and Windows settings to be saved and applied between sessions.
     * @param UserSettingsPersistenceDetailRequestBuilderGetRequestCo_66273237|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserSettingsPersistenceDetailRequestBuilderGetRequestCo_66273237 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property userSettingsPersistenceDetail in deviceManagement
     * @param CloudPCUserSettingsPersistenceDetail $body The request body
     * @param UserSettingsPersistenceDetailRequestBuilderPatchRequest_a2d56dbd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudPCUserSettingsPersistenceDetail $body, ?UserSettingsPersistenceDetailRequestBuilderPatchRequest_a2d56dbd $requestConfiguration = null): RequestInformation {
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
     * @return UserSettingsPersistenceDetailRequestBuilder
    */
    public function withUrl(string $rawUrl): UserSettingsPersistenceDetailRequestBuilder {
        return new UserSettingsPersistenceDetailRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
