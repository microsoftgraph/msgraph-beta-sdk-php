<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\ActiveVersion;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudCertificationAuthorityVersion;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the activeVersion property of the microsoft.graph.cloudCertificationAuthority entity.
*/
class ActiveVersionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ActiveVersionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/cloudCertificationAuthority/{cloudCertificationAuthority%2Did}/activeVersion{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The currently active certification authority version. This navigation property provides direct access to the active version's details including certificate information, URLs, and validity periods. The active version is automatically included in the default response when retrieving a certification authority entity without requiring $expand. Read-only.
     * @param ActiveVersionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudCertificationAuthorityVersion|null>
     * @throws Exception
    */
    public function get(?ActiveVersionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudCertificationAuthorityVersion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The currently active certification authority version. This navigation property provides direct access to the active version's details including certificate information, URLs, and validity periods. The active version is automatically included in the default response when retrieving a certification authority entity without requiring $expand. Read-only.
     * @param ActiveVersionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ActiveVersionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ActiveVersionRequestBuilder
    */
    public function withUrl(string $rawUrl): ActiveVersionRequestBuilder {
        return new ActiveVersionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
