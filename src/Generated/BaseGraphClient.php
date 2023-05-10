<?php

namespace Microsoft\Graph\Beta\Generated;

use Microsoft\Graph\Beta\Generated\AccessReviewDecisions\AccessReviewDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\AccessReviewsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Activitystatistics\ActivitystatisticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\AdminRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\AdministrativeUnitsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Agreements\AgreementsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AllowedDataLocations\AllowedDataLocationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\AppRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppCatalogs\AppCatalogsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Applications\ApplicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApplicationTemplates\ApplicationTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\ApprovalWorkflowProvidersRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuditLogs\AuditLogsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodConfigurations\AuthenticationMethodConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\BookingBusinessesRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingCurrencies\BookingCurrenciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Branding\BrandingRequestBuilder;
use Microsoft\Graph\Beta\Generated\BusinessFlowTemplates\BusinessFlowTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\CertificateBasedAuthConfiguration\CertificateBasedAuthConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Commands\CommandsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\CommunicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\ComplianceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Connections\ConnectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contracts\ContractsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\DataClassificationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataPolicyOperations\DataPolicyOperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DeviceAppManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceLocalCredentials\DeviceLocalCredentialsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\DirectoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryObjects\DirectoryObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\DirectoryRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoleTemplates\DirectoryRoleTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\DirectorySettingTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DomainDnsRecords\DomainDnsRecordsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\DomainsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\EducationRequestBuilder;
use Microsoft\Graph\Beta\Generated\EmployeeExperience\EmployeeExperienceRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\PrintRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\ExternalRequestBuilder;
use Microsoft\Graph\Beta\Generated\FilterOperators\FilterOperatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\FinancialsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Functions\FunctionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\GovernanceResourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignmentRequests\GovernanceRoleAssignmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignments\GovernanceRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleDefinitions\GovernanceRoleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleSettings\GovernanceRoleSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceSubjects\GovernanceSubjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\GroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\IdentityRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\IdentityGovernanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\IdentityProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Invitations\InvitationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageEvents\MessageEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageRecipients\MessageRecipientsRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageTraces\MessageTracesRequestBuilder;
use Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\MobilityManagementPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Monitoring\MonitoringRequestBuilder;
use Microsoft\Graph\Beta\Generated\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\OnPremisesPublishingProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\OrganizationRequestBuilder;
use Microsoft\Graph\Beta\Generated\PayloadResponse\PayloadResponseRequestBuilder;
use Microsoft\Graph\Beta\Generated\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Places\PlacesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\PoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Privacy\PrivacyRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\PrivilegedAccessRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedApproval\PrivilegedApprovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedOperationEvents\PrivilegedOperationEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignmentRequests\PrivilegedRoleAssignmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignments\PrivilegedRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoles\PrivilegedRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\PrivilegedSignupStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControls\ProgramControlsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControlTypes\ProgramControlTypesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Programs\ProgramsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskDetections\RiskDetectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskyUsers\RiskyUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\RoleManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\SchemaExtensions\SchemaExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ScopedRoleMemberships\ScopedRoleMembershipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\SearchRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\ServicePrincipalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\SharesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\SitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\SolutionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\SubscribedSkus\SubscribedSkusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\TeamsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamsTemplates\TeamsTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\TeamTemplateDefinitionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\TenantRelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TermStore\TermStoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\ThreatSubmissionRequestBuilder;
use Microsoft\Graph\Beta\Generated\TrustFramework\TrustFrameworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\UsersRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactory;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class BaseGraphClient extends BaseRequestBuilder
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
     * Provides operations to manage the collection of deviceLocalCredentialInfo entities.
    */
    public function deviceLocalCredentials(): DeviceLocalCredentialsRequestBuilder {
        return new DeviceLocalCredentialsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The places property
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
     * Provides operations to manage the collection of user entities.
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Instantiates a new BaseGraphClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param BackingStoreFactory|null $backingStore The backing store to use for the models.
    */
    public function __construct(RequestAdapter $requestAdapter, ?BackingStoreFactory $backingStore = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://graph.microsoft.com/beta');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
        $this->requestAdapter->enableBackingStore($backingStore ?? BackingStoreFactorySingleton::getInstance());
    }

}
