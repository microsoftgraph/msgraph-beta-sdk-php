<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TeamworkDevice;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\Activity\ActivityRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\Configuration\ConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\Health\HealthRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\Restart\RestartRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\RunDiagnostics\RunDiagnosticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\UpdateSoftware\UpdateSoftwareRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the devices property of the microsoft.graph.teamwork entity.
*/
class TeamworkDeviceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the activity property of the microsoft.graph.teamworkDevice entity.
    */
    public function activity(): ActivityRequestBuilder {
        return new ActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configuration property of the microsoft.graph.teamworkDevice entity.
    */
    public function configuration(): ConfigurationRequestBuilder {
        return new ConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the health property of the microsoft.graph.teamworkDevice entity.
    */
    public function health(): HealthRequestBuilder {
        return new HealthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.teamworkDevice entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restart method.
    */
    public function restart(): RestartRequestBuilder {
        return new RestartRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the runDiagnostics method.
    */
    public function runDiagnostics(): RunDiagnosticsRequestBuilder {
        return new RunDiagnosticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateSoftware method.
    */
    public function updateSoftware(): UpdateSoftwareRequestBuilder {
        return new UpdateSoftwareRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TeamworkDeviceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/devices/{teamworkDevice%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property devices for teamwork
     * @param TeamworkDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?TeamworkDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties of a Microsoft Teams-enabled device. For example, you can use this method to get the device type, hardware detail, activity state, and health status information for a device that's enabled for Teams.
     * @param TeamworkDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkDevice|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamworkdevice-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?TeamworkDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property devices in teamwork
     * @param TeamworkDevice $body The request body
     * @param TeamworkDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkDevice|null>
     * @throws Exception
    */
    public function patch(TeamworkDevice $body, ?TeamworkDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property devices for teamwork
     * @param TeamworkDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TeamworkDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get the properties of a Microsoft Teams-enabled device. For example, you can use this method to get the device type, hardware detail, activity state, and health status information for a device that's enabled for Teams.
     * @param TeamworkDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TeamworkDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property devices in teamwork
     * @param TeamworkDevice $body The request body
     * @param TeamworkDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TeamworkDevice $body, ?TeamworkDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TeamworkDeviceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TeamworkDeviceItemRequestBuilder {
        return new TeamworkDeviceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
