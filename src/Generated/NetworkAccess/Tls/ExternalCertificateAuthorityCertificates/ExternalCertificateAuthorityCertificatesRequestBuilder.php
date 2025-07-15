<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Tls\ExternalCertificateAuthorityCertificates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\ExternalCertificateAuthorityCertificate;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\ExternalCertificateAuthorityCertificateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Tls\ExternalCertificateAuthorityCertificates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Tls\ExternalCertificateAuthorityCertificates\Item\ExternalCertificateAuthorityCertificateItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the externalCertificateAuthorityCertificates property of the microsoft.graph.networkaccess.tlsTermination entity.
*/
class ExternalCertificateAuthorityCertificatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the externalCertificateAuthorityCertificates property of the microsoft.graph.networkaccess.tlsTermination entity.
     * @param string $externalCertificateAuthorityCertificateId The unique identifier of externalCertificateAuthorityCertificate
     * @return ExternalCertificateAuthorityCertificateItemRequestBuilder
    */
    public function byExternalCertificateAuthorityCertificateId(string $externalCertificateAuthorityCertificateId): ExternalCertificateAuthorityCertificateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['externalCertificateAuthorityCertificate%2Did'] = $externalCertificateAuthorityCertificateId;
        return new ExternalCertificateAuthorityCertificateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExternalCertificateAuthorityCertificatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/tls/externalCertificateAuthorityCertificates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the externalCertificateAuthorityCertificate objects and their properties.
     * @param ExternalCertificateAuthorityCertificatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalCertificateAuthorityCertificateCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-tlstermination-list-externalcertificateauthoritycertificates?view=graph-rest-beta Find more info here
    */
    public function get(?ExternalCertificateAuthorityCertificatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalCertificateAuthorityCertificateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new externalCertificateAuthorityCertificate object. This request generates the Certificate Signing Request (CSR) that you download to sign and generate a certificate that you upload to the service using the Update externalCertificateAuthorityCertificate operation.
     * @param ExternalCertificateAuthorityCertificate $body The request body
     * @param ExternalCertificateAuthorityCertificatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalCertificateAuthorityCertificate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-tlstermination-post-externalcertificateauthoritycertificates?view=graph-rest-beta Find more info here
    */
    public function post(ExternalCertificateAuthorityCertificate $body, ?ExternalCertificateAuthorityCertificatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalCertificateAuthorityCertificate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the externalCertificateAuthorityCertificate objects and their properties.
     * @param ExternalCertificateAuthorityCertificatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExternalCertificateAuthorityCertificatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new externalCertificateAuthorityCertificate object. This request generates the Certificate Signing Request (CSR) that you download to sign and generate a certificate that you upload to the service using the Update externalCertificateAuthorityCertificate operation.
     * @param ExternalCertificateAuthorityCertificate $body The request body
     * @param ExternalCertificateAuthorityCertificatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExternalCertificateAuthorityCertificate $body, ?ExternalCertificateAuthorityCertificatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExternalCertificateAuthorityCertificatesRequestBuilder
    */
    public function withUrl(string $rawUrl): ExternalCertificateAuthorityCertificatesRequestBuilder {
        return new ExternalCertificateAuthorityCertificatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
