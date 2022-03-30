<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item\DefaultPages\DefaultPagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item\DefaultPages\Item\UserFlowLanguagePageItemRequestBuilder as MicrosoftGraphBetaGeneratedIdentityB2cUserFlowsItemLanguagesItemDefaultPagesItemUserFlowLanguagePageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item\OverridesPages\Item\UserFlowLanguagePageItemRequestBuilder as MicrosoftGraphBetaGeneratedIdentityB2cUserFlowsItemLanguagesItemOverridesPagesItemUserFlowLanguagePageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item\OverridesPages\OverridesPagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\UserFlowLanguageConfiguration;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UserFlowLanguageConfigurationItemRequestBuilder 
{
    public function defaultPages(): DefaultPagesRequestBuilder {
        return new DefaultPagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function overridesPages(): OverridesPagesRequestBuilder {
        return new OverridesPagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new UserFlowLanguageConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identity/b2cUserFlows/{b2cIdentityUserFlow_id}/languages/{userFlowLanguageConfiguration_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property languages for identity
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property languages in identity
     * @param UserFlowLanguageConfiguration $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(UserFlowLanguageConfiguration $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identity.b2cUserFlows.item.languages.item.defaultPages.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedIdentityB2cUserFlowsItemLanguagesItemDefaultPagesItemUserFlowLanguagePageItemRequestBuilder
    */
    public function defaultPagesById(string $id): MicrosoftGraphBetaGeneratedIdentityB2cUserFlowsItemLanguagesItemDefaultPagesItemUserFlowLanguagePageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userFlowLanguagePage_id'] = $id;
        return new MicrosoftGraphBetaGeneratedIdentityB2cUserFlowsItemLanguagesItemDefaultPagesItemUserFlowLanguagePageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property languages for identity
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, UserFlowLanguageConfiguration::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identity.b2cUserFlows.item.languages.item.overridesPages.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedIdentityB2cUserFlowsItemLanguagesItemOverridesPagesItemUserFlowLanguagePageItemRequestBuilder
    */
    public function overridesPagesById(string $id): MicrosoftGraphBetaGeneratedIdentityB2cUserFlowsItemLanguagesItemOverridesPagesItemUserFlowLanguagePageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userFlowLanguagePage_id'] = $id;
        return new MicrosoftGraphBetaGeneratedIdentityB2cUserFlowsItemLanguagesItemOverridesPagesItemUserFlowLanguagePageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property languages in identity
     * @param UserFlowLanguageConfiguration $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(UserFlowLanguageConfiguration $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
