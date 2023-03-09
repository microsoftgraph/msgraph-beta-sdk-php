<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceScope extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsDeviceScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceScope {
        return new UserExperienceAnalyticsDeviceScope();
    }

    /**
     * Gets the createdDateTime property value. Indicates the creation date and time for the custom device scope.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deviceScopeName property value. The name of the user experience analytics device Scope configuration.
     * @return string|null
    */
    public function getDeviceScopeName(): ?string {
        return $this->getBackingStore()->get('deviceScopeName');
    }

    /**
     * Gets the enabled property value. Indicates whether a device scope is enabled or disabled. When TRUE, the device scope is enabled. When FALSE, the device scope is disabled. Default value is FALSE.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->getBackingStore()->get('enabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceScopeName' => fn(ParseNode $n) => $o->setDeviceScopeName($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'isBuiltIn' => fn(ParseNode $n) => $o->setIsBuiltIn($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(DeviceScopeOperator::class)),
            'ownerId' => fn(ParseNode $n) => $o->setOwnerId($n->getStringValue()),
            'parameter' => fn(ParseNode $n) => $o->setParameter($n->getEnumValue(DeviceScopeParameter::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DeviceScopeStatus::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
            'valueObjectId' => fn(ParseNode $n) => $o->setValueObjectId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isBuiltIn property value. Indicates whether the device scope configuration is built-in or custom. When TRUE, the device scope configuration is built-in. When FALSE, the device scope configuration is custom. Default value is FALSE.
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->getBackingStore()->get('isBuiltIn');
    }

    /**
     * Gets the lastModifiedDateTime property value. Indicates the last updated date and time for the custom device scope.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the operator property value. Device scope configuration query operator. Possible values are: equals, notEquals, contains, notContains, greaterThan, lessThan. Default value: equals.
     * @return DeviceScopeOperator|null
    */
    public function getOperator(): ?DeviceScopeOperator {
        return $this->getBackingStore()->get('operator');
    }

    /**
     * Gets the ownerId property value. The unique identifier of the person (admin) who created the device scope configuration.
     * @return string|null
    */
    public function getOwnerId(): ?string {
        return $this->getBackingStore()->get('ownerId');
    }

    /**
     * Gets the parameter property value. Device scope configuration parameter. It will be expend in future to add more parameter. Eg: device scope parameter can be OS version, Disk Type, Device manufacturer, device model or Scope tag. Default value: scopeTag.
     * @return DeviceScopeParameter|null
    */
    public function getParameter(): ?DeviceScopeParameter {
        return $this->getBackingStore()->get('parameter');
    }

    /**
     * Gets the status property value. Indicates the device scope status after the device scope has been enabled. Possible values are: none, computing, insufficientData or completed. Default value is none.
     * @return DeviceScopeStatus|null
    */
    public function getStatus(): ?DeviceScopeStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the value property value. The device scope configuration query clause value.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Gets the valueObjectId property value. The unique identifier for a user device scope tag Id used for the creation of device scope configuration.
     * @return string|null
    */
    public function getValueObjectId(): ?string {
        return $this->getBackingStore()->get('valueObjectId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('deviceScopeName', $this->getDeviceScopeName());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeBooleanValue('isBuiltIn', $this->getIsBuiltIn());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('operator', $this->getOperator());
        $writer->writeStringValue('ownerId', $this->getOwnerId());
        $writer->writeEnumValue('parameter', $this->getParameter());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeStringValue('valueObjectId', $this->getValueObjectId());
    }

    /**
     * Sets the createdDateTime property value. Indicates the creation date and time for the custom device scope.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deviceScopeName property value. The name of the user experience analytics device Scope configuration.
     * @param string|null $value Value to set for the deviceScopeName property.
    */
    public function setDeviceScopeName(?string $value): void {
        $this->getBackingStore()->set('deviceScopeName', $value);
    }

    /**
     * Sets the enabled property value. Indicates whether a device scope is enabled or disabled. When TRUE, the device scope is enabled. When FALSE, the device scope is disabled. Default value is FALSE.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the isBuiltIn property value. Indicates whether the device scope configuration is built-in or custom. When TRUE, the device scope configuration is built-in. When FALSE, the device scope configuration is custom. Default value is FALSE.
     * @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value): void {
        $this->getBackingStore()->set('isBuiltIn', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Indicates the last updated date and time for the custom device scope.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the operator property value. Device scope configuration query operator. Possible values are: equals, notEquals, contains, notContains, greaterThan, lessThan. Default value: equals.
     * @param DeviceScopeOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?DeviceScopeOperator $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the ownerId property value. The unique identifier of the person (admin) who created the device scope configuration.
     * @param string|null $value Value to set for the ownerId property.
    */
    public function setOwnerId(?string $value): void {
        $this->getBackingStore()->set('ownerId', $value);
    }

    /**
     * Sets the parameter property value. Device scope configuration parameter. It will be expend in future to add more parameter. Eg: device scope parameter can be OS version, Disk Type, Device manufacturer, device model or Scope tag. Default value: scopeTag.
     * @param DeviceScopeParameter|null $value Value to set for the parameter property.
    */
    public function setParameter(?DeviceScopeParameter $value): void {
        $this->getBackingStore()->set('parameter', $value);
    }

    /**
     * Sets the status property value. Indicates the device scope status after the device scope has been enabled. Possible values are: none, computing, insufficientData or completed. Default value is none.
     * @param DeviceScopeStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceScopeStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the value property value. The device scope configuration query clause value.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

    /**
     * Sets the valueObjectId property value. The unique identifier for a user device scope tag Id used for the creation of device scope configuration.
     * @param string|null $value Value to set for the valueObjectId property.
    */
    public function setValueObjectId(?string $value): void {
        $this->getBackingStore()->set('valueObjectId', $value);
    }

}
