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
use Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\Item\InboundSharedUserProfileUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\OnPremisesSynchronization\Item\OnPremisesDirectorySynchronizationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\OnPremisesSynchronization\OnPremisesSynchronizationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\OutboundSharedUserProfiles\Item\OutboundSharedUserProfileUserItemRequestBuilder;
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
     * Provides operations to manage the administrativeUnits property of the microsoft.graph.directory entity.
    */
    public function administrativeUnits(): AdministrativeUnitsRequestBuilder {
        return new AdministrativeUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attributeSets property of the microsoft.graph.directory entity.
    */
    public function attributeSets(): AttributeSetsRequestBuilder {
        return new AttributeSetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customSecurityAttributeDefinitions property of the microsoft.graph.directory entity.
    */
    public function customSecurityAttributeDefinitions(): CustomSecurityAttributeDefinitionsRequestBuilder {
        return new CustomSecurityAttributeDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deletedItems property of the microsoft.graph.directory entity.
    */
    public function deletedItems(): DeletedItemsRequestBuilder {
        return new DeletedItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the featureRolloutPolicies property of the microsoft.graph.directory entity.
    */
    public function featureRolloutPolicies(): FeatureRolloutPoliciesRequestBuilder {
        return new FeatureRolloutPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the federationConfigurations property of the microsoft.graph.directory entity.
    */
    public function federationConfigurations(): FederationConfigurationsRequestBuilder {
        return new FederationConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the impactedResources property of the microsoft.graph.directory entity.
    */
    public function impactedResources(): ImpactedResourcesRequestBuilder {
        return new ImpactedResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inboundSharedUserProfiles property of the microsoft.graph.directory entity.
    */
    public function inboundSharedUserProfiles(): InboundSharedUserProfilesRequestBuilder {
        return new InboundSharedUserProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onPremisesSynchronization property of the microsoft.graph.directory entity.
    */
    public function onPremisesSynchronization(): OnPremisesSynchronizationRequestBuilder {
        return new OnPremisesSynchronizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the outboundSharedUserProfiles property of the microsoft.graph.directory entity.
    */
    public function outboundSharedUserProfiles(): OutboundSharedUserProfilesRequestBuilder {
        return new OutboundSharedUserProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the recommendations property of the microsoft.graph.directory entity.
    */
    public function recommendations(): RecommendationsRequestBuilder {
        return new RecommendationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the sharedEmailDomains property of the microsoft.graph.directory entity.
    */
    public function sharedEmailDomains(): SharedEmailDomainsRequestBuilder {
        return new SharedEmailDomainsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the administrativeUnits property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return AdministrativeUnitItemRequestBuilder|null
    */
    public function administrativeUnitsById(string $id): ?AdministrativeUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['administrativeUnit%2Did'] = $id;
        return new AdministrativeUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the attributeSets property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return AttributeSetItemRequestBuilder|null
    */
    public function attributeSetsById(string $id): ?AttributeSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attributeSet%2Did'] = $id;
        return new AttributeSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DirectoryRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/directory{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get directory
     * @param DirectoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DirectoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update directory
     * @param Directory $body The request body
     * @param DirectoryRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Directory $body, ?DirectoryRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Provides operations to manage the customSecurityAttributeDefinitions property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return CustomSecurityAttributeDefinitionItemRequestBuilder|null
    */
    public function customSecurityAttributeDefinitionsById(string $id): ?CustomSecurityAttributeDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customSecurityAttributeDefinition%2Did'] = $id;
        return new CustomSecurityAttributeDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deletedItems property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder|null
    */
    public function deletedItemsById(string $id): ?DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the featureRolloutPolicies property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return FeatureRolloutPolicyItemRequestBuilder|null
    */
    public function featureRolloutPoliciesById(string $id): ?FeatureRolloutPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['featureRolloutPolicy%2Did'] = $id;
        return new FeatureRolloutPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the federationConfigurations property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return IdentityProviderBaseItemRequestBuilder|null
    */
    public function federationConfigurationsById(string $id): ?IdentityProviderBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProviderBase%2Did'] = $id;
        return new IdentityProviderBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get directory
     * @param DirectoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DirectoryRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Directory::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the impactedResources property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return RecommendationResourceItemRequestBuilder|null
    */
    public function impactedResourcesById(string $id): ?RecommendationResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['recommendationResource%2Did'] = $id;
        return new RecommendationResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the inboundSharedUserProfiles property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return InboundSharedUserProfileUserItemRequestBuilder|null
    */
    public function inboundSharedUserProfilesById(string $id): ?InboundSharedUserProfileUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['inboundSharedUserProfile%2DuserId'] = $id;
        return new InboundSharedUserProfileUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the onPremisesSynchronization property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return OnPremisesDirectorySynchronizationItemRequestBuilder|null
    */
    public function onPremisesSynchronizationById(string $id): ?OnPremisesDirectorySynchronizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onPremisesDirectorySynchronization%2Did'] = $id;
        return new OnPremisesDirectorySynchronizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the outboundSharedUserProfiles property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return OutboundSharedUserProfileUserItemRequestBuilder|null
    */
    public function outboundSharedUserProfilesById(string $id): ?OutboundSharedUserProfileUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outboundSharedUserProfile%2DuserId'] = $id;
        return new OutboundSharedUserProfileUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update directory
     * @param Directory $body The request body
     * @param DirectoryRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Directory $body, ?DirectoryRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Directory::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the recommendations property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return RecommendationItemRequestBuilder|null
    */
    public function recommendationsById(string $id): ?RecommendationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['recommendation%2Did'] = $id;
        return new RecommendationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the sharedEmailDomains property of the microsoft.graph.directory entity.
     * @param string $id Unique identifier of the item
     * @return SharedEmailDomainItemRequestBuilder|null
    */
    public function sharedEmailDomainsById(string $id): ?SharedEmailDomainItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedEmailDomain%2Did'] = $id;
        return new SharedEmailDomainItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
