<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDomainJoinConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $activeDirectoryDomainName Active Directory domain name to join.
    */
    private ?string $activeDirectoryDomainName = null;
    
    /**
     * @var string|null $computerNameStaticPrefix Fixed prefix to be used for computer name.
    */
    private ?string $computerNameStaticPrefix = null;
    
    /**
     * @var int|null $computerNameSuffixRandomCharCount Dynamically generated characters used as suffix for computer name. Valid values 3 to 14
    */
    private ?int $computerNameSuffixRandomCharCount = null;
    
    /**
     * @var array<DeviceConfiguration>|null $networkAccessConfigurations Reference to device configurations required for network connectivity
    */
    private ?array $networkAccessConfigurations = null;
    
    /**
     * @var string|null $organizationalUnit Organizational unit (OU) where the computer account will be created. If this parameter is NULL, the well known computer object container will be used as published in the domain.
    */
    private ?string $organizationalUnit = null;
    
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
        return $this->activeDirectoryDomainName;
    }

    /**
     * Gets the computerNameStaticPrefix property value. Fixed prefix to be used for computer name.
     * @return string|null
    */
    public function getComputerNameStaticPrefix(): ?string {
        return $this->computerNameStaticPrefix;
    }

    /**
     * Gets the computerNameSuffixRandomCharCount property value. Dynamically generated characters used as suffix for computer name. Valid values 3 to 14
     * @return int|null
    */
    public function getComputerNameSuffixRandomCharCount(): ?int {
        return $this->computerNameSuffixRandomCharCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDirectoryDomainName' => function (ParseNode $n) use ($o) { $o->setActiveDirectoryDomainName($n->getStringValue()); },
            'computerNameStaticPrefix' => function (ParseNode $n) use ($o) { $o->setComputerNameStaticPrefix($n->getStringValue()); },
            'computerNameSuffixRandomCharCount' => function (ParseNode $n) use ($o) { $o->setComputerNameSuffixRandomCharCount($n->getIntegerValue()); },
            'networkAccessConfigurations' => function (ParseNode $n) use ($o) { $o->setNetworkAccessConfigurations($n->getCollectionOfObjectValues(array(DeviceConfiguration::class, 'createFromDiscriminatorValue'))); },
            'organizationalUnit' => function (ParseNode $n) use ($o) { $o->setOrganizationalUnit($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the networkAccessConfigurations property value. Reference to device configurations required for network connectivity
     * @return array<DeviceConfiguration>|null
    */
    public function getNetworkAccessConfigurations(): ?array {
        return $this->networkAccessConfigurations;
    }

    /**
     * Gets the organizationalUnit property value. Organizational unit (OU) where the computer account will be created. If this parameter is NULL, the well known computer object container will be used as published in the domain.
     * @return string|null
    */
    public function getOrganizationalUnit(): ?string {
        return $this->organizationalUnit;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activeDirectoryDomainName', $this->activeDirectoryDomainName);
        $writer->writeStringValue('computerNameStaticPrefix', $this->computerNameStaticPrefix);
        $writer->writeIntegerValue('computerNameSuffixRandomCharCount', $this->computerNameSuffixRandomCharCount);
        $writer->writeCollectionOfObjectValues('networkAccessConfigurations', $this->networkAccessConfigurations);
        $writer->writeStringValue('organizationalUnit', $this->organizationalUnit);
    }

    /**
     * Sets the activeDirectoryDomainName property value. Active Directory domain name to join.
     *  @param string|null $value Value to set for the activeDirectoryDomainName property.
    */
    public function setActiveDirectoryDomainName(?string $value ): void {
        $this->activeDirectoryDomainName = $value;
    }

    /**
     * Sets the computerNameStaticPrefix property value. Fixed prefix to be used for computer name.
     *  @param string|null $value Value to set for the computerNameStaticPrefix property.
    */
    public function setComputerNameStaticPrefix(?string $value ): void {
        $this->computerNameStaticPrefix = $value;
    }

    /**
     * Sets the computerNameSuffixRandomCharCount property value. Dynamically generated characters used as suffix for computer name. Valid values 3 to 14
     *  @param int|null $value Value to set for the computerNameSuffixRandomCharCount property.
    */
    public function setComputerNameSuffixRandomCharCount(?int $value ): void {
        $this->computerNameSuffixRandomCharCount = $value;
    }

    /**
     * Sets the networkAccessConfigurations property value. Reference to device configurations required for network connectivity
     *  @param array<DeviceConfiguration>|null $value Value to set for the networkAccessConfigurations property.
    */
    public function setNetworkAccessConfigurations(?array $value ): void {
        $this->networkAccessConfigurations = $value;
    }

    /**
     * Sets the organizationalUnit property value. Organizational unit (OU) where the computer account will be created. If this parameter is NULL, the well known computer object container will be used as published in the domain.
     *  @param string|null $value Value to set for the organizationalUnit property.
    */
    public function setOrganizationalUnit(?string $value ): void {
        $this->organizationalUnit = $value;
    }

}
