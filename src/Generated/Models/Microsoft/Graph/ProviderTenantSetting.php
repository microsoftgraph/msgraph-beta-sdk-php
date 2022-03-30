<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProviderTenantSetting extends Entity 
{
    /** @var string|null $azureTenantId  */
    private ?string $azureTenantId = null;
    
    /** @var bool|null $enabled  */
    private ?bool $enabled = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $provider  */
    private ?string $provider = null;
    
    /** @var string|null $vendor  */
    private ?string $vendor = null;
    
    /**
     * Instantiates a new providerTenantSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderTenantSetting
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ProviderTenantSetting {
        return new ProviderTenantSetting();
    }

    /**
     * Gets the azureTenantId property value. 
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the enabled property value. 
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'azureTenantId' => function (self $o, ParseNode $n) { $o->setAzureTenantId($n->getStringValue()); },
            'enabled' => function (self $o, ParseNode $n) { $o->setEnabled($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'provider' => function (self $o, ParseNode $n) { $o->setProvider($n->getStringValue()); },
            'vendor' => function (self $o, ParseNode $n) { $o->setVendor($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the provider property value. 
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the vendor property value. 
     * @return string|null
    */
    public function getVendor(): ?string {
        return $this->vendor;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('provider', $this->provider);
        $writer->writeStringValue('vendor', $this->vendor);
    }

    /**
     * Sets the azureTenantId property value. 
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the enabled property value. 
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the provider property value. 
     *  @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value ): void {
        $this->provider = $value;
    }

    /**
     * Sets the vendor property value. 
     *  @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value ): void {
        $this->vendor = $value;
    }

}
