<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries\Item\AggregatedDevices;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries\Item\AggregatedDevices\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries\Item\AggregatedDevices\Item\ApplicableDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\ApplicableDeviceCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the aggregatedDevices property of the microsoft.graph.windowsUpdates.applicableCatalogSummary entity.
*/
class AggregatedDevicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the aggregatedDevices property of the microsoft.graph.windowsUpdates.applicableCatalogSummary entity.
     * @param string $applicableDeviceId The unique identifier of applicableDevice
     * @return ApplicableDeviceItemRequestBuilder
    */
    public function byApplicableDeviceId(string $applicableDeviceId): ApplicableDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicableDevice%2Did'] = $applicableDeviceId;
        return new ApplicableDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AggregatedDevicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/data/applicableCatalogSummaries/{applicableCatalogSummary%2Did}/aggregatedDevices{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the applicableDevice resources included in an update applicability summary.
     * @param AggregatedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicableDeviceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-applicablecatalogsummary-list-aggregateddevices?view=graph-rest-beta Find more info here
    */
    public function get(?AggregatedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicableDeviceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the applicableDevice resources included in an update applicability summary.
     * @param AggregatedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AggregatedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AggregatedDevicesRequestBuilder
    */
    public function withUrl(string $rawUrl): AggregatedDevicesRequestBuilder {
        return new AggregatedDevicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
