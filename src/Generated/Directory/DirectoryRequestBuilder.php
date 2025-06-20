<?php

namespace Microsoft\Graph\Beta\Generated\Directory;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Directory\AdministrativeUnits\AdministrativeUnitsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\AttributeSets\AttributeSetsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\AuthenticationMethodDevices\AuthenticationMethodDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\CertificateAuthorities\CertificateAuthoritiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\CustomSecurityAttributeDefinitions\CustomSecurityAttributeDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\DeletedItems\DeletedItemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\DeviceLocalCredentials\DeviceLocalCredentialsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\ExternalUserProfiles\ExternalUserProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\FeatureRolloutPolicies\FeatureRolloutPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\FederationConfigurations\FederationConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\ImpactedResources\ImpactedResourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\InboundSharedUserProfiles\InboundSharedUserProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\OnPremisesSynchronization\OnPremisesSynchronizationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\OutboundSharedUserProfiles\OutboundSharedUserProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\PendingExternalUserProfiles\PendingExternalUserProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\PublicKeyInfrastructure\PublicKeyInfrastructureRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\RecommendationConfiguration\RecommendationConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\Recommendations\RecommendationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\SharedEmailDomains\SharedEmailDomainsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\SubscriptionsWithCommerceSubscriptionId\SubscriptionsWithCommerceSubscriptionIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\SubscriptionsWithOcpSubscriptionId\SubscriptionsWithOcpSubscriptionIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\Templates\TemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Directory;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the directory singleton.
*/
class DirectoryRequestBuilder extends BaseRequestBuilder 
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
     * Provides operations to manage the authenticationMethodDevices property of the microsoft.graph.directory entity.
    */
    public function authenticationMethodDevices(): AuthenticationMethodDevicesRequestBuilder {
        return new AuthenticationMethodDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the certificateAuthorities property of the microsoft.graph.directory entity.
    */
    public function certificateAuthorities(): CertificateAuthoritiesRequestBuilder {
        return new CertificateAuthoritiesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the deviceLocalCredentials property of the microsoft.graph.directory entity.
    */
    public function deviceLocalCredentials(): DeviceLocalCredentialsRequestBuilder {
        return new DeviceLocalCredentialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the externalUserProfiles property of the microsoft.graph.directory entity.
    */
    public function externalUserProfiles(): ExternalUserProfilesRequestBuilder {
        return new ExternalUserProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the pendingExternalUserProfiles property of the microsoft.graph.directory entity.
    */
    public function pendingExternalUserProfiles(): PendingExternalUserProfilesRequestBuilder {
        return new PendingExternalUserProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the publicKeyInfrastructure property of the microsoft.graph.directory entity.
    */
    public function publicKeyInfrastructure(): PublicKeyInfrastructureRequestBuilder {
        return new PublicKeyInfrastructureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the recommendationConfiguration property of the microsoft.graph.directory entity.
    */
    public function recommendationConfiguration(): RecommendationConfigurationRequestBuilder {
        return new RecommendationConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the recommendations property of the microsoft.graph.directory entity.
    */
    public function recommendations(): RecommendationsRequestBuilder {
        return new RecommendationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharedEmailDomains property of the microsoft.graph.directory entity.
    */
    public function sharedEmailDomains(): SharedEmailDomainsRequestBuilder {
        return new SharedEmailDomainsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the subscriptions property of the microsoft.graph.directory entity.
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the templates property of the microsoft.graph.directory entity.
    */
    public function templates(): TemplatesRequestBuilder {
        return new TemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DirectoryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get directory
     * @param DirectoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Directory|null>
     * @throws Exception
    */
    public function get(?DirectoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Directory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update directory
     * @param Directory $body The request body
     * @param DirectoryRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Directory|null>
     * @throws Exception
    */
    public function patch(Directory $body, ?DirectoryRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Directory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to manage the subscriptions property of the microsoft.graph.directory entity.
     * @param string $commerceSubscriptionId Alternate key of companySubscription
     * @return SubscriptionsWithCommerceSubscriptionIdRequestBuilder
    */
    public function subscriptionsWithCommerceSubscriptionId(string $commerceSubscriptionId): SubscriptionsWithCommerceSubscriptionIdRequestBuilder {
        return new SubscriptionsWithCommerceSubscriptionIdRequestBuilder($this->pathParameters, $this->requestAdapter, $commerceSubscriptionId);
    }

    /**
     * Provides operations to manage the subscriptions property of the microsoft.graph.directory entity.
     * @param string $ocpSubscriptionId Alternate key of companySubscription
     * @return SubscriptionsWithOcpSubscriptionIdRequestBuilder
    */
    public function subscriptionsWithOcpSubscriptionId(string $ocpSubscriptionId): SubscriptionsWithOcpSubscriptionIdRequestBuilder {
        return new SubscriptionsWithOcpSubscriptionIdRequestBuilder($this->pathParameters, $this->requestAdapter, $ocpSubscriptionId);
    }

    /**
     * Get directory
     * @param DirectoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DirectoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update directory
     * @param Directory $body The request body
     * @param DirectoryRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Directory $body, ?DirectoryRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DirectoryRequestBuilder
    */
    public function withUrl(string $rawUrl): DirectoryRequestBuilder {
        return new DirectoryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
