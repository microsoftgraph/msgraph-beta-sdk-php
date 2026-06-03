<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DerivedCredentials\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementDerivedCredentialSettings;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the derivedCredentials property of the microsoft.graph.deviceManagement entity.
*/
class DeviceManagementDerivedCredentialSettingsItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceManagementDerivedCredentialSettingsItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/derivedCredentials/{deviceManagementDerivedCredentialSettings%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property derivedCredentials for deviceManagement
     * @param DeviceManagementDerivedCredentialSettingsItemRequestBui_86c642b6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementDerivedCredentialSettingsItemRequestBui_86c642b6 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Collection of Derived credential settings associated with account.
     * @param DeviceManagementDerivedCredentialSettingsItemRequestBui_cf7063e4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementDerivedCredentialSettings|null>
     * @throws Exception
    */
    public function get(?DeviceManagementDerivedCredentialSettingsItemRequestBui_cf7063e4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property derivedCredentials in deviceManagement
     * @param DeviceManagementDerivedCredentialSettings $body The request body
     * @param DeviceManagementDerivedCredentialSettingsItemRequestBui_5a1e6241|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementDerivedCredentialSettings|null>
     * @throws Exception
    */
    public function patch(DeviceManagementDerivedCredentialSettings $body, ?DeviceManagementDerivedCredentialSettingsItemRequestBui_5a1e6241 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property derivedCredentials for deviceManagement
     * @param DeviceManagementDerivedCredentialSettingsItemRequestBui_86c642b6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementDerivedCredentialSettingsItemRequestBui_86c642b6 $requestConfiguration = null): RequestInformation {
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
     * Collection of Derived credential settings associated with account.
     * @param DeviceManagementDerivedCredentialSettingsItemRequestBui_cf7063e4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementDerivedCredentialSettingsItemRequestBui_cf7063e4 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property derivedCredentials in deviceManagement
     * @param DeviceManagementDerivedCredentialSettings $body The request body
     * @param DeviceManagementDerivedCredentialSettingsItemRequestBui_5a1e6241|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementDerivedCredentialSettings $body, ?DeviceManagementDerivedCredentialSettingsItemRequestBui_5a1e6241 $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementDerivedCredentialSettingsItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementDerivedCredentialSettingsItemRequestBuilder {
        return new DeviceManagementDerivedCredentialSettingsItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
