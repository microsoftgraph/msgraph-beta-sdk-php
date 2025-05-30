<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Monitoring\AlertRecords\MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSent;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the changeAlertRecordsPortalNotificationAsSent method.
*/
class MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/monitoring/alertRecords/microsoft.graph.deviceManagement.changeAlertRecordsPortalNotificationAsSent');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set the isPortalNotificationSent property of all portal notification resources associated with the specified alertRecord to true, marking them as sent. A maximum of 100 alertRecord IDs can be received at one time, and a maximum of 100 portal notification resources can be changed in the isPortalNotificationSent property status.
     * @param ChangeAlertRecordsPortalNotificationAsSentPostRequestBody $body The request body
     * @param MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(ChangeAlertRecordsPortalNotificationAsSentPostRequestBody $body, ?MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Set the isPortalNotificationSent property of all portal notification resources associated with the specified alertRecord to true, marking them as sent. A maximum of 100 alertRecord IDs can be received at one time, and a maximum of 100 portal notification resources can be changed in the isPortalNotificationSent property status.
     * @param ChangeAlertRecordsPortalNotificationAsSentPostRequestBody $body The request body
     * @param MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ChangeAlertRecordsPortalNotificationAsSentPostRequestBody $body, ?MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilder {
        return new MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
