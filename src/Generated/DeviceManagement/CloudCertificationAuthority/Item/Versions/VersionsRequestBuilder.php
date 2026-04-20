<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\Versions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\Versions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\Versions\Item\CloudCertificationAuthorityVersionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudCertificationAuthorityVersionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the versions property of the microsoft.graph.cloudCertificationAuthority entity.
*/
class VersionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the versions property of the microsoft.graph.cloudCertificationAuthority entity.
     * @param string $cloudCertificationAuthorityVersionId The unique identifier of cloudCertificationAuthorityVersion
     * @return CloudCertificationAuthorityVersionItemRequestBuilder
    */
    public function byCloudCertificationAuthorityVersionId(string $cloudCertificationAuthorityVersionId): CloudCertificationAuthorityVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudCertificationAuthorityVersion%2Did'] = $cloudCertificationAuthorityVersionId;
        return new CloudCertificationAuthorityVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VersionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/cloudCertificationAuthority/{cloudCertificationAuthority%2Did}/versions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection of all certification authority versions, including active, staged, retired, and expired versions. This navigation property provides access to the full version history of the certification authority. Use $expand=versions to include this collection in the response. Read-only.
     * @param VersionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudCertificationAuthorityVersionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?VersionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudCertificationAuthorityVersionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection of all certification authority versions, including active, staged, retired, and expired versions. This navigation property provides access to the full version history of the certification authority. Use $expand=versions to include this collection in the response. Read-only.
     * @param VersionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VersionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VersionsRequestBuilder
    */
    public function withUrl(string $rawUrl): VersionsRequestBuilder {
        return new VersionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
