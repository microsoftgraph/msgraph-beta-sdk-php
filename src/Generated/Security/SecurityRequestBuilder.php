<?php

namespace Microsoft\Graph\Beta\Generated\Security;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\Security;
use Microsoft\Graph\Beta\Generated\Security\Alerts\AlertsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Alerts\Item\AlertItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\AttackSimulation\AttackSimulationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\CloudAppSecurityProfiles\CloudAppSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\CloudAppSecurityProfiles\Item\CloudAppSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\DomainSecurityProfiles\DomainSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\DomainSecurityProfiles\Item\DomainSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\FileSecurityProfiles\FileSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\FileSecurityProfiles\Item\FileSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\HostSecurityProfiles\HostSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\HostSecurityProfiles\Item\HostSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\IpSecurityProfiles\IpSecurityProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\IpSecurityProfiles\Item\IpSecurityProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ProviderTenantSettings\Item\ProviderTenantSettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ProviderTenantSettings\ProviderTenantSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScoreControlProfiles\Item\SecureScoreControlProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScoreControlProfiles\SecureScoreControlProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScores\Item\SecureScoreItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecureScores\SecureScoresRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityActions\Item\SecurityActionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityActions\SecurityActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\Item\TiIndicatorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\TiIndicatorsRequestBuilder;
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
     * The attackSimulation property
    */
    public function attackSimulation(): AttackSimulationRequestBuilder {
        return new AttackSimulationRequestBuilder($this->pathParameters, $this->requestAdapter);
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
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The providerTenantSettings property
    */
    public function providerTenantSettings(): ProviderTenantSettingsRequestBuilder {
        return new ProviderTenantSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
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
     * The tiIndicators property
    */
    public function tiIndicators(): TiIndicatorsRequestBuilder {
        return new TiIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The userSecurityProfiles property
    */
    public function userSecurityProfiles(): UserSecurityProfilesRequestBuilder {
        return new UserSecurityProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.alerts.item collection
     * @param string $id Unique identifier of the item
     * @return AlertItemRequestBuilder
    */
    public function alertsById(string $id): AlertItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['alert_id'] = $id;
        return new AlertItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.cloudAppSecurityProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return CloudAppSecurityProfileItemRequestBuilder
    */
    public function cloudAppSecurityProfilesById(string $id): CloudAppSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudAppSecurityProfile_id'] = $id;
        return new CloudAppSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SecurityRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/security{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get security
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
     * Update security
     * @param Security $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Security $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.domainSecurityProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return DomainSecurityProfileItemRequestBuilder
    */
    public function domainSecurityProfilesById(string $id): DomainSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainSecurityProfile_id'] = $id;
        return new DomainSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.fileSecurityProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return FileSecurityProfileItemRequestBuilder
    */
    public function fileSecurityProfilesById(string $id): FileSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileSecurityProfile_id'] = $id;
        return new FileSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get security
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Security::class, $responseHandler);
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
        $urlTplParams['hostSecurityProfile_id'] = $id;
        return new HostSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.ipSecurityProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return IpSecurityProfileItemRequestBuilder
    */
    public function ipSecurityProfilesById(string $id): IpSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['ipSecurityProfile_id'] = $id;
        return new IpSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update security
     * @param Security $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Security $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
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
        $urlTplParams['providerTenantSetting_id'] = $id;
        return new ProviderTenantSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.secureScoreControlProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return SecureScoreControlProfileItemRequestBuilder
    */
    public function secureScoreControlProfilesById(string $id): SecureScoreControlProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['secureScoreControlProfile_id'] = $id;
        return new SecureScoreControlProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.secureScores.item collection
     * @param string $id Unique identifier of the item
     * @return SecureScoreItemRequestBuilder
    */
    public function secureScoresById(string $id): SecureScoreItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['secureScore_id'] = $id;
        return new SecureScoreItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.securityActions.item collection
     * @param string $id Unique identifier of the item
     * @return SecurityActionItemRequestBuilder
    */
    public function securityActionsById(string $id): SecurityActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['securityAction_id'] = $id;
        return new SecurityActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.tiIndicators.item collection
     * @param string $id Unique identifier of the item
     * @return TiIndicatorItemRequestBuilder
    */
    public function tiIndicatorsById(string $id): TiIndicatorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tiIndicator_id'] = $id;
        return new TiIndicatorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.security.userSecurityProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return UserSecurityProfileItemRequestBuilder
    */
    public function userSecurityProfilesById(string $id): UserSecurityProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userSecurityProfile_id'] = $id;
        return new UserSecurityProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
