<?php

namespace Microsoft\Graph\Beta\Generated\Security;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\Security;
use Microsoft\Graph\Beta\Generated\Security\Alerts_v2\Alerts_v2RequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Alerts\AlertsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\AttackSimulation\AttackSimulationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\AuditLog\AuditLogRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Cases\CasesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\CloudAppSecurityProfiles\CloudAppSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Collaboration\CollaborationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\DomainSecurityProfiles\DomainSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\FileSecurityProfiles\FileSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\HostSecurityProfiles\HostSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Identities\IdentitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Incidents\IncidentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\IpSecurityProfiles\IpSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Labels\LabelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\MicrosoftGraphSecurityRunHuntingQuery\MicrosoftGraphSecurityRunHuntingQueryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Partner\PartnerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ProviderTenantSettings\ProviderTenantSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Rules\RulesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScoreControlProfiles\SecureScoreControlProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScores\SecureScoresRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityActions\SecurityActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SubjectRightsRequests\SubjectRightsRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\ThreatIntelligenceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\ThreatSubmissionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\TiIndicatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Triggers\TriggersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TriggerTypes\TriggerTypesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\UserSecurityProfiles\UserSecurityProfilesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the security singleton.
*/
class SecurityRequestBuilder extends BaseRequestBuilder 
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
     * Provides operations to manage the auditLog property of the microsoft.graph.security entity.
    */
    public function auditLog(): AuditLogRequestBuilder {
        return new AuditLogRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the collaboration property of the microsoft.graph.security entity.
    */
    public function collaboration(): CollaborationRequestBuilder {
        return new CollaborationRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the identities property of the microsoft.graph.security entity.
    */
    public function identities(): IdentitiesRequestBuilder {
        return new IdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the runHuntingQuery method.
    */
    public function microsoftGraphSecurityRunHuntingQuery(): MicrosoftGraphSecurityRunHuntingQueryRequestBuilder {
        return new MicrosoftGraphSecurityRunHuntingQueryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the partner property of the microsoft.graph.security entity.
    */
    public function partner(): PartnerRequestBuilder {
        return new PartnerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the providerTenantSettings property of the microsoft.graph.security entity.
    */
    public function providerTenantSettings(): ProviderTenantSettingsRequestBuilder {
        return new ProviderTenantSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the rules property of the microsoft.graph.security entity.
    */
    public function rules(): RulesRequestBuilder {
        return new RulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Provides operations to manage the subjectRightsRequests property of the microsoft.graph.security entity.
    */
    public function subjectRightsRequests(): SubjectRightsRequestsRequestBuilder {
        return new SubjectRightsRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threatIntelligence property of the microsoft.graph.security entity.
    */
    public function threatIntelligence(): ThreatIntelligenceRequestBuilder {
        return new ThreatIntelligenceRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the userSecurityProfiles property of the microsoft.graph.security entity.
    */
    public function userSecurityProfiles(): UserSecurityProfilesRequestBuilder {
        return new UserSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SecurityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get security
     * @param SecurityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Security|null>
     * @throws Exception
    */
    public function get(?SecurityRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Security::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update security
     * @param Security $body The request body
     * @param SecurityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Security|null>
     * @throws Exception
    */
    public function patch(Security $body, ?SecurityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Security::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * @return SecurityRequestBuilder
    */
    public function withUrl(string $rawUrl): SecurityRequestBuilder {
        return new SecurityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
