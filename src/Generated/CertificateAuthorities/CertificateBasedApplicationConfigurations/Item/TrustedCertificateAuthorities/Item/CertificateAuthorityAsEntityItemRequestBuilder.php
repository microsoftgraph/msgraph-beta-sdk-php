<?php

namespace Microsoft\Graph\Beta\Generated\CertificateAuthorities\CertificateBasedApplicationConfigurations\Item\TrustedCertificateAuthorities\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CertificateAuthorityAsEntity;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the trustedCertificateAuthorities property of the microsoft.graph.trustedCertificateAuthorityAsEntityBase entity.
*/
class CertificateAuthorityAsEntityItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CertificateAuthorityAsEntityItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/certificateAuthorities/certificateBasedApplicationConfigurations/{certificateBasedApplicationConfiguration%2Did}/trustedCertificateAuthorities/{certificateAuthorityAsEntity%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property trustedCertificateAuthorities for certificateAuthorities
     * @param CertificateAuthorityAsEntityItemRequestBuilderDeleteReq_7868bb84|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CertificateAuthorityAsEntityItemRequestBuilderDeleteReq_7868bb84 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Collection of trusted certificate authorities.
     * @param CertificateAuthorityAsEntityItemRequestBuilderGetReques_c2fc0702|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateAuthorityAsEntity|null>
     * @throws Exception
    */
    public function get(?CertificateAuthorityAsEntityItemRequestBuilderGetReques_c2fc0702 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateAuthorityAsEntity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property trustedCertificateAuthorities in certificateAuthorities
     * @param CertificateAuthorityAsEntity $body The request body
     * @param CertificateAuthorityAsEntityItemRequestBuilderPatchRequ_51c0258f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CertificateAuthorityAsEntity|null>
     * @throws Exception
    */
    public function patch(CertificateAuthorityAsEntity $body, ?CertificateAuthorityAsEntityItemRequestBuilderPatchRequ_51c0258f $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CertificateAuthorityAsEntity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property trustedCertificateAuthorities for certificateAuthorities
     * @param CertificateAuthorityAsEntityItemRequestBuilderDeleteReq_7868bb84|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CertificateAuthorityAsEntityItemRequestBuilderDeleteReq_7868bb84 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Collection of trusted certificate authorities.
     * @param CertificateAuthorityAsEntityItemRequestBuilderGetReques_c2fc0702|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CertificateAuthorityAsEntityItemRequestBuilderGetReques_c2fc0702 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/certificateAuthorities/certificateBasedApplicationConfigurations/{certificateBasedApplicationConfiguration%2Did}/trustedCertificateAuthorities/{certificateAuthorityAsEntity%2Did}{?%24expand,%24select}';
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
     * Update the navigation property trustedCertificateAuthorities in certificateAuthorities
     * @param CertificateAuthorityAsEntity $body The request body
     * @param CertificateAuthorityAsEntityItemRequestBuilderPatchRequ_51c0258f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CertificateAuthorityAsEntity $body, ?CertificateAuthorityAsEntityItemRequestBuilderPatchRequ_51c0258f $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return CertificateAuthorityAsEntityItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CertificateAuthorityAsEntityItemRequestBuilder {
        return new CertificateAuthorityAsEntityItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
