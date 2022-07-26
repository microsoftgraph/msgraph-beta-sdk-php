<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OemWarrantyInformationOnboarding extends Entity implements Parsable 
{
    /**
     * @var bool|null $available Specifies whether warranty API is available. This property is read-only.
    */
    private ?bool $available = null;
    
    /**
     * @var bool|null $enabled Specifies whether warranty query is enabled for given OEM. This property is read-only.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $oemName OEM name. This property is read-only.
    */
    private ?string $oemName = null;
    
    /**
     * Instantiates a new oemWarrantyInformationOnboarding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.oemWarrantyInformationOnboarding');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OemWarrantyInformationOnboarding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OemWarrantyInformationOnboarding {
        return new OemWarrantyInformationOnboarding();
    }

    /**
     * Gets the available property value. Specifies whether warranty API is available. This property is read-only.
     * @return bool|null
    */
    public function getAvailable(): ?bool {
        return $this->available;
    }

    /**
     * Gets the enabled property value. Specifies whether warranty query is enabled for given OEM. This property is read-only.
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
            'available' => function (ParseNode $n) use ($o) { $o->setAvailable($n->getBooleanValue()); },
            'enabled' => function (ParseNode $n) use ($o) { $o->setEnabled($n->getBooleanValue()); },
            'oemName' => function (ParseNode $n) use ($o) { $o->setOemName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the oemName property value. OEM name. This property is read-only.
     * @return string|null
    */
    public function getOemName(): ?string {
        return $this->oemName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('available', $this->available);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeStringValue('oemName', $this->oemName);
    }

    /**
     * Sets the available property value. Specifies whether warranty API is available. This property is read-only.
     *  @param bool|null $value Value to set for the available property.
    */
    public function setAvailable(?bool $value ): void {
        $this->available = $value;
    }

    /**
     * Sets the enabled property value. Specifies whether warranty query is enabled for given OEM. This property is read-only.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the oemName property value. OEM name. This property is read-only.
     *  @param string|null $value Value to set for the oemName property.
    */
    public function setOemName(?string $value ): void {
        $this->oemName = $value;
    }

}
