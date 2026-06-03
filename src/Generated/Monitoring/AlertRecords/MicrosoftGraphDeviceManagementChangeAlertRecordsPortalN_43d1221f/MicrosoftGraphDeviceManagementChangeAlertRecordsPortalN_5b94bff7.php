<?php

namespace Microsoft\Graph\Beta\Generated\Monitoring\AlertRecords\MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_43d1221f;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the changeAlertRecordsPortalNotificationAsSent method. Original name: MicrosoftGraphDeviceManagementChangeAlertRecordsPortalNotificationAsSentRequestBuilder
*/
class MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_5b94bff7 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_5b94bff7 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/monitoring/alertRecords/microsoft.graph.deviceManagement.changeAlertRecordsPortalNotificationAsSent');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action changeAlertRecordsPortalNotificationAsSent
     * @param ChangeAlertRecordsPortalNotificationAsSentPostRequestBody $body The request body
     * @param MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_25acc565|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(ChangeAlertRecordsPortalNotificationAsSentPostRequestBody $body, ?MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_25acc565 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Invoke action changeAlertRecordsPortalNotificationAsSent
     * @param ChangeAlertRecordsPortalNotificationAsSentPostRequestBody $body The request body
     * @param MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_25acc565|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ChangeAlertRecordsPortalNotificationAsSentPostRequestBody $body, ?MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_25acc565 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_5b94bff7
    */
    public function withUrl(string $rawUrl): MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_5b94bff7 {
        return new MicrosoftGraphDeviceManagementChangeAlertRecordsPortalN_5b94bff7($rawUrl, $this->requestAdapter);
    }

}
