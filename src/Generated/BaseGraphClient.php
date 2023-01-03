<?php

namespace Microsoft\Graph\Beta\Generated;

use Microsoft\Graph\Beta\Generated\AccessReviewDecisions\AccessReviewDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviewDecisions\Item\AccessReviewDecisionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\AccessReviewsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\AccessReviewItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Activitystatistics\ActivitystatisticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Activitystatistics\Item\ActivityStatisticsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\AdminRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\AdministrativeUnitsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\AdministrativeUnitItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Agreements\AgreementsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Agreements\Item\AgreementItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AllowedDataLocations\AllowedDataLocationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AllowedDataLocations\Item\AllowedDataLocationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\AppRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppCatalogs\AppCatalogsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Applications\ApplicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Applications\Item\ApplicationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApplicationTemplates\ApplicationTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApplicationTemplates\Item\ApplicationTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\ApprovalWorkflowProvidersRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\ApprovalWorkflowProviderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuditLogs\AuditLogsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodConfigurations\AuthenticationMethodConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodConfigurations\Item\AuthenticationMethodConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\BookingBusinessesRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\BookingBusinessItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingCurrencies\BookingCurrenciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingCurrencies\Item\BookingCurrencyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Branding\BrandingRequestBuilder;
use Microsoft\Graph\Beta\Generated\BusinessFlowTemplates\BusinessFlowTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\BusinessFlowTemplates\Item\BusinessFlowTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\CertificateBasedAuthConfiguration\CertificateBasedAuthConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\CertificateBasedAuthConfiguration\Item\CertificateBasedAuthConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Commands\CommandsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Commands\Item\CommandItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\CommunicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\ComplianceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Connections\ConnectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Connections\Item\ExternalConnectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\OrgContactItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contracts\ContractsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contracts\Item\ContractItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\DataClassificationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataPolicyOperations\DataPolicyOperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataPolicyOperations\Item\DataPolicyOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DeviceAppManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Devices\Item\DeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\DirectoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryObjects\DirectoryObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryObjects\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\DirectoryRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\DirectoryRoleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoleTemplates\DirectoryRoleTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoleTemplates\Item\DirectoryRoleTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\DirectorySettingTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item\DirectorySettingTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DomainDnsRecords\DomainDnsRecordsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DomainDnsRecords\Item\DomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\DomainsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\DomainItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\DriveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\EducationRequestBuilder;
use Microsoft\Graph\Beta\Generated\EmployeeExperience\EmployeeExperienceRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\PrintRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\ExternalRequestBuilder;
use Microsoft\Graph\Beta\Generated\FilterOperators\FilterOperatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\FilterOperators\Item\FilterOperatorSchemaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\FinancialsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Functions\FunctionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Functions\Item\AttributeMappingFunctionSchemaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\GovernanceResourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\GovernanceResourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignmentRequests\GovernanceRoleAssignmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignmentRequests\Item\GovernanceRoleAssignmentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignments\GovernanceRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignments\Item\GovernanceRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleDefinitions\GovernanceRoleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleDefinitions\Item\GovernanceRoleDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleSettings\GovernanceRoleSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleSettings\Item\GovernanceRoleSettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceSubjects\GovernanceSubjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceSubjects\Item\GovernanceSubjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\GroupLifecyclePolicies\Item\GroupLifecyclePolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\GroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\IdentityRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\IdentityGovernanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\IdentityProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProviders\Item\IdentityProviderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Invitations\InvitationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Invitations\Item\InvitationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MeRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageEvents\Item\MessageEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageEvents\MessageEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageRecipients\Item\MessageRecipientItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageRecipients\MessageRecipientsRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageTraces\Item\MessageTraceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageTraces\MessageTracesRequestBuilder;
use Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\Item\MobilityManagementPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\MobilityManagementPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Monitoring\MonitoringRequestBuilder;
use Microsoft\Graph\Beta\Generated\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\OfficeConfiguration\OfficeConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\OnPremisesPublishingProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\OnPremisesPublishingProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\Item\OrganizationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\OrganizationRequestBuilder;
use Microsoft\Graph\Beta\Generated\PayloadResponse\Item\PayloadResponseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PayloadResponse\PayloadResponseRequestBuilder;
use Microsoft\Graph\Beta\Generated\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Places\Item\PlaceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Places\PlacesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\PoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Privacy\PrivacyRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\PrivilegedAccessItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\PrivilegedAccessRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedApproval\Item\PrivilegedApprovalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedApproval\PrivilegedApprovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedOperationEvents\Item\PrivilegedOperationEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedOperationEvents\PrivilegedOperationEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignmentRequests\Item\PrivilegedRoleAssignmentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignmentRequests\PrivilegedRoleAssignmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignments\Item\PrivilegedRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignments\PrivilegedRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoles\Item\PrivilegedRoleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoles\PrivilegedRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\Item\PrivilegedSignupStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\PrivilegedSignupStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControls\Item\ProgramControlItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControls\ProgramControlsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControlTypes\Item\ProgramControlTypeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControlTypes\ProgramControlTypesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Programs\Item\ProgramItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Programs\ProgramsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskDetections\Item\RiskDetectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskDetections\RiskDetectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskyUsers\Item\RiskyUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskyUsers\RiskyUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\RoleManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\SchemaExtensions\Item\SchemaExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\SchemaExtensions\SchemaExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ScopedRoleMemberships\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ScopedRoleMemberships\ScopedRoleMembershipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\SearchRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\ServicePrincipalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\ServicePrincipalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Settings\Item\DirectorySettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\SharedDriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\SharesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\SitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\SolutionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Storage\StorageRequestBuilder;
use Microsoft\Graph\Beta\Generated\SubscribedSkus\Item\SubscribedSkuItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\SubscribedSkus\SubscribedSkusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Subscriptions\Item\SubscriptionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\TeamsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamsTemplates\Item\TeamsTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamsTemplates\TeamsTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamTemplateDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\TeamTemplateDefinitionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\TenantRelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TermStore\TermStoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\ThreatSubmissionRequestBuilder;
use Microsoft\Graph\Beta\Generated\TrustFramework\TrustFrameworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\UserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\UsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\DriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\WorkbooksRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactory;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

class BaseGraphClient 
{
    /**
     * Provides operations to manage the collection of accessReviewDecision entities.
    */
    public function accessReviewDecisions(): AccessReviewDecisionsRequestBuilder {
        return new AccessReviewDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of accessReview entities.
    */
    public function accessReviews(): AccessReviewsRequestBuilder {
        return new AccessReviewsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of activityStatistics entities.
    */
    public function activitystatistics(): ActivitystatisticsRequestBuilder {
        return new ActivitystatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the admin singleton.
    */
    public function admin(): AdminRequestBuilder {
        return new AdminRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of administrativeUnit entities.
    */
    public function administrativeUnits(): AdministrativeUnitsRequestBuilder {
        return new AdministrativeUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of agreementAcceptance entities.
    */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of agreement entities.
    */
    public function agreements(): AgreementsRequestBuilder {
        return new AgreementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of allowedDataLocation entities.
    */
    public function allowedDataLocations(): AllowedDataLocationsRequestBuilder {
        return new AllowedDataLocationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the commsApplication singleton.
    */
    public function app(): AppRequestBuilder {
        return new AppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appCatalogs singleton.
    */
    public function appCatalogs(): AppCatalogsRequestBuilder {
        return new AppCatalogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of application entities.
    */
    public function applications(): ApplicationsRequestBuilder {
        return new ApplicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of applicationTemplate entities.
    */
    public function applicationTemplates(): ApplicationTemplatesRequestBuilder {
        return new ApplicationTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of appRoleAssignment entities.
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of approvalWorkflowProvider entities.
    */
    public function approvalWorkflowProviders(): ApprovalWorkflowProvidersRequestBuilder {
        return new ApprovalWorkflowProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the auditLogRoot singleton.
    */
    public function auditLogs(): AuditLogsRequestBuilder {
        return new AuditLogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of authenticationMethodConfiguration entities.
    */
    public function authenticationMethodConfigurations(): AuthenticationMethodConfigurationsRequestBuilder {
        return new AuthenticationMethodConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationMethodsPolicy singleton.
    */
    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder {
        return new AuthenticationMethodsPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of bookingBusiness entities.
    */
    public function bookingBusinesses(): BookingBusinessesRequestBuilder {
        return new BookingBusinessesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of bookingCurrency entities.
    */
    public function bookingCurrencies(): BookingCurrenciesRequestBuilder {
        return new BookingCurrenciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the organizationalBranding singleton.
    */
    public function branding(): BrandingRequestBuilder {
        return new BrandingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of businessFlowTemplate entities.
    */
    public function businessFlowTemplates(): BusinessFlowTemplatesRequestBuilder {
        return new BusinessFlowTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of certificateBasedAuthConfiguration entities.
    */
    public function certificateBasedAuthConfiguration(): CertificateBasedAuthConfigurationRequestBuilder {
        return new CertificateBasedAuthConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of chat entities.
    */
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of command entities.
    */
    public function commands(): CommandsRequestBuilder {
        return new CommandsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudCommunications singleton.
    */
    public function communications(): CommunicationsRequestBuilder {
        return new CommunicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the compliance singleton.
    */
    public function compliance(): ComplianceRequestBuilder {
        return new ComplianceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of externalConnection entities.
    */
    public function connections(): ConnectionsRequestBuilder {
        return new ConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of orgContact entities.
    */
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of contract entities.
    */
    public function contracts(): ContractsRequestBuilder {
        return new ContractsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dataClassificationService singleton.
    */
    public function dataClassification(): DataClassificationRequestBuilder {
        return new DataClassificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of dataPolicyOperation entities.
    */
    public function dataPolicyOperations(): DataPolicyOperationsRequestBuilder {
        return new DataPolicyOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceAppManagement singleton.
    */
    public function deviceAppManagement(): DeviceAppManagementRequestBuilder {
        return new DeviceAppManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceManagement singleton.
    */
    public function deviceManagement(): DeviceManagementRequestBuilder {
        return new DeviceManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of device entities.
    */
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directory singleton.
    */
    public function directory(): DirectoryRequestBuilder {
        return new DirectoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directoryObject entities.
    */
    public function directoryObjects(): DirectoryObjectsRequestBuilder {
        return new DirectoryObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directoryRole entities.
    */
    public function directoryRoles(): DirectoryRolesRequestBuilder {
        return new DirectoryRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directoryRoleTemplate entities.
    */
    public function directoryRoleTemplates(): DirectoryRoleTemplatesRequestBuilder {
        return new DirectoryRoleTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directorySettingTemplate entities.
    */
    public function directorySettingTemplates(): DirectorySettingTemplatesRequestBuilder {
        return new DirectorySettingTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of domainDnsRecord entities.
    */
    public function domainDnsRecords(): DomainDnsRecordsRequestBuilder {
        return new DomainDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of domain entities.
    */
    public function domains(): DomainsRequestBuilder {
        return new DomainsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive singleton.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of drive entities.
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the educationRoot singleton.
    */
    public function education(): EducationRequestBuilder {
        return new EducationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the employeeExperience singleton.
    */
    public function employeeExperience(): EmployeeExperienceRequestBuilder {
        return new EmployeeExperienceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the print singleton.
    */
    public function escapedPrint(): PrintRequestBuilder {
        return new PrintRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the external singleton.
    */
    public function external(): ExternalRequestBuilder {
        return new ExternalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of filterOperatorSchema entities.
    */
    public function filterOperators(): FilterOperatorsRequestBuilder {
        return new FilterOperatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the financials singleton.
    */
    public function financials(): FinancialsRequestBuilder {
        return new FinancialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of attributeMappingFunctionSchema entities.
    */
    public function functions(): FunctionsRequestBuilder {
        return new FunctionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of governanceResource entities.
    */
    public function governanceResources(): GovernanceResourcesRequestBuilder {
        return new GovernanceResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of governanceRoleAssignmentRequest entities.
    */
    public function governanceRoleAssignmentRequests(): GovernanceRoleAssignmentRequestsRequestBuilder {
        return new GovernanceRoleAssignmentRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of governanceRoleAssignment entities.
    */
    public function governanceRoleAssignments(): GovernanceRoleAssignmentsRequestBuilder {
        return new GovernanceRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of governanceRoleDefinition entities.
    */
    public function governanceRoleDefinitions(): GovernanceRoleDefinitionsRequestBuilder {
        return new GovernanceRoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of governanceRoleSetting entities.
    */
    public function governanceRoleSettings(): GovernanceRoleSettingsRequestBuilder {
        return new GovernanceRoleSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of governanceSubject entities.
    */
    public function governanceSubjects(): GovernanceSubjectsRequestBuilder {
        return new GovernanceSubjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of groupLifecyclePolicy entities.
    */
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder {
        return new GroupLifecyclePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of group entities.
    */
    public function groups(): GroupsRequestBuilder {
        return new GroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityContainer singleton.
    */
    public function identity(): IdentityRequestBuilder {
        return new IdentityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityGovernance singleton.
    */
    public function identityGovernance(): IdentityGovernanceRequestBuilder {
        return new IdentityGovernanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityProtectionRoot singleton.
    */
    public function identityProtection(): IdentityProtectionRequestBuilder {
        return new IdentityProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of identityProvider entities.
    */
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the informationProtection singleton.
    */
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of invitation entities.
    */
    public function invitations(): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the user singleton.
    */
    public function me(): MeRequestBuilder {
        return new MeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of messageEvent entities.
    */
    public function messageEvents(): MessageEventsRequestBuilder {
        return new MessageEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of messageRecipient entities.
    */
    public function messageRecipients(): MessageRecipientsRequestBuilder {
        return new MessageRecipientsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of messageTrace entities.
    */
    public function messageTraces(): MessageTracesRequestBuilder {
        return new MessageTracesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of mobilityManagementPolicy entities.
    */
    public function mobilityManagementPolicies(): MobilityManagementPoliciesRequestBuilder {
        return new MobilityManagementPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the monitoring singleton.
    */
    public function monitoring(): MonitoringRequestBuilder {
        return new MonitoringRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of oAuth2PermissionGrant entities.
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the officeConfiguration singleton.
    */
    public function officeConfiguration(): OfficeConfigurationRequestBuilder {
        return new OfficeConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of onPremisesPublishingProfile entities.
    */
    public function onPremisesPublishingProfiles(): OnPremisesPublishingProfilesRequestBuilder {
        return new OnPremisesPublishingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of organization entities.
    */
    public function organization(): OrganizationRequestBuilder {
        return new OrganizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of payloadResponse entities.
    */
    public function payloadResponse(): PayloadResponseRequestBuilder {
        return new PayloadResponseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of resourceSpecificPermissionGrant entities.
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of place entities.
    */
    public function places(): PlacesRequestBuilder {
        return new PlacesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the planner singleton.
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the policyRoot singleton.
    */
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the privacy singleton.
    */
    public function privacy(): PrivacyRequestBuilder {
        return new PrivacyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of privilegedAccess entities.
    */
    public function privilegedAccess(): PrivilegedAccessRequestBuilder {
        return new PrivilegedAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of privilegedApproval entities.
    */
    public function privilegedApproval(): PrivilegedApprovalRequestBuilder {
        return new PrivilegedApprovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of privilegedOperationEvent entities.
    */
    public function privilegedOperationEvents(): PrivilegedOperationEventsRequestBuilder {
        return new PrivilegedOperationEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of privilegedRoleAssignmentRequest entities.
    */
    public function privilegedRoleAssignmentRequests(): PrivilegedRoleAssignmentRequestsRequestBuilder {
        return new PrivilegedRoleAssignmentRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of privilegedRoleAssignment entities.
    */
    public function privilegedRoleAssignments(): PrivilegedRoleAssignmentsRequestBuilder {
        return new PrivilegedRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of privilegedRole entities.
    */
    public function privilegedRoles(): PrivilegedRolesRequestBuilder {
        return new PrivilegedRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of privilegedSignupStatus entities.
    */
    public function privilegedSignupStatus(): PrivilegedSignupStatusRequestBuilder {
        return new PrivilegedSignupStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of programControl entities.
    */
    public function programControls(): ProgramControlsRequestBuilder {
        return new ProgramControlsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of programControlType entities.
    */
    public function programControlTypes(): ProgramControlTypesRequestBuilder {
        return new ProgramControlTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of program entities.
    */
    public function programs(): ProgramsRequestBuilder {
        return new ProgramsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reportRoot singleton.
    */
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the collection of riskDetection entities.
    */
    public function riskDetections(): RiskDetectionsRequestBuilder {
        return new RiskDetectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of riskyUser entities.
    */
    public function riskyUsers(): RiskyUsersRequestBuilder {
        return new RiskyUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleManagement singleton.
    */
    public function roleManagement(): RoleManagementRequestBuilder {
        return new RoleManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of schemaExtension entities.
    */
    public function schemaExtensions(): SchemaExtensionsRequestBuilder {
        return new SchemaExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of scopedRoleMembership entities.
    */
    public function scopedRoleMemberships(): ScopedRoleMembershipsRequestBuilder {
        return new ScopedRoleMembershipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the searchEntity singleton.
    */
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the security singleton.
    */
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of servicePrincipal entities.
    */
    public function servicePrincipals(): ServicePrincipalsRequestBuilder {
        return new ServicePrincipalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directorySetting entities.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of sharedDriveItem entities.
    */
    public function shares(): SharesRequestBuilder {
        return new SharesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of site entities.
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the solutionsRoot singleton.
    */
    public function solutions(): SolutionsRequestBuilder {
        return new SolutionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the storage singleton.
    */
    public function storage(): StorageRequestBuilder {
        return new StorageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of subscribedSku entities.
    */
    public function subscribedSkus(): SubscribedSkusRequestBuilder {
        return new SubscribedSkusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of subscription entities.
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of team entities.
    */
    public function teams(): TeamsRequestBuilder {
        return new TeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of teamsTemplate entities.
    */
    public function teamsTemplates(): TeamsTemplatesRequestBuilder {
        return new TeamsTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of teamTemplateDefinition entities.
    */
    public function teamTemplateDefinition(): TeamTemplateDefinitionRequestBuilder {
        return new TeamTemplateDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teamwork singleton.
    */
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantRelationship singleton.
    */
    public function tenantRelationships(): TenantRelationshipsRequestBuilder {
        return new TenantRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the store singleton.
    */
    public function termStore(): TermStoreRequestBuilder {
        return new TermStoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threatSubmissionRoot singleton.
    */
    public function threatSubmission(): ThreatSubmissionRequestBuilder {
        return new ThreatSubmissionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the trustFramework singleton.
    */
    public function trustFramework(): TrustFrameworkRequestBuilder {
        return new TrustFrameworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the collection of user entities.
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of driveItem entities.
    */
    public function workbooks(): WorkbooksRequestBuilder {
        return new WorkbooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of accessReviewDecision entities.
     * @param string $id Unique identifier of the item
     * @return AccessReviewDecisionItemRequestBuilder|null
    */
    public function accessReviewDecisionsById(string $id): ?AccessReviewDecisionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewDecision%2Did'] = $id;
        return new AccessReviewDecisionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of accessReview entities.
     * @param string $id Unique identifier of the item
     * @return AccessReviewItemRequestBuilder|null
    */
    public function accessReviewsById(string $id): ?AccessReviewItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReview%2Did'] = $id;
        return new AccessReviewItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of activityStatistics entities.
     * @param string $id Unique identifier of the item
     * @return ActivityStatisticsItemRequestBuilder|null
    */
    public function activitystatisticsById(string $id): ?ActivityStatisticsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['activityStatistics%2Did'] = $id;
        return new ActivityStatisticsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of administrativeUnit entities.
     * @param string $id Unique identifier of the item
     * @return AdministrativeUnitItemRequestBuilder|null
    */
    public function administrativeUnitsById(string $id): ?AdministrativeUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['administrativeUnit%2Did'] = $id;
        return new AdministrativeUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of agreementAcceptance entities.
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder|null
    */
    public function agreementAcceptancesById(string $id): ?AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance%2Did'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of agreement entities.
     * @param string $id Unique identifier of the item
     * @return AgreementItemRequestBuilder|null
    */
    public function agreementsById(string $id): ?AgreementItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreement%2Did'] = $id;
        return new AgreementItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of allowedDataLocation entities.
     * @param string $id Unique identifier of the item
     * @return AllowedDataLocationItemRequestBuilder|null
    */
    public function allowedDataLocationsById(string $id): ?AllowedDataLocationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['allowedDataLocation%2Did'] = $id;
        return new AllowedDataLocationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of application entities.
     * @param string $id Unique identifier of the item
     * @return ApplicationItemRequestBuilder|null
    */
    public function applicationsById(string $id): ?ApplicationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['application%2Did'] = $id;
        return new ApplicationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of applicationTemplate entities.
     * @param string $id Unique identifier of the item
     * @return ApplicationTemplateItemRequestBuilder|null
    */
    public function applicationTemplatesById(string $id): ?ApplicationTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicationTemplate%2Did'] = $id;
        return new ApplicationTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of appRoleAssignment entities.
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder|null
    */
    public function appRoleAssignmentsById(string $id): ?AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of approvalWorkflowProvider entities.
     * @param string $id Unique identifier of the item
     * @return ApprovalWorkflowProviderItemRequestBuilder|null
    */
    public function approvalWorkflowProvidersById(string $id): ?ApprovalWorkflowProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approvalWorkflowProvider%2Did'] = $id;
        return new ApprovalWorkflowProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of authenticationMethodConfiguration entities.
     * @param string $id Unique identifier of the item
     * @return AuthenticationMethodConfigurationItemRequestBuilder|null
    */
    public function authenticationMethodConfigurationsById(string $id): ?AuthenticationMethodConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationMethodConfiguration%2Did'] = $id;
        return new AuthenticationMethodConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of bookingBusiness entities.
     * @param string $id Unique identifier of the item
     * @return BookingBusinessItemRequestBuilder|null
    */
    public function bookingBusinessesById(string $id): ?BookingBusinessItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingBusiness%2Did'] = $id;
        return new BookingBusinessItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of bookingCurrency entities.
     * @param string $id Unique identifier of the item
     * @return BookingCurrencyItemRequestBuilder|null
    */
    public function bookingCurrenciesById(string $id): ?BookingCurrencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCurrency%2Did'] = $id;
        return new BookingCurrencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of businessFlowTemplate entities.
     * @param string $id Unique identifier of the item
     * @return BusinessFlowTemplateItemRequestBuilder|null
    */
    public function businessFlowTemplatesById(string $id): ?BusinessFlowTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['businessFlowTemplate%2Did'] = $id;
        return new BusinessFlowTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of certificateBasedAuthConfiguration entities.
     * @param string $id Unique identifier of the item
     * @return CertificateBasedAuthConfigurationItemRequestBuilder|null
    */
    public function certificateBasedAuthConfigurationById(string $id): ?CertificateBasedAuthConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['certificateBasedAuthConfiguration%2Did'] = $id;
        return new CertificateBasedAuthConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of chat entities.
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder|null
    */
    public function chatsById(string $id): ?ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat%2Did'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of command entities.
     * @param string $id Unique identifier of the item
     * @return CommandItemRequestBuilder|null
    */
    public function commandsById(string $id): ?CommandItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['command%2Did'] = $id;
        return new CommandItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of externalConnection entities.
     * @param string $id Unique identifier of the item
     * @return ExternalConnectionItemRequestBuilder|null
    */
    public function connectionsById(string $id): ?ExternalConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['externalConnection%2Did'] = $id;
        return new ExternalConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BaseGraphClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param BackingStoreFactory|null $backingStore The backing store to use for the models.
    */
    public function __construct(RequestAdapter $requestAdapter, ?BackingStoreFactory $backingStore = null) {
        $this->pathParameters = [];
        $this->urlTemplate = '{+baseurl}';
        $this->requestAdapter = $requestAdapter;
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://graph.microsoft.com/beta');
        }
        $this->requestAdapter->enableBackingStore($backingStore ?? BackingStoreFactorySingleton::getInstance());
    }

    /**
     * Provides operations to manage the collection of orgContact entities.
     * @param string $id Unique identifier of the item
     * @return OrgContactItemRequestBuilder|null
    */
    public function contactsById(string $id): ?OrgContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['orgContact%2Did'] = $id;
        return new OrgContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of contract entities.
     * @param string $id Unique identifier of the item
     * @return ContractItemRequestBuilder|null
    */
    public function contractsById(string $id): ?ContractItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contract%2Did'] = $id;
        return new ContractItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of dataPolicyOperation entities.
     * @param string $id Unique identifier of the item
     * @return DataPolicyOperationItemRequestBuilder|null
    */
    public function dataPolicyOperationsById(string $id): ?DataPolicyOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataPolicyOperation%2Did'] = $id;
        return new DataPolicyOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of device entities.
     * @param string $id Unique identifier of the item
     * @return DeviceItemRequestBuilder|null
    */
    public function devicesById(string $id): ?DeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['device%2Did'] = $id;
        return new DeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of directoryObject entities.
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder|null
    */
    public function directoryObjectsById(string $id): ?DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of directoryRole entities.
     * @param string $id Unique identifier of the item
     * @return DirectoryRoleItemRequestBuilder|null
    */
    public function directoryRolesById(string $id): ?DirectoryRoleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryRole%2Did'] = $id;
        return new DirectoryRoleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of directoryRoleTemplate entities.
     * @param string $id Unique identifier of the item
     * @return DirectoryRoleTemplateItemRequestBuilder|null
    */
    public function directoryRoleTemplatesById(string $id): ?DirectoryRoleTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryRoleTemplate%2Did'] = $id;
        return new DirectoryRoleTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of directorySettingTemplate entities.
     * @param string $id Unique identifier of the item
     * @return DirectorySettingTemplateItemRequestBuilder|null
    */
    public function directorySettingTemplatesById(string $id): ?DirectorySettingTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directorySettingTemplate%2Did'] = $id;
        return new DirectorySettingTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of domainDnsRecord entities.
     * @param string $id Unique identifier of the item
     * @return DomainDnsRecordItemRequestBuilder|null
    */
    public function domainDnsRecordsById(string $id): ?DomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord%2Did'] = $id;
        return new DomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of domain entities.
     * @param string $id Unique identifier of the item
     * @return DomainItemRequestBuilder|null
    */
    public function domainsById(string $id): ?DomainItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domain%2Did'] = $id;
        return new DomainItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of drive entities.
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder|null
    */
    public function drivesById(string $id): ?DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of filterOperatorSchema entities.
     * @param string $id Unique identifier of the item
     * @return FilterOperatorSchemaItemRequestBuilder|null
    */
    public function filterOperatorsById(string $id): ?FilterOperatorSchemaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['filterOperatorSchema%2Did'] = $id;
        return new FilterOperatorSchemaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of attributeMappingFunctionSchema entities.
     * @param string $id Unique identifier of the item
     * @return AttributeMappingFunctionSchemaItemRequestBuilder|null
    */
    public function functionsById(string $id): ?AttributeMappingFunctionSchemaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attributeMappingFunctionSchema%2Did'] = $id;
        return new AttributeMappingFunctionSchemaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of governanceResource entities.
     * @param string $id Unique identifier of the item
     * @return GovernanceResourceItemRequestBuilder|null
    */
    public function governanceResourcesById(string $id): ?GovernanceResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceResource%2Did'] = $id;
        return new GovernanceResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of governanceRoleAssignmentRequest entities.
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleAssignmentRequestItemRequestBuilder|null
    */
    public function governanceRoleAssignmentRequestsById(string $id): ?GovernanceRoleAssignmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignmentRequest%2Did'] = $id;
        return new GovernanceRoleAssignmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of governanceRoleAssignment entities.
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleAssignmentItemRequestBuilder|null
    */
    public function governanceRoleAssignmentsById(string $id): ?GovernanceRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignment%2Did'] = $id;
        return new GovernanceRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of governanceRoleDefinition entities.
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleDefinitionItemRequestBuilder|null
    */
    public function governanceRoleDefinitionsById(string $id): ?GovernanceRoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleDefinition%2Did'] = $id;
        return new GovernanceRoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of governanceRoleSetting entities.
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleSettingItemRequestBuilder|null
    */
    public function governanceRoleSettingsById(string $id): ?GovernanceRoleSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleSetting%2Did'] = $id;
        return new GovernanceRoleSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of governanceSubject entities.
     * @param string $id Unique identifier of the item
     * @return GovernanceSubjectItemRequestBuilder|null
    */
    public function governanceSubjectsById(string $id): ?GovernanceSubjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceSubject%2Did'] = $id;
        return new GovernanceSubjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of groupLifecyclePolicy entities.
     * @param string $id Unique identifier of the item
     * @return GroupLifecyclePolicyItemRequestBuilder|null
    */
    public function groupLifecyclePoliciesById(string $id): ?GroupLifecyclePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupLifecyclePolicy%2Did'] = $id;
        return new GroupLifecyclePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of group entities.
     * @param string $id Unique identifier of the item
     * @return GroupItemRequestBuilder|null
    */
    public function groupsById(string $id): ?GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group%2Did'] = $id;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of identityProvider entities.
     * @param string $id Unique identifier of the item
     * @return IdentityProviderItemRequestBuilder|null
    */
    public function identityProvidersById(string $id): ?IdentityProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProvider%2Did'] = $id;
        return new IdentityProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of invitation entities.
     * @param string $id Unique identifier of the item
     * @return InvitationItemRequestBuilder|null
    */
    public function invitationsById(string $id): ?InvitationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['invitation%2Did'] = $id;
        return new InvitationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of messageEvent entities.
     * @param string $id Unique identifier of the item
     * @return MessageEventItemRequestBuilder|null
    */
    public function messageEventsById(string $id): ?MessageEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['messageEvent%2Did'] = $id;
        return new MessageEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of messageRecipient entities.
     * @param string $id Unique identifier of the item
     * @return MessageRecipientItemRequestBuilder|null
    */
    public function messageRecipientsById(string $id): ?MessageRecipientItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['messageRecipient%2Did'] = $id;
        return new MessageRecipientItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of messageTrace entities.
     * @param string $id Unique identifier of the item
     * @return MessageTraceItemRequestBuilder|null
    */
    public function messageTracesById(string $id): ?MessageTraceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['messageTrace%2Did'] = $id;
        return new MessageTraceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of mobilityManagementPolicy entities.
     * @param string $id Unique identifier of the item
     * @return MobilityManagementPolicyItemRequestBuilder|null
    */
    public function mobilityManagementPoliciesById(string $id): ?MobilityManagementPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobilityManagementPolicy%2Did'] = $id;
        return new MobilityManagementPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of oAuth2PermissionGrant entities.
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder|null
    */
    public function oauth2PermissionGrantsById(string $id): ?OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant%2Did'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of onPremisesPublishingProfile entities.
     * @param string $id Unique identifier of the item
     * @return OnPremisesPublishingProfileItemRequestBuilder|null
    */
    public function onPremisesPublishingProfilesById(string $id): ?OnPremisesPublishingProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onPremisesPublishingProfile%2Did'] = $id;
        return new OnPremisesPublishingProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of organization entities.
     * @param string $id Unique identifier of the item
     * @return OrganizationItemRequestBuilder|null
    */
    public function organizationById(string $id): ?OrganizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['organization%2Did'] = $id;
        return new OrganizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of payloadResponse entities.
     * @param string $id Unique identifier of the item
     * @return PayloadResponseItemRequestBuilder|null
    */
    public function payloadResponseById(string $id): ?PayloadResponseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['payloadResponse%2Did'] = $id;
        return new PayloadResponseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of resourceSpecificPermissionGrant entities.
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder|null
    */
    public function permissionGrantsById(string $id): ?ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of place entities.
     * @param string $id Unique identifier of the item
     * @return PlaceItemRequestBuilder|null
    */
    public function placesById(string $id): ?PlaceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['place%2Did'] = $id;
        return new PlaceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of privilegedAccess entities.
     * @param string $id Unique identifier of the item
     * @return PrivilegedAccessItemRequestBuilder|null
    */
    public function privilegedAccessById(string $id): ?PrivilegedAccessItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedAccess%2Did'] = $id;
        return new PrivilegedAccessItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of privilegedApproval entities.
     * @param string $id Unique identifier of the item
     * @return PrivilegedApprovalItemRequestBuilder|null
    */
    public function privilegedApprovalById(string $id): ?PrivilegedApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedApproval%2Did'] = $id;
        return new PrivilegedApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of privilegedOperationEvent entities.
     * @param string $id Unique identifier of the item
     * @return PrivilegedOperationEventItemRequestBuilder|null
    */
    public function privilegedOperationEventsById(string $id): ?PrivilegedOperationEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedOperationEvent%2Did'] = $id;
        return new PrivilegedOperationEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of privilegedRoleAssignmentRequest entities.
     * @param string $id Unique identifier of the item
     * @return PrivilegedRoleAssignmentRequestItemRequestBuilder|null
    */
    public function privilegedRoleAssignmentRequestsById(string $id): ?PrivilegedRoleAssignmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedRoleAssignmentRequest%2Did'] = $id;
        return new PrivilegedRoleAssignmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of privilegedRoleAssignment entities.
     * @param string $id Unique identifier of the item
     * @return PrivilegedRoleAssignmentItemRequestBuilder|null
    */
    public function privilegedRoleAssignmentsById(string $id): ?PrivilegedRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedRoleAssignment%2Did'] = $id;
        return new PrivilegedRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of privilegedRole entities.
     * @param string $id Unique identifier of the item
     * @return PrivilegedRoleItemRequestBuilder|null
    */
    public function privilegedRolesById(string $id): ?PrivilegedRoleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedRole%2Did'] = $id;
        return new PrivilegedRoleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of privilegedSignupStatus entities.
     * @param string $id Unique identifier of the item
     * @return PrivilegedSignupStatusItemRequestBuilder|null
    */
    public function privilegedSignupStatusById(string $id): ?PrivilegedSignupStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedSignupStatus%2Did'] = $id;
        return new PrivilegedSignupStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of programControl entities.
     * @param string $id Unique identifier of the item
     * @return ProgramControlItemRequestBuilder|null
    */
    public function programControlsById(string $id): ?ProgramControlItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['programControl%2Did'] = $id;
        return new ProgramControlItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of programControlType entities.
     * @param string $id Unique identifier of the item
     * @return ProgramControlTypeItemRequestBuilder|null
    */
    public function programControlTypesById(string $id): ?ProgramControlTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['programControlType%2Did'] = $id;
        return new ProgramControlTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of program entities.
     * @param string $id Unique identifier of the item
     * @return ProgramItemRequestBuilder|null
    */
    public function programsById(string $id): ?ProgramItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['program%2Did'] = $id;
        return new ProgramItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of riskDetection entities.
     * @param string $id Unique identifier of the item
     * @return RiskDetectionItemRequestBuilder|null
    */
    public function riskDetectionsById(string $id): ?RiskDetectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskDetection%2Did'] = $id;
        return new RiskDetectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of riskyUser entities.
     * @param string $id Unique identifier of the item
     * @return RiskyUserItemRequestBuilder|null
    */
    public function riskyUsersById(string $id): ?RiskyUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyUser%2Did'] = $id;
        return new RiskyUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of schemaExtension entities.
     * @param string $id Unique identifier of the item
     * @return SchemaExtensionItemRequestBuilder|null
    */
    public function schemaExtensionsById(string $id): ?SchemaExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schemaExtension%2Did'] = $id;
        return new SchemaExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of scopedRoleMembership entities.
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder|null
    */
    public function scopedRoleMembershipsById(string $id): ?ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership%2Did'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of servicePrincipal entities.
     * @param string $id Unique identifier of the item
     * @return ServicePrincipalItemRequestBuilder|null
    */
    public function servicePrincipalsById(string $id): ?ServicePrincipalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipal%2Did'] = $id;
        return new ServicePrincipalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of directorySetting entities.
     * @param string $id Unique identifier of the item
     * @return DirectorySettingItemRequestBuilder|null
    */
    public function settingsById(string $id): ?DirectorySettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directorySetting%2Did'] = $id;
        return new DirectorySettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of sharedDriveItem entities.
     * @param string $id Unique identifier of the item
     * @return SharedDriveItemItemRequestBuilder|null
    */
    public function sharesById(string $id): ?SharedDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedDriveItem%2Did'] = $id;
        return new SharedDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of site entities.
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder|null
    */
    public function sitesById(string $id): ?SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of subscribedSku entities.
     * @param string $id Unique identifier of the item
     * @return SubscribedSkuItemRequestBuilder|null
    */
    public function subscribedSkusById(string $id): ?SubscribedSkuItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscribedSku%2Did'] = $id;
        return new SubscribedSkuItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of subscription entities.
     * @param string $id Unique identifier of the item
     * @return SubscriptionItemRequestBuilder|null
    */
    public function subscriptionsById(string $id): ?SubscriptionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription%2Did'] = $id;
        return new SubscriptionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of team entities.
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder|null
    */
    public function teamsById(string $id): ?TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team%2Did'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of teamsTemplate entities.
     * @param string $id Unique identifier of the item
     * @return TeamsTemplateItemRequestBuilder|null
    */
    public function teamsTemplatesById(string $id): ?TeamsTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsTemplate%2Did'] = $id;
        return new TeamsTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of teamTemplateDefinition entities.
     * @param string $id Unique identifier of the item
     * @return TeamTemplateDefinitionItemRequestBuilder|null
    */
    public function teamTemplateDefinitionById(string $id): ?TeamTemplateDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamTemplateDefinition%2Did'] = $id;
        return new TeamTemplateDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of user entities.
     * @param string $id Unique identifier of the item
     * @return UserItemRequestBuilder|null
    */
    public function usersById(string $id): ?UserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user%2Did'] = $id;
        return new UserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of driveItem entities.
     * @param string $id Unique identifier of the item
     * @return DriveItemItemRequestBuilder|null
    */
    public function workbooksById(string $id): ?DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
