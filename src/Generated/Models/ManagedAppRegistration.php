<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppRegistration extends Entity implements Parsable 
{
    /**
     * @var MobileAppIdentifier|null $appIdentifier The app package Identifier
    */
    private ?MobileAppIdentifier $appIdentifier = null;
    
    /**
     * @var string|null $applicationVersion App version
    */
    private ?string $applicationVersion = null;
    
    /**
     * @var array<ManagedAppPolicy>|null $appliedPolicies Zero or more policys already applied on the registered app when it last synchronized with managment service.
    */
    private ?array $appliedPolicies = null;
    
    /**
     * @var string|null $azureADDeviceId The Azure Active Directory Device identifier of the host device. Value could be empty even when the host device is Azure Active Directory registered.
    */
    private ?string $azureADDeviceId = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time of creation
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $deviceManufacturer The device manufacturer for the current app registration
    */
    private ?string $deviceManufacturer = null;
    
    /**
     * @var string|null $deviceModel The device model for the current app registration
    */
    private ?string $deviceModel = null;
    
    /**
     * @var string|null $deviceName Host device name
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $deviceTag App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
    */
    private ?string $deviceTag = null;
    
    /**
     * @var string|null $deviceType Host device type
    */
    private ?string $deviceType = null;
    
    /**
     * @var array<string>|null $flaggedReasons Zero or more reasons an app registration is flagged. E.g. app running on rooted device
    */
    private ?array $flaggedReasons = null;
    
    /**
     * @var array<ManagedAppPolicy>|null $intendedPolicies Zero or more policies admin intended for the app as of now.
    */
    private ?array $intendedPolicies = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Date and time of last the app synced with management service.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $managedDeviceId The Managed Device identifier of the host device. Value could be empty even when the host device is managed.
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $managementSdkVersion App management SDK version
    */
    private ?string $managementSdkVersion = null;
    
    /**
     * @var array<ManagedAppOperation>|null $operations Zero or more long running operations triggered on the app registration.
    */
    private ?array $operations = null;
    
    /**
     * @var string|null $platformVersion Operating System version
    */
    private ?string $platformVersion = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $userId The user Id to who this app registration belongs.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $version Version of the entity.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new ManagedAppRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppRegistration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidManagedAppRegistration': return new AndroidManagedAppRegistration();
                case '#microsoft.graph.iosManagedAppRegistration': return new IosManagedAppRegistration();
            }
        }
        return new ManagedAppRegistration();
    }

    /**
     * Gets the appIdentifier property value. The app package Identifier
     * @return MobileAppIdentifier|null
    */
    public function getAppIdentifier(): ?MobileAppIdentifier {
        return $this->appIdentifier;
    }

    /**
     * Gets the applicationVersion property value. App version
     * @return string|null
    */
    public function getApplicationVersion(): ?string {
        return $this->applicationVersion;
    }

    /**
     * Gets the appliedPolicies property value. Zero or more policys already applied on the registered app when it last synchronized with managment service.
     * @return array<ManagedAppPolicy>|null
    */
    public function getAppliedPolicies(): ?array {
        return $this->appliedPolicies;
    }

    /**
     * Gets the azureADDeviceId property value. The Azure Active Directory Device identifier of the host device. Value could be empty even when the host device is Azure Active Directory registered.
     * @return string|null
    */
    public function getAzureADDeviceId(): ?string {
        return $this->azureADDeviceId;
    }

    /**
     * Gets the createdDateTime property value. Date and time of creation
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deviceManufacturer property value. The device manufacturer for the current app registration
     * @return string|null
    */
    public function getDeviceManufacturer(): ?string {
        return $this->deviceManufacturer;
    }

    /**
     * Gets the deviceModel property value. The device model for the current app registration
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->deviceModel;
    }

    /**
     * Gets the deviceName property value. Host device name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceTag property value. App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
     * @return string|null
    */
    public function getDeviceTag(): ?string {
        return $this->deviceTag;
    }

    /**
     * Gets the deviceType property value. Host device type
     * @return string|null
    */
    public function getDeviceType(): ?string {
        return $this->deviceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appIdentifier' => function (ParseNode $n) use ($o) { $o->setAppIdentifier($n->getObjectValue(array(MobileAppIdentifier::class, 'createFromDiscriminatorValue'))); },
            'applicationVersion' => function (ParseNode $n) use ($o) { $o->setApplicationVersion($n->getStringValue()); },
            'appliedPolicies' => function (ParseNode $n) use ($o) { $o->setAppliedPolicies($n->getCollectionOfObjectValues(array(ManagedAppPolicy::class, 'createFromDiscriminatorValue'))); },
            'azureADDeviceId' => function (ParseNode $n) use ($o) { $o->setAzureADDeviceId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deviceManufacturer' => function (ParseNode $n) use ($o) { $o->setDeviceManufacturer($n->getStringValue()); },
            'deviceModel' => function (ParseNode $n) use ($o) { $o->setDeviceModel($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'deviceTag' => function (ParseNode $n) use ($o) { $o->setDeviceTag($n->getStringValue()); },
            'deviceType' => function (ParseNode $n) use ($o) { $o->setDeviceType($n->getStringValue()); },
            'flaggedReasons' => function (ParseNode $n) use ($o) { $o->setFlaggedReasons($n->getCollectionOfPrimitiveValues()); },
            'intendedPolicies' => function (ParseNode $n) use ($o) { $o->setIntendedPolicies($n->getCollectionOfObjectValues(array(ManagedAppPolicy::class, 'createFromDiscriminatorValue'))); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
            'managementSdkVersion' => function (ParseNode $n) use ($o) { $o->setManagementSdkVersion($n->getStringValue()); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(ManagedAppOperation::class, 'createFromDiscriminatorValue'))); },
            'platformVersion' => function (ParseNode $n) use ($o) { $o->setPlatformVersion($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the flaggedReasons property value. Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     * @return array<string>|null
    */
    public function getFlaggedReasons(): ?array {
        return $this->flaggedReasons;
    }

    /**
     * Gets the intendedPolicies property value. Zero or more policies admin intended for the app as of now.
     * @return array<ManagedAppPolicy>|null
    */
    public function getIntendedPolicies(): ?array {
        return $this->intendedPolicies;
    }

    /**
     * Gets the lastSyncDateTime property value. Date and time of last the app synced with management service.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the managedDeviceId property value. The Managed Device identifier of the host device. Value could be empty even when the host device is managed.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the managementSdkVersion property value. App management SDK version
     * @return string|null
    */
    public function getManagementSdkVersion(): ?string {
        return $this->managementSdkVersion;
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the operations property value. Zero or more long running operations triggered on the app registration.
     * @return array<ManagedAppOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the platformVersion property value. Operating System version
     * @return string|null
    */
    public function getPlatformVersion(): ?string {
        return $this->platformVersion;
    }

    /**
     * Gets the userId property value. The user Id to who this app registration belongs.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the version property value. Version of the entity.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appIdentifier', $this->appIdentifier);
        $writer->writeStringValue('applicationVersion', $this->applicationVersion);
        $writer->writeCollectionOfObjectValues('appliedPolicies', $this->appliedPolicies);
        $writer->writeStringValue('azureADDeviceId', $this->azureADDeviceId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('deviceManufacturer', $this->deviceManufacturer);
        $writer->writeStringValue('deviceModel', $this->deviceModel);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('deviceTag', $this->deviceTag);
        $writer->writeStringValue('deviceType', $this->deviceType);
        $writer->writeCollectionOfPrimitiveValues('flaggedReasons', $this->flaggedReasons);
        $writer->writeCollectionOfObjectValues('intendedPolicies', $this->intendedPolicies);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('managementSdkVersion', $this->managementSdkVersion);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeStringValue('platformVersion', $this->platformVersion);
        $writer->writeStringValue('@odata.type', $this->type);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the appIdentifier property value. The app package Identifier
     *  @param MobileAppIdentifier|null $value Value to set for the appIdentifier property.
    */
    public function setAppIdentifier(?MobileAppIdentifier $value ): void {
        $this->appIdentifier = $value;
    }

    /**
     * Sets the applicationVersion property value. App version
     *  @param string|null $value Value to set for the applicationVersion property.
    */
    public function setApplicationVersion(?string $value ): void {
        $this->applicationVersion = $value;
    }

    /**
     * Sets the appliedPolicies property value. Zero or more policys already applied on the registered app when it last synchronized with managment service.
     *  @param array<ManagedAppPolicy>|null $value Value to set for the appliedPolicies property.
    */
    public function setAppliedPolicies(?array $value ): void {
        $this->appliedPolicies = $value;
    }

    /**
     * Sets the azureADDeviceId property value. The Azure Active Directory Device identifier of the host device. Value could be empty even when the host device is Azure Active Directory registered.
     *  @param string|null $value Value to set for the azureADDeviceId property.
    */
    public function setAzureADDeviceId(?string $value ): void {
        $this->azureADDeviceId = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time of creation
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deviceManufacturer property value. The device manufacturer for the current app registration
     *  @param string|null $value Value to set for the deviceManufacturer property.
    */
    public function setDeviceManufacturer(?string $value ): void {
        $this->deviceManufacturer = $value;
    }

    /**
     * Sets the deviceModel property value. The device model for the current app registration
     *  @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value ): void {
        $this->deviceModel = $value;
    }

    /**
     * Sets the deviceName property value. Host device name
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the deviceTag property value. App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
     *  @param string|null $value Value to set for the deviceTag property.
    */
    public function setDeviceTag(?string $value ): void {
        $this->deviceTag = $value;
    }

    /**
     * Sets the deviceType property value. Host device type
     *  @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the flaggedReasons property value. Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     *  @param array<string>|null $value Value to set for the flaggedReasons property.
    */
    public function setFlaggedReasons(?array $value ): void {
        $this->flaggedReasons = $value;
    }

    /**
     * Sets the intendedPolicies property value. Zero or more policies admin intended for the app as of now.
     *  @param array<ManagedAppPolicy>|null $value Value to set for the intendedPolicies property.
    */
    public function setIntendedPolicies(?array $value ): void {
        $this->intendedPolicies = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Date and time of last the app synced with management service.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the managedDeviceId property value. The Managed Device identifier of the host device. Value could be empty even when the host device is managed.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the managementSdkVersion property value. App management SDK version
     *  @param string|null $value Value to set for the managementSdkVersion property.
    */
    public function setManagementSdkVersion(?string $value ): void {
        $this->managementSdkVersion = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the operations property value. Zero or more long running operations triggered on the app registration.
     *  @param array<ManagedAppOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the platformVersion property value. Operating System version
     *  @param string|null $value Value to set for the platformVersion property.
    */
    public function setPlatformVersion(?string $value ): void {
        $this->platformVersion = $value;
    }

    /**
     * Sets the userId property value. The user Id to who this app registration belongs.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the version property value. Version of the entity.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
