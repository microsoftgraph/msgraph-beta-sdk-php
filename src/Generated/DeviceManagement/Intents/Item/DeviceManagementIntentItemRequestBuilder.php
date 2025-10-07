<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\Assign\AssignRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\Categories\CategoriesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\CompareWithTemplateId\CompareWithTemplateIdRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\CreateCopy\CreateCopyRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\DeviceSettingStateSummaries\DeviceSettingStateSummariesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\DeviceStates\DeviceStatesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\DeviceStateSummary\DeviceStateSummaryRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\GetCustomizedSettings\GetCustomizedSettingsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\MigrateToTemplate\MigrateToTemplateRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\Settings\SettingsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\UpdateSettings\UpdateSettingsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\UserStates\UserStatesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\UserStateSummary\UserStateSummaryRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceManagementIntent;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the intents property of the microsoft.graph.deviceManagement entity.
*/
class DeviceManagementIntentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the categories property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createCopy method.
    */
    public function createCopy(): CreateCopyRequestBuilder {
        return new CreateCopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceSettingStateSummaries property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function deviceSettingStateSummaries(): DeviceSettingStateSummariesRequestBuilder {
        return new DeviceSettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStates property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function deviceStates(): DeviceStatesRequestBuilder {
        return new DeviceStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStateSummary property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function deviceStateSummary(): DeviceStateSummaryRequestBuilder {
        return new DeviceStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCustomizedSettings method.
    */
    public function getCustomizedSettings(): GetCustomizedSettingsRequestBuilder {
        return new GetCustomizedSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the migrateToTemplate method.
    */
    public function migrateToTemplate(): MigrateToTemplateRequestBuilder {
        return new MigrateToTemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateSettings method.
    */
    public function updateSettings(): UpdateSettingsRequestBuilder {
        return new UpdateSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userStates property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function userStates(): UserStatesRequestBuilder {
        return new UserStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userStateSummary property of the microsoft.graph.deviceManagementIntent entity.
    */
    public function userStateSummary(): UserStateSummaryRequestBuilder {
        return new UserStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the compare method.
     * @param string $templateId Usage: templateId='{templateId}'
     * @return CompareWithTemplateIdRequestBuilder
    */
    public function compareWithTemplateId(string $templateId): CompareWithTemplateIdRequestBuilder {
        return new CompareWithTemplateIdRequestBuilder($this->pathParameters, $this->requestAdapter, $templateId);
    }

    /**
     * Instantiates a new DeviceManagementIntentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/intents/{deviceManagementIntent%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property intents for deviceManagement
     * @param DeviceManagementIntentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementIntentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The device management intents
     * @param DeviceManagementIntentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementIntent|null>
     * @throws Exception
    */
    public function get(?DeviceManagementIntentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property intents in deviceManagement
     * @param DeviceManagementIntent $body The request body
     * @param DeviceManagementIntentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementIntent|null>
     * @throws Exception
    */
    public function patch(DeviceManagementIntent $body, ?DeviceManagementIntentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property intents for deviceManagement
     * @param DeviceManagementIntentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementIntentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The device management intents
     * @param DeviceManagementIntentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementIntentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property intents in deviceManagement
     * @param DeviceManagementIntent $body The request body
     * @param DeviceManagementIntentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementIntent $body, ?DeviceManagementIntentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementIntentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementIntentItemRequestBuilder {
        return new DeviceManagementIntentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
