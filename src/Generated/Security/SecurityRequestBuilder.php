<?php

namespace Microsoft\Graph\Beta\Generated\Security;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\Security;
use Microsoft\Graph\Beta\Generated\Security\Alerts_v2\Alerts_v2RequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Alerts\AlertsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\AttackSimulation\AttackSimulationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\CasesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\CloudAppSecurityProfiles\CloudAppSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\CloudAppSecurityProfiles\Item\CloudAppSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\DomainSecurityProfiles\DomainSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\DomainSecurityProfiles\Item\DomainSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\FileSecurityProfiles\FileSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\FileSecurityProfiles\Item\FileSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\HostSecurityProfiles\HostSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\HostSecurityProfiles\Item\HostSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Incidents\IncidentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Incidents\Item\IncidentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\IpSecurityProfiles\IpSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\IpSecurityProfiles\Item\IpSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Labels\LabelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ProviderTenantSettings\Item\ProviderTenantSettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ProviderTenantSettings\ProviderTenantSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScoreControlProfiles\Item\SecureScoreControlProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScoreControlProfiles\SecureScoreControlProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScores\Item\SecureScoreItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScores\SecureScoresRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityActions\Item\SecurityActionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityActions\SecurityActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityRunHuntingQuery\SecurityRunHuntingQueryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SubjectRightsRequests\Item\SubjectRightsRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SubjectRightsRequests\SubjectRightsRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\ThreatSubmissionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\Item\TiIndicatorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\TiIndicatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Triggers\TriggersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TriggerTypes\TriggerTypesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\UserSecurityProfiles\Item\UserSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\UserSecurityProfiles\UserSecurityProfilesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the security singleton.
*/
class SecurityRequestBuilder 
{
    /**
     * Provides operations to manage the alerts property of the microsoft.graph.security entity.
    */
    public function alerts(): AlertsRequestBuilder {
        return new AlertsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the alerts_v2 property of the microsoft.graph.security entity.
    */
    public function alerts_v2(): Alerts_v2RequestBuilder {
        return new Alerts_v2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attackSimulation property of the microsoft.graph.security entity.
    */
    public function attackSimulation(): AttackSimulationRequestBuilder {
        return new AttackSimulationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cases property of the microsoft.graph.security entity.
    */
    public function cases(): CasesRequestBuilder {
        return new CasesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudAppSecurityProfiles property of the microsoft.graph.security entity.
    */
    public function cloudAppSecurityProfiles(): CloudAppSecurityProfilesRequestBuilder {
        return new CloudAppSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the domainSecurityProfiles property of the microsoft.graph.security entity.
    */
    public function domainSecurityProfiles(): DomainSecurityProfilesRequestBuilder {
        return new DomainSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the fileSecurityProfiles property of the microsoft.graph.security entity.
    */
    public function fileSecurityProfiles(): FileSecurityProfilesRequestBuilder {
        return new FileSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hostSecurityProfiles property of the microsoft.graph.security entity.
    */
    public function hostSecurityProfiles(): HostSecurityProfilesRequestBuilder {
        return new HostSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the incidents property of the microsoft.graph.security entity.
    */
    public function incidents(): IncidentsRequestBuilder {
        return new IncidentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the informationProtection property of the microsoft.graph.security entity.
    */
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ipSecurityProfiles property of the microsoft.graph.security entity.
    */
    public function ipSecurityProfiles(): IpSecurityProfilesRequestBuilder {
        return new IpSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the labels property of the microsoft.graph.security entity.
    */
    public function labels(): LabelsRequestBuilder {
        return new LabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the providerTenantSettings property of the microsoft.graph.security entity.
    */
    public function providerTenantSettings(): ProviderTenantSettingsRequestBuilder {
        return new ProviderTenantSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the secureScoreControlProfiles property of the microsoft.graph.security entity.
    */
    public function secureScoreControlProfiles(): SecureScoreControlProfilesRequestBuilder {
        return new SecureScoreControlProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the secureScores property of the microsoft.graph.security entity.
    */
    public function secureScores(): SecureScoresRequestBuilder {
        return new SecureScoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the securityActions property of the microsoft.graph.security entity.
    */
    public function securityActions(): SecurityActionsRequestBuilder {
        return new SecurityActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the runHuntingQuery method.
    */
    public function securityRunHuntingQuery(): SecurityRunHuntingQueryRequestBuilder {
        return new SecurityRunHuntingQueryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the subjectRightsRequests property of the microsoft.graph.security entity.
    */
    public function subjectRightsRequests(): SubjectRightsRequestsRequestBuilder {
        return new SubjectRightsRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threatSubmission property of the microsoft.graph.security entity.
    */
    public function threatSubmission(): ThreatSubmissionRequestBuilder {
        return new ThreatSubmissionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tiIndicators property of the microsoft.graph.security entity.
    */
    public function tiIndicators(): TiIndicatorsRequestBuilder {
        return new TiIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the triggers property of the microsoft.graph.security entity.
    */
    public function triggers(): TriggersRequestBuilder {
        return new TriggersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the triggerTypes property of the microsoft.graph.security entity.
    */
    public function triggerTypes(): TriggerTypesRequestBuilder {
        return new TriggerTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the userSecurityProfiles property of the microsoft.graph.security entity.
    */
    public function userSecurityProfiles(): UserSecurityProfilesRequestBuilder {
        return new UserSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the alerts_v2 property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Security\Alerts_v2\Item\AlertItemRequestBuilder
    */
    public function alerts_v2ById(string $id): \Microsoft\Graph\Beta\Generated\Security\Alerts_v2\Item\AlertItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['alert%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Security\Alerts_v2\Item\AlertItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the alerts property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Security\Alerts\Item\AlertItemRequestBuilder
    */
    public function alertsById(string $id): \Microsoft\Graph\Beta\Generated\Security\Alerts\Item\AlertItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['alert%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Security\Alerts\Item\AlertItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the cloudAppSecurityProfiles property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return CloudAppSecurityProfileItemRequestBuilder
    */
    public function cloudAppSecurityProfilesById(string $id): CloudAppSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudAppSecurityProfile%2Did'] = $id;
        return new CloudAppSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SecurityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/security{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the domainSecurityProfiles property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return DomainSecurityProfileItemRequestBuilder
    */
    public function domainSecurityProfilesById(string $id): DomainSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainSecurityProfile%2Did'] = $id;
        return new DomainSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the fileSecurityProfiles property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return FileSecurityProfileItemRequestBuilder
    */
    public function fileSecurityProfilesById(string $id): FileSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileSecurityProfile%2Did'] = $id;
        return new FileSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get security
     * @param SecurityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?SecurityRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Security::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the hostSecurityProfiles property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return HostSecurityProfileItemRequestBuilder
    */
    public function hostSecurityProfilesById(string $id): HostSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostSecurityProfile%2Did'] = $id;
        return new HostSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the incidents property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return IncidentItemRequestBuilder
    */
    public function incidentsById(string $id): IncidentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['incident%2Did'] = $id;
        return new IncidentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the ipSecurityProfiles property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return IpSecurityProfileItemRequestBuilder
    */
    public function ipSecurityProfilesById(string $id): IpSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['ipSecurityProfile%2Did'] = $id;
        return new IpSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update security
     * @param Security $body The request body
     * @param SecurityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Security $body, ?SecurityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Security::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the providerTenantSettings property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return ProviderTenantSettingItemRequestBuilder
    */
    public function providerTenantSettingsById(string $id): ProviderTenantSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['providerTenantSetting%2Did'] = $id;
        return new ProviderTenantSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the secureScoreControlProfiles property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return SecureScoreControlProfileItemRequestBuilder
    */
    public function secureScoreControlProfilesById(string $id): SecureScoreControlProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['secureScoreControlProfile%2Did'] = $id;
        return new SecureScoreControlProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the secureScores property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return SecureScoreItemRequestBuilder
    */
    public function secureScoresById(string $id): SecureScoreItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['secureScore%2Did'] = $id;
        return new SecureScoreItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the securityActions property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return SecurityActionItemRequestBuilder
    */
    public function securityActionsById(string $id): SecurityActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['securityAction%2Did'] = $id;
        return new SecurityActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the subjectRightsRequests property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return SubjectRightsRequestItemRequestBuilder
    */
    public function subjectRightsRequestsById(string $id): SubjectRightsRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subjectRightsRequest%2Did'] = $id;
        return new SubjectRightsRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tiIndicators property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return TiIndicatorItemRequestBuilder
    */
    public function tiIndicatorsById(string $id): TiIndicatorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tiIndicator%2Did'] = $id;
        return new TiIndicatorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get security
     * @param SecurityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SecurityRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update security
     * @param Security $body The request body
     * @param SecurityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Security $body, ?SecurityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the userSecurityProfiles property of the microsoft.graph.security entity.
     * @param string $id Unique identifier of the item
     * @return UserSecurityProfileItemRequestBuilder
    */
    public function userSecurityProfilesById(string $id): UserSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userSecurityProfile%2Did'] = $id;
        return new UserSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
