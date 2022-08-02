<?php

namespace Microsoft\Graph\Beta\Generated\Security;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security;
use Microsoft\Graph\Beta\Generated\Security\Alerts_v2\Alerts_v2RequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Alerts_v2\Item\AlertItemRequestBuilder as MicrosoftGraphBetaGeneratedSecurityAlerts_v2ItemAlertItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Alerts\AlertsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Alerts\Item\AlertItemRequestBuilder as MicrosoftGraphBetaGeneratedSecurityAlertsItemAlertItemRequestBuilder;
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
use Microsoft\Graph\Beta\Generated\Security\RunHuntingQuery\RunHuntingQueryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScoreControlProfiles\Item\SecureScoreControlProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScoreControlProfiles\SecureScoreControlProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScores\Item\SecureScoreItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScores\SecureScoresRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityActions\Item\SecurityActionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityActions\SecurityActionsRequestBuilder;
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
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class SecurityRequestBuilder 
{
    /**
     * The alerts property
    */
    public function alerts(): AlertsRequestBuilder {
        return new AlertsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The alerts_v2 property
    */
    public function alerts_v2(): Alerts_v2RequestBuilder {
        return new Alerts_v2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The attackSimulation property
    */
    public function attackSimulation(): AttackSimulationRequestBuilder {
        return new AttackSimulationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cases property
    */
    public function cases(): CasesRequestBuilder {
        return new CasesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cloudAppSecurityProfiles property
    */
    public function cloudAppSecurityProfiles(): CloudAppSecurityProfilesRequestBuilder {
        return new CloudAppSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The domainSecurityProfiles property
    */
    public function domainSecurityProfiles(): DomainSecurityProfilesRequestBuilder {
        return new DomainSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The fileSecurityProfiles property
    */
    public function fileSecurityProfiles(): FileSecurityProfilesRequestBuilder {
        return new FileSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The hostSecurityProfiles property
    */
    public function hostSecurityProfiles(): HostSecurityProfilesRequestBuilder {
        return new HostSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incidents property
    */
    public function incidents(): IncidentsRequestBuilder {
        return new IncidentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The informationProtection property
    */
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ipSecurityProfiles property
    */
    public function ipSecurityProfiles(): IpSecurityProfilesRequestBuilder {
        return new IpSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The labels property
    */
    public function labels(): LabelsRequestBuilder {
        return new LabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The providerTenantSettings property
    */
    public function providerTenantSettings(): ProviderTenantSettingsRequestBuilder {
        return new ProviderTenantSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The runHuntingQuery property
    */
    public function runHuntingQuery(): RunHuntingQueryRequestBuilder {
        return new RunHuntingQueryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The secureScoreControlProfiles property
    */
    public function secureScoreControlProfiles(): SecureScoreControlProfilesRequestBuilder {
        return new SecureScoreControlProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The secureScores property
    */
    public function secureScores(): SecureScoresRequestBuilder {
        return new SecureScoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The securityActions property
    */
    public function securityActions(): SecurityActionsRequestBuilder {
        return new SecurityActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subjectRightsRequests property
    */
    public function subjectRightsRequests(): SubjectRightsRequestsRequestBuilder {
        return new SubjectRightsRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The threatSubmission property
    */
    public function threatSubmission(): ThreatSubmissionRequestBuilder {
        return new ThreatSubmissionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tiIndicators property
    */
    public function tiIndicators(): TiIndicatorsRequestBuilder {
        return new TiIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The triggers property
    */
    public function triggers(): TriggersRequestBuilder {
        return new TriggersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The triggerTypes property
    */
    public function triggerTypes(): TriggerTypesRequestBuilder {
        return new TriggerTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The userSecurityProfiles property
    */
    public function userSecurityProfiles(): UserSecurityProfilesRequestBuilder {
        return new UserSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.alerts_v2.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedSecurityAlerts_v2ItemAlertItemRequestBuilder
    */
    public function alerts_v2ById(string $id): MicrosoftGraphBetaGeneratedSecurityAlerts_v2ItemAlertItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['alert%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedSecurityAlerts_v2ItemAlertItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.alerts.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedSecurityAlertsItemAlertItemRequestBuilder
    */
    public function alertsById(string $id): MicrosoftGraphBetaGeneratedSecurityAlertsItemAlertItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['alert%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedSecurityAlertsItemAlertItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.cloudAppSecurityProfiles.item collection
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
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/security{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get security
     * @param SecurityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?SecurityRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update security
     * @param Security $body 
     * @param SecurityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Security $body, ?SecurityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.domainSecurityProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return DomainSecurityProfileItemRequestBuilder
    */
    public function domainSecurityProfilesById(string $id): DomainSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainSecurityProfile%2Did'] = $id;
        return new DomainSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.fileSecurityProfiles.item collection
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
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?SecurityRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Security::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.hostSecurityProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return HostSecurityProfileItemRequestBuilder
    */
    public function hostSecurityProfilesById(string $id): HostSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostSecurityProfile%2Did'] = $id;
        return new HostSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.incidents.item collection
     * @param string $id Unique identifier of the item
     * @return IncidentItemRequestBuilder
    */
    public function incidentsById(string $id): IncidentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['incident%2Did'] = $id;
        return new IncidentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.ipSecurityProfiles.item collection
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
     * @param Security $body 
     * @param SecurityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Security $body, ?SecurityRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.providerTenantSettings.item collection
     * @param string $id Unique identifier of the item
     * @return ProviderTenantSettingItemRequestBuilder
    */
    public function providerTenantSettingsById(string $id): ProviderTenantSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['providerTenantSetting%2Did'] = $id;
        return new ProviderTenantSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.secureScoreControlProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return SecureScoreControlProfileItemRequestBuilder
    */
    public function secureScoreControlProfilesById(string $id): SecureScoreControlProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['secureScoreControlProfile%2Did'] = $id;
        return new SecureScoreControlProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.secureScores.item collection
     * @param string $id Unique identifier of the item
     * @return SecureScoreItemRequestBuilder
    */
    public function secureScoresById(string $id): SecureScoreItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['secureScore%2Did'] = $id;
        return new SecureScoreItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.securityActions.item collection
     * @param string $id Unique identifier of the item
     * @return SecurityActionItemRequestBuilder
    */
    public function securityActionsById(string $id): SecurityActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['securityAction%2Did'] = $id;
        return new SecurityActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.subjectRightsRequests.item collection
     * @param string $id Unique identifier of the item
     * @return SubjectRightsRequestItemRequestBuilder
    */
    public function subjectRightsRequestsById(string $id): SubjectRightsRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subjectRightsRequest%2Did'] = $id;
        return new SubjectRightsRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.tiIndicators.item collection
     * @param string $id Unique identifier of the item
     * @return TiIndicatorItemRequestBuilder
    */
    public function tiIndicatorsById(string $id): TiIndicatorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tiIndicator%2Did'] = $id;
        return new TiIndicatorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.userSecurityProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return UserSecurityProfileItemRequestBuilder
    */
    public function userSecurityProfilesById(string $id): UserSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userSecurityProfile%2Did'] = $id;
        return new UserSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
