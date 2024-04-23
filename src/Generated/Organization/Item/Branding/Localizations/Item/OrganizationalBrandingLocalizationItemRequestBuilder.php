<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Localizations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OrganizationalBrandingLocalization;
use Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Localizations\Item\BackgroundImage\BackgroundImageRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Localizations\Item\BannerLogo\BannerLogoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Localizations\Item\CustomCSS\CustomCSSRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Localizations\Item\Favicon\FaviconRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Localizations\Item\HeaderLogo\HeaderLogoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Localizations\Item\SquareLogo\SquareLogoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Localizations\Item\SquareLogoDark\SquareLogoDarkRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the localizations property of the microsoft.graph.organizationalBranding entity.
*/
class OrganizationalBrandingLocalizationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the media for the organization entity.
    */
    public function backgroundImage(): BackgroundImageRequestBuilder {
        return new BackgroundImageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the organization entity.
    */
    public function bannerLogo(): BannerLogoRequestBuilder {
        return new BannerLogoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the organization entity.
    */
    public function customCSS(): CustomCSSRequestBuilder {
        return new CustomCSSRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the organization entity.
    */
    public function favicon(): FaviconRequestBuilder {
        return new FaviconRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the organization entity.
    */
    public function headerLogo(): HeaderLogoRequestBuilder {
        return new HeaderLogoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the organization entity.
    */
    public function squareLogo(): SquareLogoRequestBuilder {
        return new SquareLogoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the organization entity.
    */
    public function squareLogoDark(): SquareLogoDarkRequestBuilder {
        return new SquareLogoDarkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OrganizationalBrandingLocalizationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organization/{organization%2Did}/branding/localizations/{organizationalBrandingLocalization%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property localizations for organization
     * @param OrganizationalBrandingLocalizationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?OrganizationalBrandingLocalizationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Add different branding based on a locale.
     * @param OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationalBrandingLocalization|null>
     * @throws Exception
    */
    public function get(?OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationalBrandingLocalization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property localizations in organization
     * @param OrganizationalBrandingLocalization $body The request body
     * @param OrganizationalBrandingLocalizationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationalBrandingLocalization|null>
     * @throws Exception
    */
    public function patch(OrganizationalBrandingLocalization $body, ?OrganizationalBrandingLocalizationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationalBrandingLocalization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property localizations for organization
     * @param OrganizationalBrandingLocalizationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OrganizationalBrandingLocalizationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Add different branding based on a locale.
     * @param OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property localizations in organization
     * @param OrganizationalBrandingLocalization $body The request body
     * @param OrganizationalBrandingLocalizationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OrganizationalBrandingLocalization $body, ?OrganizationalBrandingLocalizationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OrganizationalBrandingLocalizationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): OrganizationalBrandingLocalizationItemRequestBuilder {
        return new OrganizationalBrandingLocalizationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
