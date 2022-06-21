<?php

namespace Microsoft\Graph\Beta\Generated\Directory;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Directory\AdministrativeUnits\AdministrativeUnitsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\AdministrativeUnits\Item\AdministrativeUnitItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\AttributeSets\AttributeSetsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\AttributeSets\Item\AttributeSetItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\CustomSecurityAttributeDefinitions\CustomSecurityAttributeDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\CustomSecurityAttributeDefinitions\Item\CustomSecurityAttributeDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\DeletedItems\DeletedItemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\DeletedItems\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\FeatureRolloutPolicies\FeatureRolloutPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\FeatureRolloutPolicies\Item\FeatureRolloutPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\FederationConfigurations\FederationConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\FederationConfigurations\Item\IdentityProviderBaseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\ImpactedResources\ImpactedResourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\ImpactedResources\Item\RecommendationResourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\InboundSharedUserProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\Item\InboundSharedUserProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\OutboundSharedUserProfiles\Item\OutboundSharedUserProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\OutboundSharedUserProfiles\OutboundSharedUserProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\Recommendations\Item\RecommendationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\Recommendations\RecommendationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\SharedEmailDomains\Item\SharedEmailDomainItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\SharedEmailDomains\SharedEmailDomainsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Directory;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DirectoryRequestBuilder 
{
    /**
     * The administrativeUnits property
    */
    public function administrativeUnits(): AdministrativeUnitsRequestBuilder {
        return new AdministrativeUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The attributeSets property
    */
    public function attributeSets(): AttributeSetsRequestBuilder {
        return new AttributeSetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customSecurityAttributeDefinitions property
    */
    public function customSecurityAttributeDefinitions(): CustomSecurityAttributeDefinitionsRequestBuilder {
        return new CustomSecurityAttributeDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deletedItems property
    */
    public function deletedItems(): DeletedItemsRequestBuilder {
        return new DeletedItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The featureRolloutPolicies property
    */
    public function featureRolloutPolicies(): FeatureRolloutPoliciesRequestBuilder {
        return new FeatureRolloutPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The federationConfigurations property
    */
    public function federationConfigurations(): FederationConfigurationsRequestBuilder {
        return new FederationConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The impactedResources property
    */
    public function impactedResources(): ImpactedResourcesRequestBuilder {
        return new ImpactedResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The inboundSharedUserProfiles property
    */
    public function inboundSharedUserProfiles(): InboundSharedUserProfilesRequestBuilder {
        return new InboundSharedUserProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The outboundSharedUserProfiles property
    */
    public function outboundSharedUserProfiles(): OutboundSharedUserProfilesRequestBuilder {
        return new OutboundSharedUserProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The recommendations property
    */
    public function recommendations(): RecommendationsRequestBuilder {
        return new RecommendationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The sharedEmailDomains property
    */
    public function sharedEmailDomains(): SharedEmailDomainsRequestBuilder {
        return new SharedEmailDomainsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.administrativeUnits.item collection
     * @param string $id Unique identifier of the item
     * @return AdministrativeUnitItemRequestBuilder
    */
    public function administrativeUnitsById(string $id): AdministrativeUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['administrativeUnit_id'] = $id;
        return new AdministrativeUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.attributeSets.item collection
     * @param string $id Unique identifier of the item
     * @return AttributeSetItemRequestBuilder
    */
    public function attributeSetsById(string $id): AttributeSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attributeSet_id'] = $id;
        return new AttributeSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DirectoryRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/directory{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get directory
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
     * Update directory
     * @param Directory $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Directory $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.customSecurityAttributeDefinitions.item collection
     * @param string $id Unique identifier of the item
     * @return CustomSecurityAttributeDefinitionItemRequestBuilder
    */
    public function customSecurityAttributeDefinitionsById(string $id): CustomSecurityAttributeDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customSecurityAttributeDefinition_id'] = $id;
        return new CustomSecurityAttributeDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.deletedItems.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function deletedItemsById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.featureRolloutPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return FeatureRolloutPolicyItemRequestBuilder
    */
    public function featureRolloutPoliciesById(string $id): FeatureRolloutPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['featureRolloutPolicy_id'] = $id;
        return new FeatureRolloutPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.federationConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityProviderBaseItemRequestBuilder
    */
    public function federationConfigurationsById(string $id): IdentityProviderBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProviderBase_id'] = $id;
        return new IdentityProviderBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get directory
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Directory::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.impactedResources.item collection
     * @param string $id Unique identifier of the item
     * @return RecommendationResourceItemRequestBuilder
    */
    public function impactedResourcesById(string $id): RecommendationResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['recommendationResource_id'] = $id;
        return new RecommendationResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.inboundSharedUserProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return InboundSharedUserProfileItemRequestBuilder
    */
    public function inboundSharedUserProfilesById(string $id): InboundSharedUserProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['inboundSharedUserProfile_userId'] = $id;
        return new InboundSharedUserProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.outboundSharedUserProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return OutboundSharedUserProfileItemRequestBuilder
    */
    public function outboundSharedUserProfilesById(string $id): OutboundSharedUserProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outboundSharedUserProfile_userId'] = $id;
        return new OutboundSharedUserProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update directory
     * @param Directory $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Directory $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.recommendations.item collection
     * @param string $id Unique identifier of the item
     * @return RecommendationItemRequestBuilder
    */
    public function recommendationsById(string $id): RecommendationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['recommendation_id'] = $id;
        return new RecommendationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directory.sharedEmailDomains.item collection
     * @param string $id Unique identifier of the item
     * @return SharedEmailDomainItemRequestBuilder
    */
    public function sharedEmailDomainsById(string $id): SharedEmailDomainItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedEmailDomain_id'] = $id;
        return new SharedEmailDomainItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
