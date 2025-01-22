<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceTemplate extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new DeviceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceTemplate {
        return new DeviceTemplate();
    }

    /**
     * Gets the deviceAuthority property value. A tenant-defined name for the party that's responsible for provisioning and managing devices on the Microsoft Entra tenant. For example, Tailwind Traders (the manufacturer) makes security cameras that are installed in customer buildings and managed by Lakeshore Retail (the device authority). This value is provided to the customer by the device authority (manufacturer or reseller).
     * @return string|null
    */
    public function getDeviceAuthority(): ?string {
        $val = $this->getBackingStore()->get('deviceAuthority');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceAuthority'");
    }

    /**
     * Gets the deviceInstances property value. Collection of device objects created based on this template.
     * @return array<Device>|null
    */
    public function getDeviceInstances(): ?array {
        $val = $this->getBackingStore()->get('deviceInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Device::class);
            /** @var array<Device>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceInstances'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceAuthority' => fn(ParseNode $n) => $o->setDeviceAuthority($n->getStringValue()),
            'deviceInstances' => fn(ParseNode $n) => $o->setDeviceInstances($n->getCollectionOfObjectValues([Device::class, 'createFromDiscriminatorValue'])),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'mutualTlsOauthConfigurationId' => fn(ParseNode $n) => $o->setMutualTlsOauthConfigurationId($n->getStringValue()),
            'mutualTlsOauthConfigurationTenantId' => fn(ParseNode $n) => $o->setMutualTlsOauthConfigurationTenantId($n->getStringValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'owners' => fn(ParseNode $n) => $o->setOwners($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the manufacturer property value. Manufacturer name.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the model property value. Model name.
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Gets the mutualTlsOauthConfigurationId property value. Object ID of the mutualTlsOauthConfiguration. This value isn't required if self-signed certificates are used. This value is provided to the customer by the device authority (manufacturer or reseller).
     * @return string|null
    */
    public function getMutualTlsOauthConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('mutualTlsOauthConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mutualTlsOauthConfigurationId'");
    }

    /**
     * Gets the mutualTlsOauthConfigurationTenantId property value. ID (tenant ID for device authority) of the tenant that contains the mutualTlsOauthConfiguration. This value isn't required if self-signed certificates are used. This value is provided to the customer by the device authority (manufacturer or reseller).
     * @return string|null
    */
    public function getMutualTlsOauthConfigurationTenantId(): ?string {
        $val = $this->getBackingStore()->get('mutualTlsOauthConfigurationTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mutualTlsOauthConfigurationTenantId'");
    }

    /**
     * Gets the operatingSystem property value. Operating system type. Supports $filter (eq, in).
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('operatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystem'");
    }

    /**
     * Gets the owners property value. Collection of directory objects that can manage the device template and the related deviceInstances. Owners can be represented as service principals, users, or applications. An owner has full privileges over the device template and doesn't require other administrator roles to create, update, or delete devices from this template, as well as to add or remove template owners. There can be a maximum of 100 owners on a device template.  Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        $val = $this->getBackingStore()->get('owners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owners'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceAuthority', $this->getDeviceAuthority());
        $writer->writeCollectionOfObjectValues('deviceInstances', $this->getDeviceInstances());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('mutualTlsOauthConfigurationId', $this->getMutualTlsOauthConfigurationId());
        $writer->writeStringValue('mutualTlsOauthConfigurationTenantId', $this->getMutualTlsOauthConfigurationTenantId());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeCollectionOfObjectValues('owners', $this->getOwners());
    }

    /**
     * Sets the deviceAuthority property value. A tenant-defined name for the party that's responsible for provisioning and managing devices on the Microsoft Entra tenant. For example, Tailwind Traders (the manufacturer) makes security cameras that are installed in customer buildings and managed by Lakeshore Retail (the device authority). This value is provided to the customer by the device authority (manufacturer or reseller).
     * @param string|null $value Value to set for the deviceAuthority property.
    */
    public function setDeviceAuthority(?string $value): void {
        $this->getBackingStore()->set('deviceAuthority', $value);
    }

    /**
     * Sets the deviceInstances property value. Collection of device objects created based on this template.
     * @param array<Device>|null $value Value to set for the deviceInstances property.
    */
    public function setDeviceInstances(?array $value): void {
        $this->getBackingStore()->set('deviceInstances', $value);
    }

    /**
     * Sets the manufacturer property value. Manufacturer name.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. Model name.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the mutualTlsOauthConfigurationId property value. Object ID of the mutualTlsOauthConfiguration. This value isn't required if self-signed certificates are used. This value is provided to the customer by the device authority (manufacturer or reseller).
     * @param string|null $value Value to set for the mutualTlsOauthConfigurationId property.
    */
    public function setMutualTlsOauthConfigurationId(?string $value): void {
        $this->getBackingStore()->set('mutualTlsOauthConfigurationId', $value);
    }

    /**
     * Sets the mutualTlsOauthConfigurationTenantId property value. ID (tenant ID for device authority) of the tenant that contains the mutualTlsOauthConfiguration. This value isn't required if self-signed certificates are used. This value is provided to the customer by the device authority (manufacturer or reseller).
     * @param string|null $value Value to set for the mutualTlsOauthConfigurationTenantId property.
    */
    public function setMutualTlsOauthConfigurationTenantId(?string $value): void {
        $this->getBackingStore()->set('mutualTlsOauthConfigurationTenantId', $value);
    }

    /**
     * Sets the operatingSystem property value. Operating system type. Supports $filter (eq, in).
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the owners property value. Collection of directory objects that can manage the device template and the related deviceInstances. Owners can be represented as service principals, users, or applications. An owner has full privileges over the device template and doesn't require other administrator roles to create, update, or delete devices from this template, as well as to add or remove template owners. There can be a maximum of 100 owners on a device template.  Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value): void {
        $this->getBackingStore()->set('owners', $value);
    }

}
