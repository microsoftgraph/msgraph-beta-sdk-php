<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\CloudCertificationAuthorityLeafCertificate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\CloudCertificationAuthorityLeafCertificate\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\CloudCertificationAuthorityLeafCertificate\Item\CloudCertificationAuthorityLeafCertificateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudCertificationAuthorityLeafCertificateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudCertificationAuthorityLeafCertificate property of the microsoft.graph.cloudCertificationAuthority entity.
*/
class CloudCertificationAuthorityLeafCertificateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudCertificationAuthorityLeafCertificate property of the microsoft.graph.cloudCertificationAuthority entity.
     * @param string $cloudCertificationAuthorityLeafCertificateId The unique identifier of cloudCertificationAuthorityLeafCertificate
     * @return CloudCertificationAuthorityLeafCertificateItemRequestBuilder
    */
    public function byCloudCertificationAuthorityLeafCertificateId(string $cloudCertificationAuthorityLeafCertificateId): CloudCertificationAuthorityLeafCertificateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudCertificationAuthorityLeafCertificate%2Did'] = $cloudCertificationAuthorityLeafCertificateId;
        return new CloudCertificationAuthorityLeafCertificateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CloudCertificationAuthorityLeafCertificateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/cloudCertificationAuthority/{cloudCertificationAuthority%2Did}/cloudCertificationAuthorityLeafCertificate{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Required OData property to expose leaf certificate API.
     * @param CloudCertificationAuthorityLeafCertificateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudCertificationAuthorityLeafCertificateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CloudCertificationAuthorityLeafCertificateRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudCertificationAuthorityLeafCertificateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Required OData property to expose leaf certificate API.
     * @param CloudCertificationAuthorityLeafCertificateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudCertificationAuthorityLeafCertificateRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudCertificationAuthorityLeafCertificateRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudCertificationAuthorityLeafCertificateRequestBuilder {
        return new CloudCertificationAuthorityLeafCertificateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
