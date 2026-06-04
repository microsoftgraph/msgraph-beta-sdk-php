<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationConflictSummary\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DeviceConfigurationConflictSummary;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceConfigurationConflictSummary property of the microsoft.graph.deviceManagement entity.
*/
class DeviceConfigurationConflictSummaryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceConfigurationConflictSummaryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceConfigurationConflictSummary/{deviceConfigurationConflictSummary%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deviceConfigurationConflictSummary for deviceManagement
     * @param DeviceConfigurationConflictSummaryItemRequestBuilderDel_b03ba8a5|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceConfigurationConflictSummaryItemRequestBuilderDel_b03ba8a5 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Summary of policies in conflict state for this account.
     * @param DeviceConfigurationConflictSummaryItemRequestBuilderGet_80bdd7e8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfigurationConflictSummary|null>
     * @throws Exception
    */
    public function get(?DeviceConfigurationConflictSummaryItemRequestBuilderGet_80bdd7e8 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfigurationConflictSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deviceConfigurationConflictSummary in deviceManagement
     * @param DeviceConfigurationConflictSummary $body The request body
     * @param DeviceConfigurationConflictSummaryItemRequestBuilderPat_e895cafd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfigurationConflictSummary|null>
     * @throws Exception
    */
    public function patch(DeviceConfigurationConflictSummary $body, ?DeviceConfigurationConflictSummaryItemRequestBuilderPat_e895cafd $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfigurationConflictSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deviceConfigurationConflictSummary for deviceManagement
     * @param DeviceConfigurationConflictSummaryItemRequestBuilderDel_b03ba8a5|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceConfigurationConflictSummaryItemRequestBuilderDel_b03ba8a5 $requestConfiguration = null): RequestInformation {
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
     * Summary of policies in conflict state for this account.
     * @param DeviceConfigurationConflictSummaryItemRequestBuilderGet_80bdd7e8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceConfigurationConflictSummaryItemRequestBuilderGet_80bdd7e8 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/deviceConfigurationConflictSummary/{deviceConfigurationConflictSummary%2Did}{?%24expand,%24select}';
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
     * Update the navigation property deviceConfigurationConflictSummary in deviceManagement
     * @param DeviceConfigurationConflictSummary $body The request body
     * @param DeviceConfigurationConflictSummaryItemRequestBuilderPat_e895cafd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceConfigurationConflictSummary $body, ?DeviceConfigurationConflictSummaryItemRequestBuilderPat_e895cafd $requestConfiguration = null): RequestInformation {
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
     * @return DeviceConfigurationConflictSummaryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceConfigurationConflictSummaryItemRequestBuilder {
        return new DeviceConfigurationConflictSummaryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
