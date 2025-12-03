<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\UserSettingsPersistenceDetail\RetrieveUserSettingsPersistenceProfilesWithConfigurationId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveUserSettingsPersistenceProfiles method.
*/
class RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $configurationId Usage: configurationId='{configurationId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $configurationId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/provisioningPolicies/{cloudPcProvisioningPolicy%2Did}/assignments/{cloudPcProvisioningPolicyAssignment%2Did}/userSettingsPersistenceDetail/retrieveUserSettingsPersistenceProfiles(configurationId=\'{configurationId}\'){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['configurationId'] = $configurationId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function retrieveUserSettingsPersistenceProfiles
     * @param RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RetrieveUserSettingsPersistenceProfilesWithConfigurationIdGetResponse|null>
     * @throws Exception
    */
    public function get(?RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RetrieveUserSettingsPersistenceProfilesWithConfigurationIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function retrieveUserSettingsPersistenceProfiles
     * @param RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilder {
        return new RetrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
