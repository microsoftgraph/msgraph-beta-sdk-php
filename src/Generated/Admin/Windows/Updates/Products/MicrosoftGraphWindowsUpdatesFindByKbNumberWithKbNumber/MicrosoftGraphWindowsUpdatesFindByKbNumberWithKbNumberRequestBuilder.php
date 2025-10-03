<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Products\MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumber;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the findByKbNumber method.
*/
class MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param int|null $kbNumber Usage: kbNumber={kbNumber}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?int $kbNumber = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/products/microsoft.graph.windowsUpdates.findByKbNumber(kbNumber={kbNumber}){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['kbNumber'] = $kbNumber;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function findByKbNumber
     * @param MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FindByKbNumberWithKbNumberGetResponse|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FindByKbNumberWithKbNumberGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function findByKbNumber
     * @param MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
