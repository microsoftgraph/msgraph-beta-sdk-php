<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A security configuration task.
*/
class SecurityConfigurationTask extends DeviceAppManagementTask implements Parsable 
{
    /**
     * Instantiates a new securityConfigurationTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.securityConfigurationTask');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityConfigurationTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityConfigurationTask {
        return new SecurityConfigurationTask();
    }

    /**
     * Gets the applicablePlatform property value. The endpoint security configuration applicable platform.
     * @return EndpointSecurityConfigurationApplicablePlatform|null
    */
    public function getApplicablePlatform(): ?EndpointSecurityConfigurationApplicablePlatform {
        $val = $this->getBackingStore()->get('applicablePlatform');
        if (is_null($val) || $val instanceof EndpointSecurityConfigurationApplicablePlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicablePlatform'");
    }

    /**
     * Gets the endpointSecurityPolicy property value. The endpoint security policy type.
     * @return EndpointSecurityConfigurationType|null
    */
    public function getEndpointSecurityPolicy(): ?EndpointSecurityConfigurationType {
        $val = $this->getBackingStore()->get('endpointSecurityPolicy');
        if (is_null($val) || $val instanceof EndpointSecurityConfigurationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointSecurityPolicy'");
    }

    /**
     * Gets the endpointSecurityPolicyProfile property value. The endpoint security policy profile type.
     * @return EndpointSecurityConfigurationProfileType|null
    */
    public function getEndpointSecurityPolicyProfile(): ?EndpointSecurityConfigurationProfileType {
        $val = $this->getBackingStore()->get('endpointSecurityPolicyProfile');
        if (is_null($val) || $val instanceof EndpointSecurityConfigurationProfileType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointSecurityPolicyProfile'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicablePlatform' => fn(ParseNode $n) => $o->setApplicablePlatform($n->getEnumValue(EndpointSecurityConfigurationApplicablePlatform::class)),
            'endpointSecurityPolicy' => fn(ParseNode $n) => $o->setEndpointSecurityPolicy($n->getEnumValue(EndpointSecurityConfigurationType::class)),
            'endpointSecurityPolicyProfile' => fn(ParseNode $n) => $o->setEndpointSecurityPolicyProfile($n->getEnumValue(EndpointSecurityConfigurationProfileType::class)),
            'insights' => fn(ParseNode $n) => $o->setInsights($n->getStringValue()),
            'intendedSettings' => fn(ParseNode $n) => $o->setIntendedSettings($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'managedDeviceCount' => fn(ParseNode $n) => $o->setManagedDeviceCount($n->getIntegerValue()),
            'managedDevices' => fn(ParseNode $n) => $o->setManagedDevices($n->getCollectionOfObjectValues([VulnerableManagedDevice::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the insights property value. Information about the mitigation.
     * @return string|null
    */
    public function getInsights(): ?string {
        $val = $this->getBackingStore()->get('insights');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insights'");
    }

    /**
     * Gets the intendedSettings property value. The intended settings and their values.
     * @return array<KeyValuePair>|null
    */
    public function getIntendedSettings(): ?array {
        $val = $this->getBackingStore()->get('intendedSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intendedSettings'");
    }

    /**
     * Gets the managedDeviceCount property value. The number of vulnerable devices. Valid values 0 to 65536
     * @return int|null
    */
    public function getManagedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('managedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceCount'");
    }

    /**
     * Gets the managedDevices property value. The vulnerable managed devices.
     * @return array<VulnerableManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        $val = $this->getBackingStore()->get('managedDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VulnerableManagedDevice::class);
            /** @var array<VulnerableManagedDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDevices'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicablePlatform', $this->getApplicablePlatform());
        $writer->writeEnumValue('endpointSecurityPolicy', $this->getEndpointSecurityPolicy());
        $writer->writeEnumValue('endpointSecurityPolicyProfile', $this->getEndpointSecurityPolicyProfile());
        $writer->writeStringValue('insights', $this->getInsights());
        $writer->writeCollectionOfObjectValues('intendedSettings', $this->getIntendedSettings());
        $writer->writeIntegerValue('managedDeviceCount', $this->getManagedDeviceCount());
        $writer->writeCollectionOfObjectValues('managedDevices', $this->getManagedDevices());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the applicablePlatform property value. The endpoint security configuration applicable platform.
     * @param EndpointSecurityConfigurationApplicablePlatform|null $value Value to set for the applicablePlatform property.
    */
    public function setApplicablePlatform(?EndpointSecurityConfigurationApplicablePlatform $value): void {
        $this->getBackingStore()->set('applicablePlatform', $value);
    }

    /**
     * Sets the endpointSecurityPolicy property value. The endpoint security policy type.
     * @param EndpointSecurityConfigurationType|null $value Value to set for the endpointSecurityPolicy property.
    */
    public function setEndpointSecurityPolicy(?EndpointSecurityConfigurationType $value): void {
        $this->getBackingStore()->set('endpointSecurityPolicy', $value);
    }

    /**
     * Sets the endpointSecurityPolicyProfile property value. The endpoint security policy profile type.
     * @param EndpointSecurityConfigurationProfileType|null $value Value to set for the endpointSecurityPolicyProfile property.
    */
    public function setEndpointSecurityPolicyProfile(?EndpointSecurityConfigurationProfileType $value): void {
        $this->getBackingStore()->set('endpointSecurityPolicyProfile', $value);
    }

    /**
     * Sets the insights property value. Information about the mitigation.
     * @param string|null $value Value to set for the insights property.
    */
    public function setInsights(?string $value): void {
        $this->getBackingStore()->set('insights', $value);
    }

    /**
     * Sets the intendedSettings property value. The intended settings and their values.
     * @param array<KeyValuePair>|null $value Value to set for the intendedSettings property.
    */
    public function setIntendedSettings(?array $value): void {
        $this->getBackingStore()->set('intendedSettings', $value);
    }

    /**
     * Sets the managedDeviceCount property value. The number of vulnerable devices. Valid values 0 to 65536
     * @param int|null $value Value to set for the managedDeviceCount property.
    */
    public function setManagedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('managedDeviceCount', $value);
    }

    /**
     * Sets the managedDevices property value. The vulnerable managed devices.
     * @param array<VulnerableManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value): void {
        $this->getBackingStore()->set('managedDevices', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
