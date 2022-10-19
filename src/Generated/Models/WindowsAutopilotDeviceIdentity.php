<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsAutopilotDeviceIdentity extends Entity implements Parsable 
{
    /**
     * @var string|null $addressableUserName Addressable user name.
    */
    private ?string $addressableUserName = null;
    
    /**
     * @var string|null $azureActiveDirectoryDeviceId AAD Device ID - to be deprecated
    */
    private ?string $azureActiveDirectoryDeviceId = null;
    
    /**
     * @var string|null $azureAdDeviceId AAD Device ID
    */
    private ?string $azureAdDeviceId = null;
    
    /**
     * @var WindowsAutopilotDeploymentProfile|null $deploymentProfile Deployment profile currently assigned to the Windows autopilot device.
    */
    private ?WindowsAutopilotDeploymentProfile $deploymentProfile = null;
    
    /**
     * @var DateTime|null $deploymentProfileAssignedDateTime Profile set time of the Windows autopilot device.
    */
    private ?DateTime $deploymentProfileAssignedDateTime = null;
    
    /**
     * @var WindowsAutopilotProfileAssignmentDetailedStatus|null $deploymentProfileAssignmentDetailedStatus The deploymentProfileAssignmentDetailedStatus property
    */
    private ?WindowsAutopilotProfileAssignmentDetailedStatus $deploymentProfileAssignmentDetailedStatus = null;
    
    /**
     * @var WindowsAutopilotProfileAssignmentStatus|null $deploymentProfileAssignmentStatus The deploymentProfileAssignmentStatus property
    */
    private ?WindowsAutopilotProfileAssignmentStatus $deploymentProfileAssignmentStatus = null;
    
    /**
     * @var string|null $deviceAccountPassword Surface Hub Device Account Password
    */
    private ?string $deviceAccountPassword = null;
    
    /**
     * @var string|null $deviceAccountUpn Surface Hub Device Account Upn
    */
    private ?string $deviceAccountUpn = null;
    
    /**
     * @var string|null $deviceFriendlyName Surface Hub Device Friendly Name
    */
    private ?string $deviceFriendlyName = null;
    
    /**
     * @var string|null $displayName Display Name
    */
    private ?string $displayName = null;
    
    /**
     * @var EnrollmentState|null $enrollmentState The enrollmentState property
    */
    private ?EnrollmentState $enrollmentState = null;
    
    /**
     * @var string|null $groupTag Group Tag of the Windows autopilot device.
    */
    private ?string $groupTag = null;
    
    /**
     * @var WindowsAutopilotDeploymentProfile|null $intendedDeploymentProfile Deployment profile intended to be assigned to the Windows autopilot device.
    */
    private ?WindowsAutopilotDeploymentProfile $intendedDeploymentProfile = null;
    
    /**
     * @var DateTime|null $lastContactedDateTime Intune Last Contacted Date Time of the Windows autopilot device.
    */
    private ?DateTime $lastContactedDateTime = null;
    
    /**
     * @var string|null $managedDeviceId Managed Device ID
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $manufacturer Oem manufacturer of the Windows autopilot device.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model Model name of the Windows autopilot device.
    */
    private ?string $model = null;
    
    /**
     * @var string|null $productKey Product Key of the Windows autopilot device.
    */
    private ?string $productKey = null;
    
    /**
     * @var string|null $purchaseOrderIdentifier Purchase Order Identifier of the Windows autopilot device.
    */
    private ?string $purchaseOrderIdentifier = null;
    
    /**
     * @var WindowsAutopilotDeviceRemediationState|null $remediationState Device remediation status, indicating whether or not hardware has been changed for an Autopilot-registered device.
    */
    private ?WindowsAutopilotDeviceRemediationState $remediationState = null;
    
    /**
     * @var DateTime|null $remediationStateLastModifiedDateTime RemediationState set time of Autopilot device.
    */
    private ?DateTime $remediationStateLastModifiedDateTime = null;
    
    /**
     * @var string|null $resourceName Resource Name.
    */
    private ?string $resourceName = null;
    
    /**
     * @var string|null $serialNumber Serial number of the Windows autopilot device.
    */
    private ?string $serialNumber = null;
    
    /**
     * @var string|null $skuNumber SKU Number
    */
    private ?string $skuNumber = null;
    
    /**
     * @var string|null $systemFamily System Family
    */
    private ?string $systemFamily = null;
    
    /**
     * @var string|null $userPrincipalName User Principal Name.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new windowsAutopilotDeviceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsAutopilotDeviceIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAutopilotDeviceIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAutopilotDeviceIdentity {
        return new WindowsAutopilotDeviceIdentity();
    }

    /**
     * Gets the addressableUserName property value. Addressable user name.
     * @return string|null
    */
    public function getAddressableUserName(): ?string {
        return $this->addressableUserName;
    }

    /**
     * Gets the azureActiveDirectoryDeviceId property value. AAD Device ID - to be deprecated
     * @return string|null
    */
    public function getAzureActiveDirectoryDeviceId(): ?string {
        return $this->azureActiveDirectoryDeviceId;
    }

    /**
     * Gets the azureAdDeviceId property value. AAD Device ID
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        return $this->azureAdDeviceId;
    }

    /**
     * Gets the deploymentProfile property value. Deployment profile currently assigned to the Windows autopilot device.
     * @return WindowsAutopilotDeploymentProfile|null
    */
    public function getDeploymentProfile(): ?WindowsAutopilotDeploymentProfile {
        return $this->deploymentProfile;
    }

    /**
     * Gets the deploymentProfileAssignedDateTime property value. Profile set time of the Windows autopilot device.
     * @return DateTime|null
    */
    public function getDeploymentProfileAssignedDateTime(): ?DateTime {
        return $this->deploymentProfileAssignedDateTime;
    }

    /**
     * Gets the deploymentProfileAssignmentDetailedStatus property value. The deploymentProfileAssignmentDetailedStatus property
     * @return WindowsAutopilotProfileAssignmentDetailedStatus|null
    */
    public function getDeploymentProfileAssignmentDetailedStatus(): ?WindowsAutopilotProfileAssignmentDetailedStatus {
        return $this->deploymentProfileAssignmentDetailedStatus;
    }

    /**
     * Gets the deploymentProfileAssignmentStatus property value. The deploymentProfileAssignmentStatus property
     * @return WindowsAutopilotProfileAssignmentStatus|null
    */
    public function getDeploymentProfileAssignmentStatus(): ?WindowsAutopilotProfileAssignmentStatus {
        return $this->deploymentProfileAssignmentStatus;
    }

    /**
     * Gets the deviceAccountPassword property value. Surface Hub Device Account Password
     * @return string|null
    */
    public function getDeviceAccountPassword(): ?string {
        return $this->deviceAccountPassword;
    }

    /**
     * Gets the deviceAccountUpn property value. Surface Hub Device Account Upn
     * @return string|null
    */
    public function getDeviceAccountUpn(): ?string {
        return $this->deviceAccountUpn;
    }

    /**
     * Gets the deviceFriendlyName property value. Surface Hub Device Friendly Name
     * @return string|null
    */
    public function getDeviceFriendlyName(): ?string {
        return $this->deviceFriendlyName;
    }

    /**
     * Gets the displayName property value. Display Name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enrollmentState property value. The enrollmentState property
     * @return EnrollmentState|null
    */
    public function getEnrollmentState(): ?EnrollmentState {
        return $this->enrollmentState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addressableUserName' => fn(ParseNode $n) => $o->setAddressableUserName($n->getStringValue()),
            'azureActiveDirectoryDeviceId' => fn(ParseNode $n) => $o->setAzureActiveDirectoryDeviceId($n->getStringValue()),
            'azureAdDeviceId' => fn(ParseNode $n) => $o->setAzureAdDeviceId($n->getStringValue()),
            'deploymentProfile' => fn(ParseNode $n) => $o->setDeploymentProfile($n->getObjectValue([WindowsAutopilotDeploymentProfile::class, 'createFromDiscriminatorValue'])),
            'deploymentProfileAssignedDateTime' => fn(ParseNode $n) => $o->setDeploymentProfileAssignedDateTime($n->getDateTimeValue()),
            'deploymentProfileAssignmentDetailedStatus' => fn(ParseNode $n) => $o->setDeploymentProfileAssignmentDetailedStatus($n->getEnumValue(WindowsAutopilotProfileAssignmentDetailedStatus::class)),
            'deploymentProfileAssignmentStatus' => fn(ParseNode $n) => $o->setDeploymentProfileAssignmentStatus($n->getEnumValue(WindowsAutopilotProfileAssignmentStatus::class)),
            'deviceAccountPassword' => fn(ParseNode $n) => $o->setDeviceAccountPassword($n->getStringValue()),
            'deviceAccountUpn' => fn(ParseNode $n) => $o->setDeviceAccountUpn($n->getStringValue()),
            'deviceFriendlyName' => fn(ParseNode $n) => $o->setDeviceFriendlyName($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrollmentState' => fn(ParseNode $n) => $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)),
            'groupTag' => fn(ParseNode $n) => $o->setGroupTag($n->getStringValue()),
            'intendedDeploymentProfile' => fn(ParseNode $n) => $o->setIntendedDeploymentProfile($n->getObjectValue([WindowsAutopilotDeploymentProfile::class, 'createFromDiscriminatorValue'])),
            'lastContactedDateTime' => fn(ParseNode $n) => $o->setLastContactedDateTime($n->getDateTimeValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'productKey' => fn(ParseNode $n) => $o->setProductKey($n->getStringValue()),
            'purchaseOrderIdentifier' => fn(ParseNode $n) => $o->setPurchaseOrderIdentifier($n->getStringValue()),
            'remediationState' => fn(ParseNode $n) => $o->setRemediationState($n->getEnumValue(WindowsAutopilotDeviceRemediationState::class)),
            'remediationStateLastModifiedDateTime' => fn(ParseNode $n) => $o->setRemediationStateLastModifiedDateTime($n->getDateTimeValue()),
            'resourceName' => fn(ParseNode $n) => $o->setResourceName($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'skuNumber' => fn(ParseNode $n) => $o->setSkuNumber($n->getStringValue()),
            'systemFamily' => fn(ParseNode $n) => $o->setSystemFamily($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupTag property value. Group Tag of the Windows autopilot device.
     * @return string|null
    */
    public function getGroupTag(): ?string {
        return $this->groupTag;
    }

    /**
     * Gets the intendedDeploymentProfile property value. Deployment profile intended to be assigned to the Windows autopilot device.
     * @return WindowsAutopilotDeploymentProfile|null
    */
    public function getIntendedDeploymentProfile(): ?WindowsAutopilotDeploymentProfile {
        return $this->intendedDeploymentProfile;
    }

    /**
     * Gets the lastContactedDateTime property value. Intune Last Contacted Date Time of the Windows autopilot device.
     * @return DateTime|null
    */
    public function getLastContactedDateTime(): ?DateTime {
        return $this->lastContactedDateTime;
    }

    /**
     * Gets the managedDeviceId property value. Managed Device ID
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the manufacturer property value. Oem manufacturer of the Windows autopilot device.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. Model name of the Windows autopilot device.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the productKey property value. Product Key of the Windows autopilot device.
     * @return string|null
    */
    public function getProductKey(): ?string {
        return $this->productKey;
    }

    /**
     * Gets the purchaseOrderIdentifier property value. Purchase Order Identifier of the Windows autopilot device.
     * @return string|null
    */
    public function getPurchaseOrderIdentifier(): ?string {
        return $this->purchaseOrderIdentifier;
    }

    /**
     * Gets the remediationState property value. Device remediation status, indicating whether or not hardware has been changed for an Autopilot-registered device.
     * @return WindowsAutopilotDeviceRemediationState|null
    */
    public function getRemediationState(): ?WindowsAutopilotDeviceRemediationState {
        return $this->remediationState;
    }

    /**
     * Gets the remediationStateLastModifiedDateTime property value. RemediationState set time of Autopilot device.
     * @return DateTime|null
    */
    public function getRemediationStateLastModifiedDateTime(): ?DateTime {
        return $this->remediationStateLastModifiedDateTime;
    }

    /**
     * Gets the resourceName property value. Resource Name.
     * @return string|null
    */
    public function getResourceName(): ?string {
        return $this->resourceName;
    }

    /**
     * Gets the serialNumber property value. Serial number of the Windows autopilot device.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the skuNumber property value. SKU Number
     * @return string|null
    */
    public function getSkuNumber(): ?string {
        return $this->skuNumber;
    }

    /**
     * Gets the systemFamily property value. System Family
     * @return string|null
    */
    public function getSystemFamily(): ?string {
        return $this->systemFamily;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('addressableUserName', $this->addressableUserName);
        $writer->writeStringValue('azureActiveDirectoryDeviceId', $this->azureActiveDirectoryDeviceId);
        $writer->writeStringValue('azureAdDeviceId', $this->azureAdDeviceId);
        $writer->writeObjectValue('deploymentProfile', $this->deploymentProfile);
        $writer->writeDateTimeValue('deploymentProfileAssignedDateTime', $this->deploymentProfileAssignedDateTime);
        $writer->writeEnumValue('deploymentProfileAssignmentDetailedStatus', $this->deploymentProfileAssignmentDetailedStatus);
        $writer->writeEnumValue('deploymentProfileAssignmentStatus', $this->deploymentProfileAssignmentStatus);
        $writer->writeStringValue('deviceAccountPassword', $this->deviceAccountPassword);
        $writer->writeStringValue('deviceAccountUpn', $this->deviceAccountUpn);
        $writer->writeStringValue('deviceFriendlyName', $this->deviceFriendlyName);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('enrollmentState', $this->enrollmentState);
        $writer->writeStringValue('groupTag', $this->groupTag);
        $writer->writeObjectValue('intendedDeploymentProfile', $this->intendedDeploymentProfile);
        $writer->writeDateTimeValue('lastContactedDateTime', $this->lastContactedDateTime);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('productKey', $this->productKey);
        $writer->writeStringValue('purchaseOrderIdentifier', $this->purchaseOrderIdentifier);
        $writer->writeEnumValue('remediationState', $this->remediationState);
        $writer->writeDateTimeValue('remediationStateLastModifiedDateTime', $this->remediationStateLastModifiedDateTime);
        $writer->writeStringValue('resourceName', $this->resourceName);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
        $writer->writeStringValue('skuNumber', $this->skuNumber);
        $writer->writeStringValue('systemFamily', $this->systemFamily);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the addressableUserName property value. Addressable user name.
     *  @param string|null $value Value to set for the addressableUserName property.
    */
    public function setAddressableUserName(?string $value ): void {
        $this->addressableUserName = $value;
    }

    /**
     * Sets the azureActiveDirectoryDeviceId property value. AAD Device ID - to be deprecated
     *  @param string|null $value Value to set for the azureActiveDirectoryDeviceId property.
    */
    public function setAzureActiveDirectoryDeviceId(?string $value ): void {
        $this->azureActiveDirectoryDeviceId = $value;
    }

    /**
     * Sets the azureAdDeviceId property value. AAD Device ID
     *  @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value ): void {
        $this->azureAdDeviceId = $value;
    }

    /**
     * Sets the deploymentProfile property value. Deployment profile currently assigned to the Windows autopilot device.
     *  @param WindowsAutopilotDeploymentProfile|null $value Value to set for the deploymentProfile property.
    */
    public function setDeploymentProfile(?WindowsAutopilotDeploymentProfile $value ): void {
        $this->deploymentProfile = $value;
    }

    /**
     * Sets the deploymentProfileAssignedDateTime property value. Profile set time of the Windows autopilot device.
     *  @param DateTime|null $value Value to set for the deploymentProfileAssignedDateTime property.
    */
    public function setDeploymentProfileAssignedDateTime(?DateTime $value ): void {
        $this->deploymentProfileAssignedDateTime = $value;
    }

    /**
     * Sets the deploymentProfileAssignmentDetailedStatus property value. The deploymentProfileAssignmentDetailedStatus property
     *  @param WindowsAutopilotProfileAssignmentDetailedStatus|null $value Value to set for the deploymentProfileAssignmentDetailedStatus property.
    */
    public function setDeploymentProfileAssignmentDetailedStatus(?WindowsAutopilotProfileAssignmentDetailedStatus $value ): void {
        $this->deploymentProfileAssignmentDetailedStatus = $value;
    }

    /**
     * Sets the deploymentProfileAssignmentStatus property value. The deploymentProfileAssignmentStatus property
     *  @param WindowsAutopilotProfileAssignmentStatus|null $value Value to set for the deploymentProfileAssignmentStatus property.
    */
    public function setDeploymentProfileAssignmentStatus(?WindowsAutopilotProfileAssignmentStatus $value ): void {
        $this->deploymentProfileAssignmentStatus = $value;
    }

    /**
     * Sets the deviceAccountPassword property value. Surface Hub Device Account Password
     *  @param string|null $value Value to set for the deviceAccountPassword property.
    */
    public function setDeviceAccountPassword(?string $value ): void {
        $this->deviceAccountPassword = $value;
    }

    /**
     * Sets the deviceAccountUpn property value. Surface Hub Device Account Upn
     *  @param string|null $value Value to set for the deviceAccountUpn property.
    */
    public function setDeviceAccountUpn(?string $value ): void {
        $this->deviceAccountUpn = $value;
    }

    /**
     * Sets the deviceFriendlyName property value. Surface Hub Device Friendly Name
     *  @param string|null $value Value to set for the deviceFriendlyName property.
    */
    public function setDeviceFriendlyName(?string $value ): void {
        $this->deviceFriendlyName = $value;
    }

    /**
     * Sets the displayName property value. Display Name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enrollmentState property value. The enrollmentState property
     *  @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value ): void {
        $this->enrollmentState = $value;
    }

    /**
     * Sets the groupTag property value. Group Tag of the Windows autopilot device.
     *  @param string|null $value Value to set for the groupTag property.
    */
    public function setGroupTag(?string $value ): void {
        $this->groupTag = $value;
    }

    /**
     * Sets the intendedDeploymentProfile property value. Deployment profile intended to be assigned to the Windows autopilot device.
     *  @param WindowsAutopilotDeploymentProfile|null $value Value to set for the intendedDeploymentProfile property.
    */
    public function setIntendedDeploymentProfile(?WindowsAutopilotDeploymentProfile $value ): void {
        $this->intendedDeploymentProfile = $value;
    }

    /**
     * Sets the lastContactedDateTime property value. Intune Last Contacted Date Time of the Windows autopilot device.
     *  @param DateTime|null $value Value to set for the lastContactedDateTime property.
    */
    public function setLastContactedDateTime(?DateTime $value ): void {
        $this->lastContactedDateTime = $value;
    }

    /**
     * Sets the managedDeviceId property value. Managed Device ID
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the manufacturer property value. Oem manufacturer of the Windows autopilot device.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. Model name of the Windows autopilot device.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the productKey property value. Product Key of the Windows autopilot device.
     *  @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value ): void {
        $this->productKey = $value;
    }

    /**
     * Sets the purchaseOrderIdentifier property value. Purchase Order Identifier of the Windows autopilot device.
     *  @param string|null $value Value to set for the purchaseOrderIdentifier property.
    */
    public function setPurchaseOrderIdentifier(?string $value ): void {
        $this->purchaseOrderIdentifier = $value;
    }

    /**
     * Sets the remediationState property value. Device remediation status, indicating whether or not hardware has been changed for an Autopilot-registered device.
     *  @param WindowsAutopilotDeviceRemediationState|null $value Value to set for the remediationState property.
    */
    public function setRemediationState(?WindowsAutopilotDeviceRemediationState $value ): void {
        $this->remediationState = $value;
    }

    /**
     * Sets the remediationStateLastModifiedDateTime property value. RemediationState set time of Autopilot device.
     *  @param DateTime|null $value Value to set for the remediationStateLastModifiedDateTime property.
    */
    public function setRemediationStateLastModifiedDateTime(?DateTime $value ): void {
        $this->remediationStateLastModifiedDateTime = $value;
    }

    /**
     * Sets the resourceName property value. Resource Name.
     *  @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value ): void {
        $this->resourceName = $value;
    }

    /**
     * Sets the serialNumber property value. Serial number of the Windows autopilot device.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

    /**
     * Sets the skuNumber property value. SKU Number
     *  @param string|null $value Value to set for the skuNumber property.
    */
    public function setSkuNumber(?string $value ): void {
        $this->skuNumber = $value;
    }

    /**
     * Sets the systemFamily property value. System Family
     *  @param string|null $value Value to set for the systemFamily property.
    */
    public function setSystemFamily(?string $value ): void {
        $this->systemFamily = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
