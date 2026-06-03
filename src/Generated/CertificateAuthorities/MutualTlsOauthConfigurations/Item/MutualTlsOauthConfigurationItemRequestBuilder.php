<?php

namespace Microsoft\Graph\Beta\Generated\CertificateAuthorities\MutualTlsOauthConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MutualTlsOauthConfiguration;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mutualTlsOauthConfigurations property of the microsoft.graph.certificateAuthorityPath entity.
*/
class MutualTlsOauthConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MutualTlsOauthConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/certificateAuthorities/mutualTlsOauthConfigurations/{mutualTlsOauthConfiguration%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete the specified mutualTlsOauthConfiguration resource. You must first delete the deviceTemplate object that references the ID.
     * @param MutualTlsOauthConfigurationItemRequestBuilderDeleteRequ_46df2783|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mutualtlsoauthconfiguration-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?MutualTlsOauthConfigurationItemRequestBuilderDeleteRequ_46df2783 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Defines the trusted certificate authorities for certificates that can be added to Internet of Things (IoT) devices.
     * @param MutualTlsOauthConfigurationItemRequestBuilderGetRequest_127ee3a5|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MutualTlsOauthConfiguration|null>
     * @throws Exception
    */
    public function get(?MutualTlsOauthConfigurationItemRequestBuilderGetRequest_127ee3a5 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MutualTlsOauthConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property mutualTlsOauthConfigurations in certificateAuthorities
     * @param MutualTlsOauthConfiguration $body The request body
     * @param MutualTlsOauthConfigurationItemRequestBuilderPatchReque_2d1137a1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MutualTlsOauthConfiguration|null>
     * @throws Exception
    */
    public function patch(MutualTlsOauthConfiguration $body, ?MutualTlsOauthConfigurationItemRequestBuilderPatchReque_2d1137a1 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MutualTlsOauthConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete the specified mutualTlsOauthConfiguration resource. You must first delete the deviceTemplate object that references the ID.
     * @param MutualTlsOauthConfigurationItemRequestBuilderDeleteRequ_46df2783|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MutualTlsOauthConfigurationItemRequestBuilderDeleteRequ_46df2783 $requestConfiguration = null): RequestInformation {
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
     * Defines the trusted certificate authorities for certificates that can be added to Internet of Things (IoT) devices.
     * @param MutualTlsOauthConfigurationItemRequestBuilderGetRequest_127ee3a5|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MutualTlsOauthConfigurationItemRequestBuilderGetRequest_127ee3a5 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property mutualTlsOauthConfigurations in certificateAuthorities
     * @param MutualTlsOauthConfiguration $body The request body
     * @param MutualTlsOauthConfigurationItemRequestBuilderPatchReque_2d1137a1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MutualTlsOauthConfiguration $body, ?MutualTlsOauthConfigurationItemRequestBuilderPatchReque_2d1137a1 $requestConfiguration = null): RequestInformation {
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
     * @return MutualTlsOauthConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MutualTlsOauthConfigurationItemRequestBuilder {
        return new MutualTlsOauthConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
