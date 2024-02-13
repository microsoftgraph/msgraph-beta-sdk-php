<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Windows Domain Join device configuration.
*/
class WindowsDomainJoinConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsDomainJoinConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsDomainJoinConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDomainJoinConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDomainJoinConfiguration {
        return new WindowsDomainJoinConfiguration();
    }

    /**
     * Gets the activeDirectoryDomainName property value. Active Directory domain name to join.
     * @return string|null
    */
    public function getActiveDirectoryDomainName(): ?string {
        $val = $this->getBackingStore()->get('activeDirectoryDomainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDirectoryDomainName'");
    }

    /**
     * Gets the computerNameStaticPrefix property value. Fixed prefix to be used for computer name.
     * @return string|null
    */
    public function getComputerNameStaticPrefix(): ?string {
        $val = $this->getBackingStore()->get('computerNameStaticPrefix');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'computerNameStaticPrefix'");
    }

    /**
     * Gets the computerNameSuffixRandomCharCount property value. Dynamically generated characters used as suffix for computer name. Valid values 3 to 14
     * @return int|null
    */
    public function getComputerNameSuffixRandomCharCount(): ?int {
        $val = $this->getBackingStore()->get('computerNameSuffixRandomCharCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'computerNameSuffixRandomCharCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDirectoryDomainName' => fn(ParseNode $n) => $o->setActiveDirectoryDomainName($n->getStringValue()),
            'computerNameStaticPrefix' => fn(ParseNode $n) => $o->setComputerNameStaticPrefix($n->getStringValue()),
            'computerNameSuffixRandomCharCount' => fn(ParseNode $n) => $o->setComputerNameSuffixRandomCharCount($n->getIntegerValue()),
            'networkAccessConfigurations' => fn(ParseNode $n) => $o->setNetworkAccessConfigurations($n->getCollectionOfObjectValues([DeviceConfiguration::class, 'createFromDiscriminatorValue'])),
            'organizationalUnit' => fn(ParseNode $n) => $o->setOrganizationalUnit($n->getStringValue()),
        ]);
    }

    /**
     * Gets the networkAccessConfigurations property value. Reference to device configurations required for network connectivity
     * @return array<DeviceConfiguration>|null
    */
    public function getNetworkAccessConfigurations(): ?array {
        $val = $this->getBackingStore()->get('networkAccessConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfiguration::class);
            /** @var array<DeviceConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkAccessConfigurations'");
    }

    /**
     * Gets the organizationalUnit property value. Organizational unit (OU) where the computer account will be created. If this parameter is NULL, the well known computer object container will be used as published in the domain.
     * @return string|null
    */
    public function getOrganizationalUnit(): ?string {
        $val = $this->getBackingStore()->get('organizationalUnit');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationalUnit'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activeDirectoryDomainName', $this->getActiveDirectoryDomainName());
        $writer->writeStringValue('computerNameStaticPrefix', $this->getComputerNameStaticPrefix());
        $writer->writeIntegerValue('computerNameSuffixRandomCharCount', $this->getComputerNameSuffixRandomCharCount());
        $writer->writeCollectionOfObjectValues('networkAccessConfigurations', $this->getNetworkAccessConfigurations());
        $writer->writeStringValue('organizationalUnit', $this->getOrganizationalUnit());
    }

    /**
     * Sets the activeDirectoryDomainName property value. Active Directory domain name to join.
     * @param string|null $value Value to set for the activeDirectoryDomainName property.
    */
    public function setActiveDirectoryDomainName(?string $value): void {
        $this->getBackingStore()->set('activeDirectoryDomainName', $value);
    }

    /**
     * Sets the computerNameStaticPrefix property value. Fixed prefix to be used for computer name.
     * @param string|null $value Value to set for the computerNameStaticPrefix property.
    */
    public function setComputerNameStaticPrefix(?string $value): void {
        $this->getBackingStore()->set('computerNameStaticPrefix', $value);
    }

    /**
     * Sets the computerNameSuffixRandomCharCount property value. Dynamically generated characters used as suffix for computer name. Valid values 3 to 14
     * @param int|null $value Value to set for the computerNameSuffixRandomCharCount property.
    */
    public function setComputerNameSuffixRandomCharCount(?int $value): void {
        $this->getBackingStore()->set('computerNameSuffixRandomCharCount', $value);
    }

    /**
     * Sets the networkAccessConfigurations property value. Reference to device configurations required for network connectivity
     * @param array<DeviceConfiguration>|null $value Value to set for the networkAccessConfigurations property.
    */
    public function setNetworkAccessConfigurations(?array $value): void {
        $this->getBackingStore()->set('networkAccessConfigurations', $value);
    }

    /**
     * Sets the organizationalUnit property value. Organizational unit (OU) where the computer account will be created. If this parameter is NULL, the well known computer object container will be used as published in the domain.
     * @param string|null $value Value to set for the organizationalUnit property.
    */
    public function setOrganizationalUnit(?string $value): void {
        $this->getBackingStore()->set('organizationalUnit', $value);
    }

}
