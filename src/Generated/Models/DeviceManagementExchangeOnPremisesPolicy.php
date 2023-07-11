<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Singleton entity which represents the Exchange OnPremises policy configured for a tenant.
*/
class DeviceManagementExchangeOnPremisesPolicy extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceManagementExchangeOnPremisesPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementExchangeOnPremisesPolicy {
        return new DeviceManagementExchangeOnPremisesPolicy();
    }

    /**
     * Gets the accessRules property value. The list of device access rules in Exchange. The access rules apply globally to the entire Exchange organization
     * @return array<DeviceManagementExchangeAccessRule>|null
    */
    public function getAccessRules(): ?array {
        $val = $this->getBackingStore()->get('accessRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementExchangeAccessRule::class);
            /** @var array<DeviceManagementExchangeAccessRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessRules'");
    }

    /**
     * Gets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @return OnPremisesConditionalAccessSettings|null
    */
    public function getConditionalAccessSettings(): ?OnPremisesConditionalAccessSettings {
        $val = $this->getBackingStore()->get('conditionalAccessSettings');
        if (is_null($val) || $val instanceof OnPremisesConditionalAccessSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessSettings'");
    }

    /**
     * Gets the defaultAccessLevel property value. Access Level in Exchange.
     * @return DeviceManagementExchangeAccessLevel|null
    */
    public function getDefaultAccessLevel(): ?DeviceManagementExchangeAccessLevel {
        $val = $this->getBackingStore()->get('defaultAccessLevel');
        if (is_null($val) || $val instanceof DeviceManagementExchangeAccessLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultAccessLevel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessRules' => fn(ParseNode $n) => $o->setAccessRules($n->getCollectionOfObjectValues([DeviceManagementExchangeAccessRule::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessSettings' => fn(ParseNode $n) => $o->setConditionalAccessSettings($n->getObjectValue([OnPremisesConditionalAccessSettings::class, 'createFromDiscriminatorValue'])),
            'defaultAccessLevel' => fn(ParseNode $n) => $o->setDefaultAccessLevel($n->getEnumValue(DeviceManagementExchangeAccessLevel::class)),
            'knownDeviceClasses' => fn(ParseNode $n) => $o->setKnownDeviceClasses($n->getCollectionOfObjectValues([DeviceManagementExchangeDeviceClass::class, 'createFromDiscriminatorValue'])),
            'notificationContent' => fn(ParseNode $n) => $o->setNotificationContent($n->getBinaryContent()),
        ]);
    }

    /**
     * Gets the knownDeviceClasses property value. The list of device classes known to Exchange
     * @return array<DeviceManagementExchangeDeviceClass>|null
    */
    public function getKnownDeviceClasses(): ?array {
        $val = $this->getBackingStore()->get('knownDeviceClasses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementExchangeDeviceClass::class);
            /** @var array<DeviceManagementExchangeDeviceClass>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'knownDeviceClasses'");
    }

    /**
     * Gets the notificationContent property value. Notification text that will be sent to users quarantined by this policy. This is UTF8 encoded byte array HTML.
     * @return StreamInterface|null
    */
    public function getNotificationContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('notificationContent');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationContent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessRules', $this->getAccessRules());
        $writer->writeObjectValue('conditionalAccessSettings', $this->getConditionalAccessSettings());
        $writer->writeEnumValue('defaultAccessLevel', $this->getDefaultAccessLevel());
        $writer->writeCollectionOfObjectValues('knownDeviceClasses', $this->getKnownDeviceClasses());
        $writer->writeBinaryContent('notificationContent', $this->getNotificationContent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the accessRules property value. The list of device access rules in Exchange. The access rules apply globally to the entire Exchange organization
     * @param array<DeviceManagementExchangeAccessRule>|null $value Value to set for the accessRules property.
    */
    public function setAccessRules(?array $value): void {
        $this->getBackingStore()->set('accessRules', $value);
    }

    /**
     * Sets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @param OnPremisesConditionalAccessSettings|null $value Value to set for the conditionalAccessSettings property.
    */
    public function setConditionalAccessSettings(?OnPremisesConditionalAccessSettings $value): void {
        $this->getBackingStore()->set('conditionalAccessSettings', $value);
    }

    /**
     * Sets the defaultAccessLevel property value. Access Level in Exchange.
     * @param DeviceManagementExchangeAccessLevel|null $value Value to set for the defaultAccessLevel property.
    */
    public function setDefaultAccessLevel(?DeviceManagementExchangeAccessLevel $value): void {
        $this->getBackingStore()->set('defaultAccessLevel', $value);
    }

    /**
     * Sets the knownDeviceClasses property value. The list of device classes known to Exchange
     * @param array<DeviceManagementExchangeDeviceClass>|null $value Value to set for the knownDeviceClasses property.
    */
    public function setKnownDeviceClasses(?array $value): void {
        $this->getBackingStore()->set('knownDeviceClasses', $value);
    }

    /**
     * Sets the notificationContent property value. Notification text that will be sent to users quarantined by this policy. This is UTF8 encoded byte array HTML.
     * @param StreamInterface|null $value Value to set for the notificationContent property.
    */
    public function setNotificationContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('notificationContent', $value);
    }

}
