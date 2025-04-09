<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\HardwareOathMethods\AssignAndActivateBySerialNumber;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the assignAndActivateBySerialNumber method.
*/
class AssignAndActivateBySerialNumberRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AssignAndActivateBySerialNumberRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/hardwareOathMethods/assignAndActivateBySerialNumber');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Assign and activate a hardware token at the same time by hardware token serial number.
     * @param AssignAndActivateBySerialNumberPostRequestBody $body The request body
     * @param AssignAndActivateBySerialNumberRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/hardwareoathauthenticationmethod-assignandactivatebyserialnumber?view=graph-rest-beta Find more info here
    */
    public function post(AssignAndActivateBySerialNumberPostRequestBody $body, ?AssignAndActivateBySerialNumberRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Assign and activate a hardware token at the same time by hardware token serial number.
     * @param AssignAndActivateBySerialNumberPostRequestBody $body The request body
     * @param AssignAndActivateBySerialNumberRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AssignAndActivateBySerialNumberPostRequestBody $body, ?AssignAndActivateBySerialNumberRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AssignAndActivateBySerialNumberRequestBuilder
    */
    public function withUrl(string $rawUrl): AssignAndActivateBySerialNumberRequestBuilder {
        return new AssignAndActivateBySerialNumberRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
