<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Monitoring\AlertRecords;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Monitoring\AlertRecords\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Monitoring\AlertRecords\Item\AlertRecordItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Monitoring\AlertRecords\MicrosoftGraphDeviceManagementGetPortalNotifications\MicrosoftGraphDeviceManagementGetPortalNotificationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagement\AlertRecord;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagement\AlertRecordCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the alertRecords property of the microsoft.graph.deviceManagement.monitoring entity.
*/
class AlertRecordsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPortalNotifications method.
    */
    public function microsoftGraphDeviceManagementGetPortalNotifications(): MicrosoftGraphDeviceManagementGetPortalNotificationsRequestBuilder {
        return new MicrosoftGraphDeviceManagementGetPortalNotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the alertRecords property of the microsoft.graph.deviceManagement.monitoring entity.
     * @param string $alertRecordId The unique identifier of alertRecord
     * @return AlertRecordItemRequestBuilder
    */
    public function byAlertRecordId(string $alertRecordId): AlertRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['alertRecord%2Did'] = $alertRecordId;
        return new AlertRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AlertRecordsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/monitoring/alertRecords{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the alertRecord objects and their properties.
     * @param AlertRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AlertRecordCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/devicemanagement-alertrecord-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?AlertRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AlertRecordCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to alertRecords for deviceManagement
     * @param AlertRecord $body The request body
     * @param AlertRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AlertRecord|null>
     * @throws Exception
    */
    public function post(AlertRecord $body, ?AlertRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AlertRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the alertRecord objects and their properties.
     * @param AlertRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AlertRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to alertRecords for deviceManagement
     * @param AlertRecord $body The request body
     * @param AlertRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AlertRecord $body, ?AlertRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return AlertRecordsRequestBuilder
    */
    public function withUrl(string $rawUrl): AlertRecordsRequestBuilder {
        return new AlertRecordsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
