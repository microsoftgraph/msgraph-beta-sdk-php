<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ApplePushNotificationCertificate\GenerateApplePushNotificationCertificateSigningRequest;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the generateApplePushNotificationCertificateSigningRequest method. Original name: GenerateApplePushNotificationCertificateSigningRequestRequestBuilder
*/
class GenerateApplePushNotificationCertificateSigningRequestR_6d3c8f87 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GenerateApplePushNotificationCertificateSigningRequestR_6d3c8f87 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/applePushNotificationCertificate/generateApplePushNotificationCertificateSigningRequest');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Download Apple push notification certificate signing request
     * @param GenerateApplePushNotificationCertificateSigningRequestR_59f72018|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GenerateApplePushNotificationCertificateSigningRequestP_6c3cae96|null>
     * @throws Exception
    */
    public function post(?GenerateApplePushNotificationCertificateSigningRequestR_59f72018 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GenerateApplePushNotificationCertificateSigningRequestP_6c3cae96::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Download Apple push notification certificate signing request
     * @param GenerateApplePushNotificationCertificateSigningRequestR_59f72018|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?GenerateApplePushNotificationCertificateSigningRequestR_59f72018 $requestConfiguration = null): RequestInformation {
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
     * @return GenerateApplePushNotificationCertificateSigningRequestR_6d3c8f87
    */
    public function withUrl(string $rawUrl): GenerateApplePushNotificationCertificateSigningRequestR_6d3c8f87 {
        return new GenerateApplePushNotificationCertificateSigningRequestR_6d3c8f87($rawUrl, $this->requestAdapter);
    }

}
