<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class DeviceManagementExchangeOnPremisesPolicy extends Entity implements Parsable 
{
    /**
     * @var array<DeviceManagementExchangeAccessRule>|null $accessRules The list of device access rules in Exchange. The access rules apply globally to the entire Exchange organization
    */
    private ?array $accessRules = null;
    
    /**
     * @var OnPremisesConditionalAccessSettings|null $conditionalAccessSettings The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    */
    private ?OnPremisesConditionalAccessSettings $conditionalAccessSettings = null;
    
    /**
     * @var DeviceManagementExchangeAccessLevel|null $defaultAccessLevel Access Level in Exchange.
    */
    private ?DeviceManagementExchangeAccessLevel $defaultAccessLevel = null;
    
    /**
     * @var array<DeviceManagementExchangeDeviceClass>|null $knownDeviceClasses The list of device classes known to Exchange
    */
    private ?array $knownDeviceClasses = null;
    
    /**
     * @var StreamInterface|null $notificationContent Notification text that will be sent to users quarantined by this policy. This is UTF8 encoded byte array HTML.
    */
    private ?StreamInterface $notificationContent = null;
    
    /**
     * Instantiates a new DeviceManagementExchangeOnPremisesPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementExchangeOnPremisesPolicy');
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
        return $this->accessRules;
    }

    /**
     * Gets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @return OnPremisesConditionalAccessSettings|null
    */
    public function getConditionalAccessSettings(): ?OnPremisesConditionalAccessSettings {
        return $this->conditionalAccessSettings;
    }

    /**
     * Gets the defaultAccessLevel property value. Access Level in Exchange.
     * @return DeviceManagementExchangeAccessLevel|null
    */
    public function getDefaultAccessLevel(): ?DeviceManagementExchangeAccessLevel {
        return $this->defaultAccessLevel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessRules' => function (ParseNode $n) use ($o) { $o->setAccessRules($n->getCollectionOfObjectValues(array(DeviceManagementExchangeAccessRule::class, 'createFromDiscriminatorValue'))); },
            'conditionalAccessSettings' => function (ParseNode $n) use ($o) { $o->setConditionalAccessSettings($n->getObjectValue(array(OnPremisesConditionalAccessSettings::class, 'createFromDiscriminatorValue'))); },
            'defaultAccessLevel' => function (ParseNode $n) use ($o) { $o->setDefaultAccessLevel($n->getEnumValue(DeviceManagementExchangeAccessLevel::class)); },
            'knownDeviceClasses' => function (ParseNode $n) use ($o) { $o->setKnownDeviceClasses($n->getCollectionOfObjectValues(array(DeviceManagementExchangeDeviceClass::class, 'createFromDiscriminatorValue'))); },
            'notificationContent' => function (ParseNode $n) use ($o) { $o->setNotificationContent($n->getBinaryContent()); },
        ]);
    }

    /**
     * Gets the knownDeviceClasses property value. The list of device classes known to Exchange
     * @return array<DeviceManagementExchangeDeviceClass>|null
    */
    public function getKnownDeviceClasses(): ?array {
        return $this->knownDeviceClasses;
    }

    /**
     * Gets the notificationContent property value. Notification text that will be sent to users quarantined by this policy. This is UTF8 encoded byte array HTML.
     * @return StreamInterface|null
    */
    public function getNotificationContent(): ?StreamInterface {
        return $this->notificationContent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessRules', $this->accessRules);
        $writer->writeObjectValue('conditionalAccessSettings', $this->conditionalAccessSettings);
        $writer->writeEnumValue('defaultAccessLevel', $this->defaultAccessLevel);
        $writer->writeCollectionOfObjectValues('knownDeviceClasses', $this->knownDeviceClasses);
        $writer->writeBinaryContent('notificationContent', $this->notificationContent);
    }

    /**
     * Sets the accessRules property value. The list of device access rules in Exchange. The access rules apply globally to the entire Exchange organization
     *  @param array<DeviceManagementExchangeAccessRule>|null $value Value to set for the accessRules property.
    */
    public function setAccessRules(?array $value ): void {
        $this->accessRules = $value;
    }

    /**
     * Sets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     *  @param OnPremisesConditionalAccessSettings|null $value Value to set for the conditionalAccessSettings property.
    */
    public function setConditionalAccessSettings(?OnPremisesConditionalAccessSettings $value ): void {
        $this->conditionalAccessSettings = $value;
    }

    /**
     * Sets the defaultAccessLevel property value. Access Level in Exchange.
     *  @param DeviceManagementExchangeAccessLevel|null $value Value to set for the defaultAccessLevel property.
    */
    public function setDefaultAccessLevel(?DeviceManagementExchangeAccessLevel $value ): void {
        $this->defaultAccessLevel = $value;
    }

    /**
     * Sets the knownDeviceClasses property value. The list of device classes known to Exchange
     *  @param array<DeviceManagementExchangeDeviceClass>|null $value Value to set for the knownDeviceClasses property.
    */
    public function setKnownDeviceClasses(?array $value ): void {
        $this->knownDeviceClasses = $value;
    }

    /**
     * Sets the notificationContent property value. Notification text that will be sent to users quarantined by this policy. This is UTF8 encoded byte array HTML.
     *  @param StreamInterface|null $value Value to set for the notificationContent property.
    */
    public function setNotificationContent(?StreamInterface $value ): void {
        $this->notificationContent = $value;
    }

}
