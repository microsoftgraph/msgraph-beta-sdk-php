<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ServicePrincipalCreationPolicy;
use Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item\Excludes\ExcludesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item\Excludes\Item\ServicePrincipalCreationConditionSetItemRequestBuilder as MicrosoftGraphBetaGeneratedPoliciesServicePrincipalCreationPoliciesItemExcludesItemServicePrincipalCreationConditionSetItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item\Includes\IncludesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item\Includes\Item\ServicePrincipalCreationConditionSetItemRequestBuilder as MicrosoftGraphBetaGeneratedPoliciesServicePrincipalCreationPoliciesItemIncludesItemServicePrincipalCreationConditionSetItemRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ServicePrincipalCreationPolicyItemRequestBuilder 
{
    /**
     * The excludes property
    */
    public function excludes(): ExcludesRequestBuilder {
        return new ExcludesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The includes property
    */
    public function includes(): IncludesRequestBuilder {
        return new IncludesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ServicePrincipalCreationPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/policies/servicePrincipalCreationPolicies/{servicePrincipalCreationPolicy_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property servicePrincipalCreationPolicies for policies
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
     * Get servicePrincipalCreationPolicies from policies
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
     * Update the navigation property servicePrincipalCreationPolicies in policies
     * @param ServicePrincipalCreationPolicy $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ServicePrincipalCreationPolicy $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property servicePrincipalCreationPolicies for policies
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.policies.servicePrincipalCreationPolicies.item.excludes.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedPoliciesServicePrincipalCreationPoliciesItemExcludesItemServicePrincipalCreationConditionSetItemRequestBuilder
    */
    public function excludesById(string $id): MicrosoftGraphBetaGeneratedPoliciesServicePrincipalCreationPoliciesItemExcludesItemServicePrincipalCreationConditionSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipalCreationConditionSet_id'] = $id;
        return new MicrosoftGraphBetaGeneratedPoliciesServicePrincipalCreationPoliciesItemExcludesItemServicePrincipalCreationConditionSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get servicePrincipalCreationPolicies from policies
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ServicePrincipalCreationPolicy::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.policies.servicePrincipalCreationPolicies.item.includes.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedPoliciesServicePrincipalCreationPoliciesItemIncludesItemServicePrincipalCreationConditionSetItemRequestBuilder
    */
    public function includesById(string $id): MicrosoftGraphBetaGeneratedPoliciesServicePrincipalCreationPoliciesItemIncludesItemServicePrincipalCreationConditionSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipalCreationConditionSet_id'] = $id;
        return new MicrosoftGraphBetaGeneratedPoliciesServicePrincipalCreationPoliciesItemIncludesItemServicePrincipalCreationConditionSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property servicePrincipalCreationPolicies in policies
     * @param ServicePrincipalCreationPolicy $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ServicePrincipalCreationPolicy $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
