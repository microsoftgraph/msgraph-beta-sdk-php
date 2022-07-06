<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPhoneXAP extends MobileLobApp implements Parsable 
{
    /**
     * @var string|null $identityVersion The identity version.
    */
    private ?string $identityVersion = null;
    
    /**
     * @var WindowsMinimumOperatingSystem|null $minimumSupportedOperatingSystem The minimum operating system required for a Windows mobile app.
    */
    private ?WindowsMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $productIdentifier The Product Identifier.
    */
    private ?string $productIdentifier = null;
    
    /**
     * Instantiates a new WindowsPhoneXAP and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhoneXAP
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhoneXAP {
        return new WindowsPhoneXAP();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identityVersion' => function (ParseNode $n) use ($o) { $o->setIdentityVersion($n->getStringValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            'productIdentifier' => function (ParseNode $n) use ($o) { $o->setProductIdentifier($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityVersion property value. The identity version.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        return $this->identityVersion;
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the productIdentifier property value. The Product Identifier.
     * @return string|null
    */
    public function getProductIdentifier(): ?string {
        return $this->productIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('identityVersion', $this->identityVersion);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('productIdentifier', $this->productIdentifier);
    }

    /**
     * Sets the identityVersion property value. The identity version.
     *  @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value ): void {
        $this->identityVersion = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     *  @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the productIdentifier property value. The Product Identifier.
     *  @param string|null $value Value to set for the productIdentifier property.
    */
    public function setProductIdentifier(?string $value ): void {
        $this->productIdentifier = $value;
    }

}
