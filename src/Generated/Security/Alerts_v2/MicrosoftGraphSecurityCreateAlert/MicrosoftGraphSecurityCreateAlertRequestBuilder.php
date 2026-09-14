<?php

namespace Microsoft\Graph\Beta\Generated\Security\Alerts_v2\MicrosoftGraphSecurityCreateAlert;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\Alert;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the createAlert method.
*/
class MicrosoftGraphSecurityCreateAlertRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityCreateAlertRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/alerts_v2/microsoft.graph.security.createAlert');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Create a Microsoft 365 Defender alert by invoking a bound action on the alerts_v2 collection and returning the created alert resource. The action accepts a createAlertInput complex type that combines alert metadata and creation-specific options in one request object.
     * @param CreateAlertPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityCreateAlertRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Alert|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-alert-createalert?view=graph-rest-beta Find more info here
    */
    public function post(CreateAlertPostRequestBody $body, ?MicrosoftGraphSecurityCreateAlertRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Alert::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a Microsoft 365 Defender alert by invoking a bound action on the alerts_v2 collection and returning the created alert resource. The action accepts a createAlertInput complex type that combines alert metadata and creation-specific options in one request object.
     * @param CreateAlertPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityCreateAlertRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateAlertPostRequestBody $body, ?MicrosoftGraphSecurityCreateAlertRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityCreateAlertRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityCreateAlertRequestBuilder {
        return new MicrosoftGraphSecurityCreateAlertRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
