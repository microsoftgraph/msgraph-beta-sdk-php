<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\ProviderTenantSettings;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\ProviderTenantSetting;
use Microsoft\\Graph\\Beta\\Generated\Models\ProviderTenantSettingCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Security\ProviderTenantSettings\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Security\ProviderTenantSettings\Item\ProviderTenantSettingItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the providerTenantSettings property of the microsoft.graph.security entity.
*/
class ProviderTenantSettingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the providerTenantSettings property of the microsoft.graph.security entity.
     * @param string $providerTenantSettingId The unique identifier of providerTenantSetting
     * @return ProviderTenantSettingItemRequestBuilder
    */
    public function byProviderTenantSettingId(string $providerTenantSettingId): ProviderTenantSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['providerTenantSetting%2Did'] = $providerTenantSettingId;
        return new ProviderTenantSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProviderTenantSettingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/providerTenantSettings{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get providerTenantSettings from security
     * @param ProviderTenantSettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProviderTenantSettingCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ProviderTenantSettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProviderTenantSettingCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to providerTenantSettings for security
     * @param ProviderTenantSetting $body The request body
     * @param ProviderTenantSettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProviderTenantSetting|null>
     * @throws Exception
    */
    public function post(ProviderTenantSetting $body, ?ProviderTenantSettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProviderTenantSetting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get providerTenantSettings from security
     * @param ProviderTenantSettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProviderTenantSettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to providerTenantSettings for security
     * @param ProviderTenantSetting $body The request body
     * @param ProviderTenantSettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProviderTenantSetting $body, ?ProviderTenantSettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProviderTenantSettingsRequestBuilder
    */
    public function withUrl(string $rawUrl): ProviderTenantSettingsRequestBuilder {
        return new ProviderTenantSettingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
