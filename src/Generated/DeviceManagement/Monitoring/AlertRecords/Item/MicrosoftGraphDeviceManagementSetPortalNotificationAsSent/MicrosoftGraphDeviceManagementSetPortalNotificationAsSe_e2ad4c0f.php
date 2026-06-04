<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Monitoring\AlertRecords\Item\MicrosoftGraphDeviceManagementSetPortalNotificationAsSent;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the setPortalNotificationAsSent method. Original name: MicrosoftGraphDeviceManagementSetPortalNotificationAsSentRequestBuilder
*/
class MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_e2ad4c0f extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_e2ad4c0f and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/monitoring/alertRecords/{alertRecord%2Did}/microsoft.graph.deviceManagement.setPortalNotificationAsSent');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set the status of the notification associated with the specified alertRecord on the Microsoft EndPoint Manager admin center as sent, by setting the isPortalNotificationSent property of the portal notification to true.
     * @param MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_096b4748|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/devicemanagement-alertrecord-setportalnotificationassent?view=graph-rest-beta Find more info here
    */
    public function post(?MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_096b4748 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Set the status of the notification associated with the specified alertRecord on the Microsoft EndPoint Manager admin center as sent, by setting the isPortalNotificationSent property of the portal notification to true.
     * @param MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_096b4748|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_096b4748 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_e2ad4c0f
    */
    public function withUrl(string $rawUrl): MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_e2ad4c0f {
        return new MicrosoftGraphDeviceManagementSetPortalNotificationAsSe_e2ad4c0f($rawUrl, $this->requestAdapter);
    }

}
