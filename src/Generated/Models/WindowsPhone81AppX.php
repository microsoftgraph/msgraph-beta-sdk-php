<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPhone81AppX extends MobileLobApp implements Parsable 
{
    /**
     * @var WindowsArchitecture|null $applicableArchitectures The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
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
     * @var WindowsMinimumOperatingSystem|null $minimumSupportedOperatingSystem The minimum operating system required for a Windows mobile app.
    */
    private ?WindowsMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $phoneProductIdentifier The Phone Product Identifier.
    */
    private ?string $phoneProductIdentifier = null;
    
    /**
     * @var string|null $phonePublisherId The Phone Publisher Id.
    */
    private ?string $phonePublisherId = null;
    
    /**
     * Instantiates a new WindowsPhone81AppX and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhone81AppX
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhone81AppX {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsPhone81AppXBundle': return new WindowsPhone81AppXBundle();
            }
        }
        return new WindowsPhone81AppX();
    }

    /**
     * Gets the applicableArchitectures property value. The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
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
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            'phoneProductIdentifier' => function (ParseNode $n) use ($o) { $o->setPhoneProductIdentifier($n->getStringValue()); },
            'phonePublisherId' => function (ParseNode $n) use ($o) { $o->setPhonePublisherId($n->getStringValue()); },
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
     * Gets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the phoneProductIdentifier property value. The Phone Product Identifier.
     * @return string|null
    */
    public function getPhoneProductIdentifier(): ?string {
        return $this->phoneProductIdentifier;
    }

    /**
     * Gets the phonePublisherId property value. The Phone Publisher Id.
     * @return string|null
    */
    public function getPhonePublisherId(): ?string {
        return $this->phonePublisherId;
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
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('phoneProductIdentifier', $this->phoneProductIdentifier);
        $writer->writeStringValue('phonePublisherId', $this->phonePublisherId);
    }

    /**
     * Sets the applicableArchitectures property value. The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
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
     * Sets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     *  @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the phoneProductIdentifier property value. The Phone Product Identifier.
     *  @param string|null $value Value to set for the phoneProductIdentifier property.
    */
    public function setPhoneProductIdentifier(?string $value ): void {
        $this->phoneProductIdentifier = $value;
    }

    /**
     * Sets the phonePublisherId property value. The Phone Publisher Id.
     *  @param string|null $value Value to set for the phonePublisherId property.
    */
    public function setPhonePublisherId(?string $value ): void {
        $this->phonePublisherId = $value;
    }

}
