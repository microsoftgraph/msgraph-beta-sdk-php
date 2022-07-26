<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsAppX extends MobileLobApp implements Parsable 
{
    /**
     * @var WindowsArchitecture|null $applicableArchitectures Contains properties for Windows architecture.
    */
    private ?WindowsArchitecture $applicableArchitectures = null;
    
    /**
     * @var string|null $identityName The Identity Name.
    */
    private ?string $identityName = null;
    
    /**
     * @var string|null $identityPublisherHash The Identity Publisher Hash.
    */
    private ?string $identityPublisherHash = null;
    
    /**
     * @var string|null $identityResourceIdentifier The Identity Resource Identifier.
    */
    private ?string $identityResourceIdentifier = null;
    
    /**
     * @var string|null $identityVersion The identity version.
    */
    private ?string $identityVersion = null;
    
    /**
     * @var bool|null $isBundle Whether or not the app is a bundle.
    */
    private ?bool $isBundle = null;
    
    /**
     * @var WindowsMinimumOperatingSystem|null $minimumSupportedOperatingSystem The minimum operating system required for a Windows mobile app.
    */
    private ?WindowsMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * Instantiates a new WindowsAppX and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsAppX');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAppX
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAppX {
        return new WindowsAppX();
    }

    /**
     * Gets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getApplicableArchitectures(): ?WindowsArchitecture {
        return $this->applicableArchitectures;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableArchitectures' => function (ParseNode $n) use ($o) { $o->setApplicableArchitectures($n->getEnumValue(WindowsArchitecture::class)); },
            'identityName' => function (ParseNode $n) use ($o) { $o->setIdentityName($n->getStringValue()); },
            'identityPublisherHash' => function (ParseNode $n) use ($o) { $o->setIdentityPublisherHash($n->getStringValue()); },
            'identityResourceIdentifier' => function (ParseNode $n) use ($o) { $o->setIdentityResourceIdentifier($n->getStringValue()); },
            'identityVersion' => function (ParseNode $n) use ($o) { $o->setIdentityVersion($n->getStringValue()); },
            'isBundle' => function (ParseNode $n) use ($o) { $o->setIsBundle($n->getBooleanValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the identityName property value. The Identity Name.
     * @return string|null
    */
    public function getIdentityName(): ?string {
        return $this->identityName;
    }

    /**
     * Gets the identityPublisherHash property value. The Identity Publisher Hash.
     * @return string|null
    */
    public function getIdentityPublisherHash(): ?string {
        return $this->identityPublisherHash;
    }

    /**
     * Gets the identityResourceIdentifier property value. The Identity Resource Identifier.
     * @return string|null
    */
    public function getIdentityResourceIdentifier(): ?string {
        return $this->identityResourceIdentifier;
    }

    /**
     * Gets the identityVersion property value. The identity version.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        return $this->identityVersion;
    }

    /**
     * Gets the isBundle property value. Whether or not the app is a bundle.
     * @return bool|null
    */
    public function getIsBundle(): ?bool {
        return $this->isBundle;
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableArchitectures', $this->applicableArchitectures);
        $writer->writeStringValue('identityName', $this->identityName);
        $writer->writeStringValue('identityPublisherHash', $this->identityPublisherHash);
        $writer->writeStringValue('identityResourceIdentifier', $this->identityResourceIdentifier);
        $writer->writeStringValue('identityVersion', $this->identityVersion);
        $writer->writeBooleanValue('isBundle', $this->isBundle);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
    }

    /**
     * Sets the applicableArchitectures property value. Contains properties for Windows architecture.
     *  @param WindowsArchitecture|null $value Value to set for the applicableArchitectures property.
    */
    public function setApplicableArchitectures(?WindowsArchitecture $value ): void {
        $this->applicableArchitectures = $value;
    }

    /**
     * Sets the identityName property value. The Identity Name.
     *  @param string|null $value Value to set for the identityName property.
    */
    public function setIdentityName(?string $value ): void {
        $this->identityName = $value;
    }

    /**
     * Sets the identityPublisherHash property value. The Identity Publisher Hash.
     *  @param string|null $value Value to set for the identityPublisherHash property.
    */
    public function setIdentityPublisherHash(?string $value ): void {
        $this->identityPublisherHash = $value;
    }

    /**
     * Sets the identityResourceIdentifier property value. The Identity Resource Identifier.
     *  @param string|null $value Value to set for the identityResourceIdentifier property.
    */
    public function setIdentityResourceIdentifier(?string $value ): void {
        $this->identityResourceIdentifier = $value;
    }

    /**
     * Sets the identityVersion property value. The identity version.
     *  @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value ): void {
        $this->identityVersion = $value;
    }

    /**
     * Sets the isBundle property value. Whether or not the app is a bundle.
     *  @param bool|null $value Value to set for the isBundle property.
    */
    public function setIsBundle(?bool $value ): void {
        $this->isBundle = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     *  @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

}
