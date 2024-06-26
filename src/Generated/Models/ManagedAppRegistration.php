<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The ManagedAppEntity is the base entity type for all other entity types under app management workflow.
*/
class ManagedAppRegistration extends Entity implements Parsable 
{
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
                case '#microsoft.graph.windowsManagedAppRegistration': return new WindowsManagedAppRegistration();
            }
        }
        return new ManagedAppRegistration();
    }

    /**
     * Gets the appIdentifier property value. The app package Identifier
     * @return MobileAppIdentifier|null
    */
    public function getAppIdentifier(): ?MobileAppIdentifier {
        $val = $this->getBackingStore()->get('appIdentifier');
        if (is_null($val) || $val instanceof MobileAppIdentifier) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appIdentifier'");
    }

    /**
     * Gets the applicationVersion property value. App version
     * @return string|null
    */
    public function getApplicationVersion(): ?string {
        $val = $this->getBackingStore()->get('applicationVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationVersion'");
    }

    /**
     * Gets the appliedPolicies property value. Zero or more policys already applied on the registered app when it last synchronized with managment service.
     * @return array<ManagedAppPolicy>|null
    */
    public function getAppliedPolicies(): ?array {
        $val = $this->getBackingStore()->get('appliedPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppPolicy::class);
            /** @var array<ManagedAppPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedPolicies'");
    }

    /**
     * Gets the azureADDeviceId property value. The Azure Active Directory Device identifier of the host device. Value could be empty even when the host device is Azure Active Directory registered.
     * @return string|null
    */
    public function getAzureADDeviceId(): ?string {
        $val = $this->getBackingStore()->get('azureADDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureADDeviceId'");
    }

    /**
     * Gets the createdDateTime property value. Date and time of creation
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the deviceManufacturer property value. The device manufacturer for the current app registration
     * @return string|null
    */
    public function getDeviceManufacturer(): ?string {
        $val = $this->getBackingStore()->get('deviceManufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManufacturer'");
    }

    /**
     * Gets the deviceModel property value. The device model for the current app registration
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        $val = $this->getBackingStore()->get('deviceModel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceModel'");
    }

    /**
     * Gets the deviceName property value. Host device name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * Gets the deviceTag property value. App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
     * @return string|null
    */
    public function getDeviceTag(): ?string {
        $val = $this->getBackingStore()->get('deviceTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceTag'");
    }

    /**
     * Gets the deviceType property value. Host device type
     * @return string|null
    */
    public function getDeviceType(): ?string {
        $val = $this->getBackingStore()->get('deviceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appIdentifier' => fn(ParseNode $n) => $o->setAppIdentifier($n->getObjectValue([MobileAppIdentifier::class, 'createFromDiscriminatorValue'])),
            'applicationVersion' => fn(ParseNode $n) => $o->setApplicationVersion($n->getStringValue()),
            'appliedPolicies' => fn(ParseNode $n) => $o->setAppliedPolicies($n->getCollectionOfObjectValues([ManagedAppPolicy::class, 'createFromDiscriminatorValue'])),
            'azureADDeviceId' => fn(ParseNode $n) => $o->setAzureADDeviceId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceManufacturer' => fn(ParseNode $n) => $o->setDeviceManufacturer($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceTag' => fn(ParseNode $n) => $o->setDeviceTag($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'flaggedReasons' => fn(ParseNode $n) => $o->setFlaggedReasons($n->getCollectionOfEnumValues(ManagedAppFlaggedReason::class)),
            'intendedPolicies' => fn(ParseNode $n) => $o->setIntendedPolicies($n->getCollectionOfObjectValues([ManagedAppPolicy::class, 'createFromDiscriminatorValue'])),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'managedAppLogCollectionRequests' => fn(ParseNode $n) => $o->setManagedAppLogCollectionRequests($n->getCollectionOfObjectValues([ManagedAppLogCollectionRequest::class, 'createFromDiscriminatorValue'])),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'managementSdkVersion' => fn(ParseNode $n) => $o->setManagementSdkVersion($n->getStringValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([ManagedAppOperation::class, 'createFromDiscriminatorValue'])),
            'platformVersion' => fn(ParseNode $n) => $o->setPlatformVersion($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the flaggedReasons property value. Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     * @return array<ManagedAppFlaggedReason>|null
    */
    public function getFlaggedReasons(): ?array {
        $val = $this->getBackingStore()->get('flaggedReasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppFlaggedReason::class);
            /** @var array<ManagedAppFlaggedReason>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'flaggedReasons'");
    }

    /**
     * Gets the intendedPolicies property value. Zero or more policies admin intended for the app as of now.
     * @return array<ManagedAppPolicy>|null
    */
    public function getIntendedPolicies(): ?array {
        $val = $this->getBackingStore()->get('intendedPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppPolicy::class);
            /** @var array<ManagedAppPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intendedPolicies'");
    }

    /**
     * Gets the lastSyncDateTime property value. Date and time of last the app synced with management service.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the managedAppLogCollectionRequests property value. Zero or more log collection requests triggered for the app.
     * @return array<ManagedAppLogCollectionRequest>|null
    */
    public function getManagedAppLogCollectionRequests(): ?array {
        $val = $this->getBackingStore()->get('managedAppLogCollectionRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppLogCollectionRequest::class);
            /** @var array<ManagedAppLogCollectionRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppLogCollectionRequests'");
    }

    /**
     * Gets the managedDeviceId property value. The Managed Device identifier of the host device. Value could be empty even when the host device is managed.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceId'");
    }

    /**
     * Gets the managementSdkVersion property value. App management SDK version
     * @return string|null
    */
    public function getManagementSdkVersion(): ?string {
        $val = $this->getBackingStore()->get('managementSdkVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementSdkVersion'");
    }

    /**
     * Gets the operations property value. Zero or more long running operations triggered on the app registration.
     * @return array<ManagedAppOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppOperation::class);
            /** @var array<ManagedAppOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the platformVersion property value. Operating System version
     * @return string|null
    */
    public function getPlatformVersion(): ?string {
        $val = $this->getBackingStore()->get('platformVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platformVersion'");
    }

    /**
     * Gets the userId property value. The user Id to who this app registration belongs.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the version property value. Version of the entity.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appIdentifier', $this->getAppIdentifier());
        $writer->writeStringValue('applicationVersion', $this->getApplicationVersion());
        $writer->writeCollectionOfObjectValues('appliedPolicies', $this->getAppliedPolicies());
        $writer->writeStringValue('azureADDeviceId', $this->getAzureADDeviceId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('deviceManufacturer', $this->getDeviceManufacturer());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('deviceTag', $this->getDeviceTag());
        $writer->writeStringValue('deviceType', $this->getDeviceType());
        $writer->writeCollectionOfEnumValues('flaggedReasons', $this->getFlaggedReasons());
        $writer->writeCollectionOfObjectValues('intendedPolicies', $this->getIntendedPolicies());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeCollectionOfObjectValues('managedAppLogCollectionRequests', $this->getManagedAppLogCollectionRequests());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('managementSdkVersion', $this->getManagementSdkVersion());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeStringValue('platformVersion', $this->getPlatformVersion());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the appIdentifier property value. The app package Identifier
     * @param MobileAppIdentifier|null $value Value to set for the appIdentifier property.
    */
    public function setAppIdentifier(?MobileAppIdentifier $value): void {
        $this->getBackingStore()->set('appIdentifier', $value);
    }

    /**
     * Sets the applicationVersion property value. App version
     * @param string|null $value Value to set for the applicationVersion property.
    */
    public function setApplicationVersion(?string $value): void {
        $this->getBackingStore()->set('applicationVersion', $value);
    }

    /**
     * Sets the appliedPolicies property value. Zero or more policys already applied on the registered app when it last synchronized with managment service.
     * @param array<ManagedAppPolicy>|null $value Value to set for the appliedPolicies property.
    */
    public function setAppliedPolicies(?array $value): void {
        $this->getBackingStore()->set('appliedPolicies', $value);
    }

    /**
     * Sets the azureADDeviceId property value. The Azure Active Directory Device identifier of the host device. Value could be empty even when the host device is Azure Active Directory registered.
     * @param string|null $value Value to set for the azureADDeviceId property.
    */
    public function setAzureADDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureADDeviceId', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time of creation
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deviceManufacturer property value. The device manufacturer for the current app registration
     * @param string|null $value Value to set for the deviceManufacturer property.
    */
    public function setDeviceManufacturer(?string $value): void {
        $this->getBackingStore()->set('deviceManufacturer', $value);
    }

    /**
     * Sets the deviceModel property value. The device model for the current app registration
     * @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->getBackingStore()->set('deviceModel', $value);
    }

    /**
     * Sets the deviceName property value. Host device name
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceTag property value. App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
     * @param string|null $value Value to set for the deviceTag property.
    */
    public function setDeviceTag(?string $value): void {
        $this->getBackingStore()->set('deviceTag', $value);
    }

    /**
     * Sets the deviceType property value. Host device type
     * @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the flaggedReasons property value. Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     * @param array<ManagedAppFlaggedReason>|null $value Value to set for the flaggedReasons property.
    */
    public function setFlaggedReasons(?array $value): void {
        $this->getBackingStore()->set('flaggedReasons', $value);
    }

    /**
     * Sets the intendedPolicies property value. Zero or more policies admin intended for the app as of now.
     * @param array<ManagedAppPolicy>|null $value Value to set for the intendedPolicies property.
    */
    public function setIntendedPolicies(?array $value): void {
        $this->getBackingStore()->set('intendedPolicies', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Date and time of last the app synced with management service.
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the managedAppLogCollectionRequests property value. Zero or more log collection requests triggered for the app.
     * @param array<ManagedAppLogCollectionRequest>|null $value Value to set for the managedAppLogCollectionRequests property.
    */
    public function setManagedAppLogCollectionRequests(?array $value): void {
        $this->getBackingStore()->set('managedAppLogCollectionRequests', $value);
    }

    /**
     * Sets the managedDeviceId property value. The Managed Device identifier of the host device. Value could be empty even when the host device is managed.
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the managementSdkVersion property value. App management SDK version
     * @param string|null $value Value to set for the managementSdkVersion property.
    */
    public function setManagementSdkVersion(?string $value): void {
        $this->getBackingStore()->set('managementSdkVersion', $value);
    }

    /**
     * Sets the operations property value. Zero or more long running operations triggered on the app registration.
     * @param array<ManagedAppOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the platformVersion property value. Operating System version
     * @param string|null $value Value to set for the platformVersion property.
    */
    public function setPlatformVersion(?string $value): void {
        $this->getBackingStore()->set('platformVersion', $value);
    }

    /**
     * Sets the userId property value. The user Id to who this app registration belongs.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the version property value. Version of the entity.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
