<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RestrictedAppsViolation extends Entity implements Parsable 
{
    /**
     * Instantiates a new RestrictedAppsViolation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestrictedAppsViolation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestrictedAppsViolation {
        return new RestrictedAppsViolation();
    }

    /**
     * Gets the deviceConfigurationId property value. Device configuration profile unique identifier, must be Guid
     * @return string|null
    */
    public function getDeviceConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('deviceConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationId'");
    }

    /**
     * Gets the deviceConfigurationName property value. Device configuration profile name
     * @return string|null
    */
    public function getDeviceConfigurationName(): ?string {
        $val = $this->getBackingStore()->get('deviceConfigurationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationName'");
    }

    /**
     * Gets the deviceName property value. Device name
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceConfigurationId' => fn(ParseNode $n) => $o->setDeviceConfigurationId($n->getStringValue()),
            'deviceConfigurationName' => fn(ParseNode $n) => $o->setDeviceConfigurationName($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'platformType' => fn(ParseNode $n) => $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)),
            'restrictedApps' => fn(ParseNode $n) => $o->setRestrictedApps($n->getCollectionOfObjectValues([ManagedDeviceReportedApp::class, 'createFromDiscriminatorValue'])),
            'restrictedAppsState' => fn(ParseNode $n) => $o->setRestrictedAppsState($n->getEnumValue(RestrictedAppsState::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedDeviceId property value. Managed device unique identifier, must be Guid
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
     * Gets the platformType property value. Supported platform types for policies.
     * @return PolicyPlatformType|null
    */
    public function getPlatformType(): ?PolicyPlatformType {
        $val = $this->getBackingStore()->get('platformType');
        if (is_null($val) || $val instanceof PolicyPlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platformType'");
    }

    /**
     * Gets the restrictedApps property value. List of violated restricted apps
     * @return array<ManagedDeviceReportedApp>|null
    */
    public function getRestrictedApps(): ?array {
        $val = $this->getBackingStore()->get('restrictedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceReportedApp::class);
            /** @var array<ManagedDeviceReportedApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictedApps'");
    }

    /**
     * Gets the restrictedAppsState property value. Restricted apps state
     * @return RestrictedAppsState|null
    */
    public function getRestrictedAppsState(): ?RestrictedAppsState {
        $val = $this->getBackingStore()->get('restrictedAppsState');
        if (is_null($val) || $val instanceof RestrictedAppsState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictedAppsState'");
    }

    /**
     * Gets the userId property value. User unique identifier, must be Guid
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
     * Gets the userName property value. User name
     * @return string|null
    */
    public function getUserName(): ?string {
        $val = $this->getBackingStore()->get('userName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceConfigurationId', $this->getDeviceConfigurationId());
        $writer->writeStringValue('deviceConfigurationName', $this->getDeviceConfigurationName());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeEnumValue('platformType', $this->getPlatformType());
        $writer->writeCollectionOfObjectValues('restrictedApps', $this->getRestrictedApps());
        $writer->writeEnumValue('restrictedAppsState', $this->getRestrictedAppsState());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the deviceConfigurationId property value. Device configuration profile unique identifier, must be Guid
     * @param string|null $value Value to set for the deviceConfigurationId property.
    */
    public function setDeviceConfigurationId(?string $value): void {
        $this->getBackingStore()->set('deviceConfigurationId', $value);
    }

    /**
     * Sets the deviceConfigurationName property value. Device configuration profile name
     * @param string|null $value Value to set for the deviceConfigurationName property.
    */
    public function setDeviceConfigurationName(?string $value): void {
        $this->getBackingStore()->set('deviceConfigurationName', $value);
    }

    /**
     * Sets the deviceName property value. Device name
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the managedDeviceId property value. Managed device unique identifier, must be Guid
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the platformType property value. Supported platform types for policies.
     * @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value): void {
        $this->getBackingStore()->set('platformType', $value);
    }

    /**
     * Sets the restrictedApps property value. List of violated restricted apps
     * @param array<ManagedDeviceReportedApp>|null $value Value to set for the restrictedApps property.
    */
    public function setRestrictedApps(?array $value): void {
        $this->getBackingStore()->set('restrictedApps', $value);
    }

    /**
     * Sets the restrictedAppsState property value. Restricted apps state
     * @param RestrictedAppsState|null $value Value to set for the restrictedAppsState property.
    */
    public function setRestrictedAppsState(?RestrictedAppsState $value): void {
        $this->getBackingStore()->set('restrictedAppsState', $value);
    }

    /**
     * Sets the userId property value. User unique identifier, must be Guid
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userName property value. User name
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
