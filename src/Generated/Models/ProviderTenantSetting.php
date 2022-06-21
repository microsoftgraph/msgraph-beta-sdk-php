<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProviderTenantSetting extends Entity implements Parsable 
{
    /**
     * @var string|null $azureTenantId The azureTenantId property
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var bool|null $enabled The enabled property
    */
    private ?bool $enabled = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $provider The provider property
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $vendor The vendor property
    */
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderTenantSetting {
        return new ProviderTenantSetting();
    }

    /**
     * Gets the azureTenantId property value. The azureTenantId property
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the enabled property value. The enabled property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureTenantId' => function (ParseNode $n) use ($o) { $o->setAzureTenantId($n->getStringValue()); },
            'enabled' => function (ParseNode $n) use ($o) { $o->setEnabled($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'provider' => function (ParseNode $n) use ($o) { $o->setProvider($n->getStringValue()); },
            'vendor' => function (ParseNode $n) use ($o) { $o->setVendor($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the provider property value. The provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the vendor property value. The vendor property
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
     * Sets the azureTenantId property value. The azureTenantId property
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the enabled property value. The enabled property
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the provider property value. The provider property
     *  @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value ): void {
        $this->provider = $value;
    }

    /**
     * Sets the vendor property value. The vendor property
     *  @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value ): void {
        $this->vendor = $value;
    }

}
