<?php

namespace Microsoft\Graph\Beta\Generated\Policies\RoleManagementPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleManagementPolicy;
use Microsoft\Graph\Beta\Generated\Policies\RoleManagementPolicies\Item\EffectiveRules\EffectiveRulesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\RoleManagementPolicies\Item\EffectiveRules\Item\UnifiedRoleManagementPolicyRuleItemRequestBuilder as MicrosoftGraphBetaGeneratedPoliciesRoleManagementPoliciesItemEffectiveRulesItemUnifiedRoleManagementPolicyRuleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\RoleManagementPolicies\Item\Rules\Item\UnifiedRoleManagementPolicyRuleItemRequestBuilder as MicrosoftGraphBetaGeneratedPoliciesRoleManagementPoliciesItemRulesItemUnifiedRoleManagementPolicyRuleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\RoleManagementPolicies\Item\Rules\RulesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UnifiedRoleManagementPolicyItemRequestBuilder 
{
    /**
     * The effectiveRules property
    */
    public function effectiveRules(): EffectiveRulesRequestBuilder {
        return new EffectiveRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The rules property
    */
    public function rules(): RulesRequestBuilder {
        return new RulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/policies/roleManagementPolicies/{unifiedRoleManagementPolicy%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property roleManagementPolicies for policies
     * @param UnifiedRoleManagementPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?UnifiedRoleManagementPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Represents the role management policies.
     * @param UnifiedRoleManagementPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?UnifiedRoleManagementPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property roleManagementPolicies in policies
     * @param UnifiedRoleManagementPolicy $body 
     * @param UnifiedRoleManagementPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(UnifiedRoleManagementPolicy $body, ?UnifiedRoleManagementPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property roleManagementPolicies for policies
     * @param UnifiedRoleManagementPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?UnifiedRoleManagementPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.policies.roleManagementPolicies.item.effectiveRules.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedPoliciesRoleManagementPoliciesItemEffectiveRulesItemUnifiedRoleManagementPolicyRuleItemRequestBuilder
    */
    public function effectiveRulesById(string $id): MicrosoftGraphBetaGeneratedPoliciesRoleManagementPoliciesItemEffectiveRulesItemUnifiedRoleManagementPolicyRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementPolicyRule%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedPoliciesRoleManagementPoliciesItemEffectiveRulesItemUnifiedRoleManagementPolicyRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Represents the role management policies.
     * @param UnifiedRoleManagementPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?UnifiedRoleManagementPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(UnifiedRoleManagementPolicy::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property roleManagementPolicies in policies
     * @param UnifiedRoleManagementPolicy $body 
     * @param UnifiedRoleManagementPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(UnifiedRoleManagementPolicy $body, ?UnifiedRoleManagementPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.policies.roleManagementPolicies.item.rules.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedPoliciesRoleManagementPoliciesItemRulesItemUnifiedRoleManagementPolicyRuleItemRequestBuilder
    */
    public function rulesById(string $id): MicrosoftGraphBetaGeneratedPoliciesRoleManagementPoliciesItemRulesItemUnifiedRoleManagementPolicyRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementPolicyRule%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedPoliciesRoleManagementPoliciesItemRulesItemUnifiedRoleManagementPolicyRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
