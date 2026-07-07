<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Themes\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OrganizationalBrandingTheme;
use Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Themes\Item\Localizations\LocalizationsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the themes property of the microsoft.graph.organizationalBranding entity.
*/
class OrganizationalBrandingThemeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the localizations property of the microsoft.graph.organizationalBrandingTheme entity.
    */
    public function localizations(): LocalizationsRequestBuilder {
        return new LocalizationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OrganizationalBrandingThemeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organization/{organization%2Did}/branding/themes/{organizationalBrandingTheme%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an organizationalBrandingTheme object.
     * @param OrganizationalBrandingThemeItemRequestBuilderDeleteRequ_a2ec7057|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/organizationalbranding-delete-themes?view=graph-rest-beta Find more info here
    */
    public function delete(?OrganizationalBrandingThemeItemRequestBuilderDeleteRequ_a2ec7057 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of organizationalBrandingTheme object.
     * @param OrganizationalBrandingThemeItemRequestBuilderGetRequest_e7f41ef8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationalBrandingTheme|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/organizationalbrandingtheme-get?view=graph-rest-beta Find more info here
    */
    public function get(?OrganizationalBrandingThemeItemRequestBuilderGetRequest_e7f41ef8 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationalBrandingTheme::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an organizationalBrandingTheme object.
     * @param OrganizationalBrandingTheme $body The request body
     * @param OrganizationalBrandingThemeItemRequestBuilderPatchReque_6b5e414c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationalBrandingTheme|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/organizationalbrandingtheme-update?view=graph-rest-beta Find more info here
    */
    public function patch(OrganizationalBrandingTheme $body, ?OrganizationalBrandingThemeItemRequestBuilderPatchReque_6b5e414c $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationalBrandingTheme::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an organizationalBrandingTheme object.
     * @param OrganizationalBrandingThemeItemRequestBuilderDeleteRequ_a2ec7057|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OrganizationalBrandingThemeItemRequestBuilderDeleteRequ_a2ec7057 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of organizationalBrandingTheme object.
     * @param OrganizationalBrandingThemeItemRequestBuilderGetRequest_e7f41ef8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OrganizationalBrandingThemeItemRequestBuilderGetRequest_e7f41ef8 $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an organizationalBrandingTheme object.
     * @param OrganizationalBrandingTheme $body The request body
     * @param OrganizationalBrandingThemeItemRequestBuilderPatchReque_6b5e414c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OrganizationalBrandingTheme $body, ?OrganizationalBrandingThemeItemRequestBuilderPatchReque_6b5e414c $requestConfiguration = null): RequestInformation {
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
     * @return OrganizationalBrandingThemeItemRequestBuilder
    */
    public function withUrl(string $rawUrl): OrganizationalBrandingThemeItemRequestBuilder {
        return new OrganizationalBrandingThemeItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
