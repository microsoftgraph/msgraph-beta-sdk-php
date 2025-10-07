<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\CompareWithTemplateId;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the compare method.
*/
class CompareWithTemplateIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CompareWithTemplateIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $templateId Usage: templateId='{templateId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $templateId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/intents/{deviceManagementIntent%2Did}/compare(templateId=\'{templateId}\'){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['templateId'] = $templateId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function compare
     * @param CompareWithTemplateIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CompareWithTemplateIdGetResponse|null>
     * @throws Exception
    */
    public function get(?CompareWithTemplateIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CompareWithTemplateIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function compare
     * @param CompareWithTemplateIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CompareWithTemplateIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CompareWithTemplateIdRequestBuilder
    */
    public function withUrl(string $rawUrl): CompareWithTemplateIdRequestBuilder {
        return new CompareWithTemplateIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
