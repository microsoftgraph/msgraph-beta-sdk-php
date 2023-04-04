<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagedTenant;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\AggregatedPolicyCompliancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\Item\AggregatedPolicyComplianceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AppPerformances\AppPerformancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AppPerformances\Item\AppPerformanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AuditEvents\AuditEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AuditEvents\Item\AuditEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcConnections\CloudPcConnectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcConnections\Item\CloudPcConnectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcDevices\CloudPcDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcDevices\Item\CloudPcDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcsOverview\CloudPcsOverviewRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcsOverview\Item\CloudPcOverviewTenantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ConditionalAccessPolicyCoverages\ConditionalAccessPolicyCoveragesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ConditionalAccessPolicyCoverages\Item\ConditionalAccessPolicyCoverageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CredentialUserRegistrationsSummaries\CredentialUserRegistrationsSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CredentialUserRegistrationsSummaries\Item\CredentialUserRegistrationsSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\DeviceAppPerformances\DeviceAppPerformancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\DeviceAppPerformances\Item\DeviceAppPerformanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\DeviceCompliancePolicySettingStateSummaries\DeviceCompliancePolicySettingStateSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\DeviceCompliancePolicySettingStateSummaries\Item\DeviceCompliancePolicySettingStateSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\DeviceHealthStatuses\DeviceHealthStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\DeviceHealthStatuses\Item\DeviceHealthStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceCompliances\Item\ManagedDeviceComplianceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceCompliances\ManagedDeviceCompliancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceComplianceTrends\Item\ManagedDeviceComplianceTrendItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceComplianceTrends\ManagedDeviceComplianceTrendsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertLogs\Item\ManagedTenantAlertLogItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertLogs\ManagedTenantAlertLogsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertRuleDefinitions\Item\ManagedTenantAlertRuleDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertRuleDefinitions\ManagedTenantAlertRuleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertRules\Item\ManagedTenantAlertRuleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertRules\ManagedTenantAlertRulesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlerts\Item\ManagedTenantAlertItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlerts\ManagedTenantAlertsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantApiNotifications\Item\ManagedTenantApiNotificationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantApiNotifications\ManagedTenantApiNotificationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications\Item\ManagedTenantEmailNotificationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications\ManagedTenantEmailNotificationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantTicketingEndpoints\Item\ManagedTenantTicketingEndpointItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantTicketingEndpoints\ManagedTenantTicketingEndpointsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActions\Item\ManagementActionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActions\ManagementActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\Item\ManagementActionTenantDeploymentStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\ManagementActionTenantDeploymentStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementIntents\Item\ManagementIntentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementIntents\ManagementIntentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollections\Item\ManagementTemplateCollectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollections\ManagementTemplateCollectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollectionTenantSummaries\Item\ManagementTemplateCollectionTenantSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollectionTenantSummaries\ManagementTemplateCollectionTenantSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplates\Item\ManagementTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplates\ManagementTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateSteps\Item\ManagementTemplateStepItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateSteps\ManagementTemplateStepsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepTenantSummaries\Item\ManagementTemplateStepTenantSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepTenantSummaries\ManagementTemplateStepTenantSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\ManagementTemplateStepVersionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\ManagementTemplateStepVersionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\MyRoles\Item\MyRoleTenantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\MyRoles\MyRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantGroups\Item\TenantGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantGroups\TenantGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\Tenants\Item\TenantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\Tenants\TenantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\Item\TenantCustomizedInformationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\TenantsCustomizedInformationRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation\Item\TenantDetailedInformationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation\TenantsDetailedInformationRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantTags\Item\TenantTagItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantTags\TenantTagsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\WindowsDeviceMalwareStates\Item\WindowsDeviceMalwareStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\WindowsDeviceMalwareStates\WindowsDeviceMalwareStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\WindowsProtectionStates\Item\WindowsProtectionStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\WindowsProtectionStates\WindowsProtectionStatesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to manage the managedTenants property of the microsoft.graph.tenantRelationship entity.
*/
class ManagedTenantsRequestBuilder 
{
    /**
     * Provides operations to manage the aggregatedPolicyCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function aggregatedPolicyCompliances(): AggregatedPolicyCompliancesRequestBuilder {
        return new AggregatedPolicyCompliancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appPerformances property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function appPerformances(): AppPerformancesRequestBuilder {
        return new AppPerformancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the auditEvents property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function auditEvents(): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPcConnections property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function cloudPcConnections(): CloudPcConnectionsRequestBuilder {
        return new CloudPcConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPcDevices property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function cloudPcDevices(): CloudPcDevicesRequestBuilder {
        return new CloudPcDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPcsOverview property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function cloudPcsOverview(): CloudPcsOverviewRequestBuilder {
        return new CloudPcsOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the conditionalAccessPolicyCoverages property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function conditionalAccessPolicyCoverages(): ConditionalAccessPolicyCoveragesRequestBuilder {
        return new ConditionalAccessPolicyCoveragesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the credentialUserRegistrationsSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function credentialUserRegistrationsSummaries(): CredentialUserRegistrationsSummariesRequestBuilder {
        return new CredentialUserRegistrationsSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceAppPerformances property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function deviceAppPerformances(): DeviceAppPerformancesRequestBuilder {
        return new DeviceAppPerformancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicySettingStateSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function deviceCompliancePolicySettingStateSummaries(): DeviceCompliancePolicySettingStateSummariesRequestBuilder {
        return new DeviceCompliancePolicySettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceHealthStatuses property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function deviceHealthStatuses(): DeviceHealthStatusesRequestBuilder {
        return new DeviceHealthStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedDeviceCompliances(): ManagedDeviceCompliancesRequestBuilder {
        return new ManagedDeviceCompliancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceComplianceTrends property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedDeviceComplianceTrends(): ManagedDeviceComplianceTrendsRequestBuilder {
        return new ManagedDeviceComplianceTrendsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantAlertLogs property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantAlertLogs(): ManagedTenantAlertLogsRequestBuilder {
        return new ManagedTenantAlertLogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantAlertRuleDefinitions property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantAlertRuleDefinitions(): ManagedTenantAlertRuleDefinitionsRequestBuilder {
        return new ManagedTenantAlertRuleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantAlertRules property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantAlertRules(): ManagedTenantAlertRulesRequestBuilder {
        return new ManagedTenantAlertRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantAlerts property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantAlerts(): ManagedTenantAlertsRequestBuilder {
        return new ManagedTenantAlertsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantApiNotifications property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantApiNotifications(): ManagedTenantApiNotificationsRequestBuilder {
        return new ManagedTenantApiNotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantEmailNotifications property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantEmailNotifications(): ManagedTenantEmailNotificationsRequestBuilder {
        return new ManagedTenantEmailNotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantTicketingEndpoints property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantTicketingEndpoints(): ManagedTenantTicketingEndpointsRequestBuilder {
        return new ManagedTenantTicketingEndpointsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementActions property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementActions(): ManagementActionsRequestBuilder {
        return new ManagementActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementActionTenantDeploymentStatuses property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementActionTenantDeploymentStatuses(): ManagementActionTenantDeploymentStatusesRequestBuilder {
        return new ManagementActionTenantDeploymentStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementIntents property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementIntents(): ManagementIntentsRequestBuilder {
        return new ManagementIntentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateCollections property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateCollections(): ManagementTemplateCollectionsRequestBuilder {
        return new ManagementTemplateCollectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateCollectionTenantSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateCollectionTenantSummaries(): ManagementTemplateCollectionTenantSummariesRequestBuilder {
        return new ManagementTemplateCollectionTenantSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplates property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplates(): ManagementTemplatesRequestBuilder {
        return new ManagementTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateSteps property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateSteps(): ManagementTemplateStepsRequestBuilder {
        return new ManagementTemplateStepsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateStepTenantSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateStepTenantSummaries(): ManagementTemplateStepTenantSummariesRequestBuilder {
        return new ManagementTemplateStepTenantSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateStepVersions property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateStepVersions(): ManagementTemplateStepVersionsRequestBuilder {
        return new ManagementTemplateStepVersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the myRoles property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function myRoles(): MyRolesRequestBuilder {
        return new MyRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the tenantGroups property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenantGroups(): TenantGroupsRequestBuilder {
        return new TenantGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenants property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenants(): TenantsRequestBuilder {
        return new TenantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantsCustomizedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenantsCustomizedInformation(): TenantsCustomizedInformationRequestBuilder {
        return new TenantsCustomizedInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantsDetailedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenantsDetailedInformation(): TenantsDetailedInformationRequestBuilder {
        return new TenantsDetailedInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantTags property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenantTags(): TenantTagsRequestBuilder {
        return new TenantTagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the windowsDeviceMalwareStates property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function windowsDeviceMalwareStates(): WindowsDeviceMalwareStatesRequestBuilder {
        return new WindowsDeviceMalwareStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsProtectionStates property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function windowsProtectionStates(): WindowsProtectionStatesRequestBuilder {
        return new WindowsProtectionStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the aggregatedPolicyCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return AggregatedPolicyComplianceItemRequestBuilder
    */
    public function aggregatedPolicyCompliancesById(string $id): AggregatedPolicyComplianceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['aggregatedPolicyCompliance%2Did'] = $id;
        return new AggregatedPolicyComplianceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the appPerformances property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return AppPerformanceItemRequestBuilder
    */
    public function appPerformancesById(string $id): AppPerformanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appPerformance%2Did'] = $id;
        return new AppPerformanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the auditEvents property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return AuditEventItemRequestBuilder
    */
    public function auditEventsById(string $id): AuditEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['auditEvent%2Did'] = $id;
        return new AuditEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the cloudPcConnections property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return CloudPcConnectionItemRequestBuilder
    */
    public function cloudPcConnectionsById(string $id): CloudPcConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcConnection%2Did'] = $id;
        return new CloudPcConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the cloudPcDevices property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return CloudPcDeviceItemRequestBuilder
    */
    public function cloudPcDevicesById(string $id): CloudPcDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcDevice%2Did'] = $id;
        return new CloudPcDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the cloudPcsOverview property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return CloudPcOverviewTenantItemRequestBuilder
    */
    public function cloudPcsOverviewById(string $id): CloudPcOverviewTenantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcOverview%2DtenantId'] = $id;
        return new CloudPcOverviewTenantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the conditionalAccessPolicyCoverages property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ConditionalAccessPolicyCoverageItemRequestBuilder
    */
    public function conditionalAccessPolicyCoveragesById(string $id): ConditionalAccessPolicyCoverageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conditionalAccessPolicyCoverage%2Did'] = $id;
        return new ConditionalAccessPolicyCoverageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedTenantsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/tenantRelationships/managedTenants{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the credentialUserRegistrationsSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return CredentialUserRegistrationsSummaryItemRequestBuilder
    */
    public function credentialUserRegistrationsSummariesById(string $id): CredentialUserRegistrationsSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['credentialUserRegistrationsSummary%2Did'] = $id;
        return new CredentialUserRegistrationsSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property managedTenants for tenantRelationships
     * @param ManagedTenantsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ManagedTenantsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the deviceAppPerformances property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return DeviceAppPerformanceItemRequestBuilder
    */
    public function deviceAppPerformancesById(string $id): DeviceAppPerformanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceAppPerformance%2Did'] = $id;
        return new DeviceAppPerformanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceCompliancePolicySettingStateSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicySettingStateSummaryItemRequestBuilder
    */
    public function deviceCompliancePolicySettingStateSummariesById(string $id): DeviceCompliancePolicySettingStateSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicySettingStateSummary%2Did'] = $id;
        return new DeviceCompliancePolicySettingStateSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceHealthStatuses property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return DeviceHealthStatusItemRequestBuilder
    */
    public function deviceHealthStatusesById(string $id): DeviceHealthStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceHealthStatus%2Did'] = $id;
        return new DeviceHealthStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The operations available to interact with the multi-tenant management platform.
     * @param ManagedTenantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ManagedTenantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedTenant::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the managedDeviceCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceComplianceItemRequestBuilder
    */
    public function managedDeviceCompliancesById(string $id): ManagedDeviceComplianceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceCompliance%2Did'] = $id;
        return new ManagedDeviceComplianceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedDeviceComplianceTrends property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceComplianceTrendItemRequestBuilder
    */
    public function managedDeviceComplianceTrendsById(string $id): ManagedDeviceComplianceTrendItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceComplianceTrend%2Did'] = $id;
        return new ManagedDeviceComplianceTrendItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedTenantAlertLogs property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedTenantAlertLogItemRequestBuilder
    */
    public function managedTenantAlertLogsById(string $id): ManagedTenantAlertLogItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedTenantAlertLog%2Did'] = $id;
        return new ManagedTenantAlertLogItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedTenantAlertRuleDefinitions property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedTenantAlertRuleDefinitionItemRequestBuilder
    */
    public function managedTenantAlertRuleDefinitionsById(string $id): ManagedTenantAlertRuleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedTenantAlertRuleDefinition%2Did'] = $id;
        return new ManagedTenantAlertRuleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedTenantAlertRules property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedTenantAlertRuleItemRequestBuilder
    */
    public function managedTenantAlertRulesById(string $id): ManagedTenantAlertRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedTenantAlertRule%2Did'] = $id;
        return new ManagedTenantAlertRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedTenantAlerts property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedTenantAlertItemRequestBuilder
    */
    public function managedTenantAlertsById(string $id): ManagedTenantAlertItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedTenantAlert%2Did'] = $id;
        return new ManagedTenantAlertItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedTenantApiNotifications property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedTenantApiNotificationItemRequestBuilder
    */
    public function managedTenantApiNotificationsById(string $id): ManagedTenantApiNotificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedTenantApiNotification%2Did'] = $id;
        return new ManagedTenantApiNotificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedTenantEmailNotifications property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedTenantEmailNotificationItemRequestBuilder
    */
    public function managedTenantEmailNotificationsById(string $id): ManagedTenantEmailNotificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedTenantEmailNotification%2Did'] = $id;
        return new ManagedTenantEmailNotificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedTenantTicketingEndpoints property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagedTenantTicketingEndpointItemRequestBuilder
    */
    public function managedTenantTicketingEndpointsById(string $id): ManagedTenantTicketingEndpointItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedTenantTicketingEndpoint%2Did'] = $id;
        return new ManagedTenantTicketingEndpointItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementActions property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementActionItemRequestBuilder
    */
    public function managementActionsById(string $id): ManagementActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementAction%2Did'] = $id;
        return new ManagementActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementActionTenantDeploymentStatuses property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementActionTenantDeploymentStatusItemRequestBuilder
    */
    public function managementActionTenantDeploymentStatusesById(string $id): ManagementActionTenantDeploymentStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementActionTenantDeploymentStatus%2Did'] = $id;
        return new ManagementActionTenantDeploymentStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementIntents property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementIntentItemRequestBuilder
    */
    public function managementIntentsById(string $id): ManagementIntentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementIntent%2Did'] = $id;
        return new ManagementIntentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementTemplateCollections property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateCollectionItemRequestBuilder
    */
    public function managementTemplateCollectionsById(string $id): ManagementTemplateCollectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateCollection%2Did'] = $id;
        return new ManagementTemplateCollectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementTemplateCollectionTenantSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateCollectionTenantSummaryItemRequestBuilder
    */
    public function managementTemplateCollectionTenantSummariesById(string $id): ManagementTemplateCollectionTenantSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateCollectionTenantSummary%2Did'] = $id;
        return new ManagementTemplateCollectionTenantSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementTemplates property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateItemRequestBuilder
    */
    public function managementTemplatesById(string $id): ManagementTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplate%2Did'] = $id;
        return new ManagementTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementTemplateSteps property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateStepItemRequestBuilder
    */
    public function managementTemplateStepsById(string $id): ManagementTemplateStepItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateStep%2Did'] = $id;
        return new ManagementTemplateStepItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementTemplateStepTenantSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateStepTenantSummaryItemRequestBuilder
    */
    public function managementTemplateStepTenantSummariesById(string $id): ManagementTemplateStepTenantSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateStepTenantSummary%2Did'] = $id;
        return new ManagementTemplateStepTenantSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managementTemplateStepVersions property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateStepVersionItemRequestBuilder
    */
    public function managementTemplateStepVersionsById(string $id): ManagementTemplateStepVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateStepVersion%2Did'] = $id;
        return new ManagementTemplateStepVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the myRoles property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return MyRoleTenantItemRequestBuilder
    */
    public function myRolesById(string $id): MyRoleTenantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['myRole%2DtenantId'] = $id;
        return new MyRoleTenantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property managedTenants in tenantRelationships
     * @param ManagedTenant $body The request body
     * @param ManagedTenantsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ManagedTenant $body, ?ManagedTenantsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedTenant::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the tenantGroups property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return TenantGroupItemRequestBuilder
    */
    public function tenantGroupsById(string $id): TenantGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantGroup%2Did'] = $id;
        return new TenantGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tenants property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return TenantItemRequestBuilder
    */
    public function tenantsById(string $id): TenantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenant%2Did'] = $id;
        return new TenantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tenantsCustomizedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return TenantCustomizedInformationItemRequestBuilder
    */
    public function tenantsCustomizedInformationById(string $id): TenantCustomizedInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantCustomizedInformation%2Did'] = $id;
        return new TenantCustomizedInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tenantsDetailedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return TenantDetailedInformationItemRequestBuilder
    */
    public function tenantsDetailedInformationById(string $id): TenantDetailedInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantDetailedInformation%2Did'] = $id;
        return new TenantDetailedInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tenantTags property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return TenantTagItemRequestBuilder
    */
    public function tenantTagsById(string $id): TenantTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantTag%2Did'] = $id;
        return new TenantTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property managedTenants for tenantRelationships
     * @param ManagedTenantsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ManagedTenantsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The operations available to interact with the multi-tenant management platform.
     * @param ManagedTenantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedTenantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property managedTenants in tenantRelationships
     * @param ManagedTenant $body The request body
     * @param ManagedTenantsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ManagedTenant $body, ?ManagedTenantsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Provides operations to manage the windowsDeviceMalwareStates property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return WindowsDeviceMalwareStateItemRequestBuilder
    */
    public function windowsDeviceMalwareStatesById(string $id): WindowsDeviceMalwareStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDeviceMalwareState%2Did'] = $id;
        return new WindowsDeviceMalwareStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the windowsProtectionStates property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $id Unique identifier of the item
     * @return WindowsProtectionStateItemRequestBuilder
    */
    public function windowsProtectionStatesById(string $id): WindowsProtectionStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsProtectionState%2Did'] = $id;
        return new WindowsProtectionStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
