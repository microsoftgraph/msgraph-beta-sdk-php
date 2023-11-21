<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\EnterpriseCodeSigningCertificates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\EnterpriseCodeSigningCertificates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\EnterpriseCodeSigningCertificates\Item\EnterpriseCodeSigningCertificateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EnterpriseCodeSigningCertificate;
use Microsoft\Graph\Beta\Generated\Models\EnterpriseCodeSigningCertificateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the enterpriseCodeSigningCertificates property of the microsoft.graph.deviceAppManagement entity.
*/
class EnterpriseCodeSigningCertificatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the enterpriseCodeSigningCertificates property of the microsoft.graph.deviceAppManagement entity.
     * @param string $enterpriseCodeSigningCertificateId The unique identifier of enterpriseCodeSigningCertificate
     * @return EnterpriseCodeSigningCertificateItemRequestBuilder
    */
    public function byEnterpriseCodeSigningCertificateId(string $enterpriseCodeSigningCertificateId): EnterpriseCodeSigningCertificateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['enterpriseCodeSigningCertificate%2Did'] = $enterpriseCodeSigningCertificateId;
        return new EnterpriseCodeSigningCertificateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EnterpriseCodeSigningCertificatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/enterpriseCodeSigningCertificates{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The Windows Enterprise Code Signing Certificate.
     * @param EnterpriseCodeSigningCertificatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EnterpriseCodeSigningCertificateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?EnterpriseCodeSigningCertificatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EnterpriseCodeSigningCertificateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to enterpriseCodeSigningCertificates for deviceAppManagement
     * @param EnterpriseCodeSigningCertificate $body The request body
     * @param EnterpriseCodeSigningCertificatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EnterpriseCodeSigningCertificate|null>
     * @throws Exception
    */
    public function post(EnterpriseCodeSigningCertificate $body, ?EnterpriseCodeSigningCertificatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EnterpriseCodeSigningCertificate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The Windows Enterprise Code Signing Certificate.
     * @param EnterpriseCodeSigningCertificatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EnterpriseCodeSigningCertificatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to enterpriseCodeSigningCertificates for deviceAppManagement
     * @param EnterpriseCodeSigningCertificate $body The request body
     * @param EnterpriseCodeSigningCertificatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EnterpriseCodeSigningCertificate $body, ?EnterpriseCodeSigningCertificatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EnterpriseCodeSigningCertificatesRequestBuilder
    */
    public function withUrl(string $rawUrl): EnterpriseCodeSigningCertificatesRequestBuilder {
        return new EnterpriseCodeSigningCertificatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
