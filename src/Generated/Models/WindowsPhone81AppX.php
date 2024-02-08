<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for Windows Phone 8.1 AppX Line Of Business apps. Inherits from graph.mobileLobApp. Will be deprecated in February 2023.
*/
class WindowsPhone81AppX extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new WindowsPhone81AppX and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsPhone81AppX');
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
     * Gets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getApplicableArchitectures(): ?WindowsArchitecture {
        $val = $this->getBackingStore()->get('applicableArchitectures');
        if (is_null($val) || $val instanceof WindowsArchitecture) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableArchitectures'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableArchitectures' => fn(ParseNode $n) => $o->setApplicableArchitectures($n->getEnumValue(WindowsArchitecture::class)),
            'identityName' => fn(ParseNode $n) => $o->setIdentityName($n->getStringValue()),
            'identityPublisherHash' => fn(ParseNode $n) => $o->setIdentityPublisherHash($n->getStringValue()),
            'identityResourceIdentifier' => fn(ParseNode $n) => $o->setIdentityResourceIdentifier($n->getStringValue()),
            'identityVersion' => fn(ParseNode $n) => $o->setIdentityVersion($n->getStringValue()),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
            'phoneProductIdentifier' => fn(ParseNode $n) => $o->setPhoneProductIdentifier($n->getStringValue()),
            'phonePublisherId' => fn(ParseNode $n) => $o->setPhonePublisherId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityName property value. The Identity Name.
     * @return string|null
    */
    public function getIdentityName(): ?string {
        $val = $this->getBackingStore()->get('identityName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityName'");
    }

    /**
     * Gets the identityPublisherHash property value. The Identity Publisher Hash.
     * @return string|null
    */
    public function getIdentityPublisherHash(): ?string {
        $val = $this->getBackingStore()->get('identityPublisherHash');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityPublisherHash'");
    }

    /**
     * Gets the identityResourceIdentifier property value. The Identity Resource Identifier.
     * @return string|null
    */
    public function getIdentityResourceIdentifier(): ?string {
        $val = $this->getBackingStore()->get('identityResourceIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityResourceIdentifier'");
    }

    /**
     * Gets the identityVersion property value. The identity version.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        $val = $this->getBackingStore()->get('identityVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityVersion'");
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        $val = $this->getBackingStore()->get('minimumSupportedOperatingSystem');
        if (is_null($val) || $val instanceof WindowsMinimumOperatingSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedOperatingSystem'");
    }

    /**
     * Gets the phoneProductIdentifier property value. The Phone Product Identifier.
     * @return string|null
    */
    public function getPhoneProductIdentifier(): ?string {
        $val = $this->getBackingStore()->get('phoneProductIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneProductIdentifier'");
    }

    /**
     * Gets the phonePublisherId property value. The Phone Publisher Id.
     * @return string|null
    */
    public function getPhonePublisherId(): ?string {
        $val = $this->getBackingStore()->get('phonePublisherId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phonePublisherId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableArchitectures', $this->getApplicableArchitectures());
        $writer->writeStringValue('identityName', $this->getIdentityName());
        $writer->writeStringValue('identityPublisherHash', $this->getIdentityPublisherHash());
        $writer->writeStringValue('identityResourceIdentifier', $this->getIdentityResourceIdentifier());
        $writer->writeStringValue('identityVersion', $this->getIdentityVersion());
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
        $writer->writeStringValue('phoneProductIdentifier', $this->getPhoneProductIdentifier());
        $writer->writeStringValue('phonePublisherId', $this->getPhonePublisherId());
    }

    /**
     * Sets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @param WindowsArchitecture|null $value Value to set for the applicableArchitectures property.
    */
    public function setApplicableArchitectures(?WindowsArchitecture $value): void {
        $this->getBackingStore()->set('applicableArchitectures', $value);
    }

    /**
     * Sets the identityName property value. The Identity Name.
     * @param string|null $value Value to set for the identityName property.
    */
    public function setIdentityName(?string $value): void {
        $this->getBackingStore()->set('identityName', $value);
    }

    /**
     * Sets the identityPublisherHash property value. The Identity Publisher Hash.
     * @param string|null $value Value to set for the identityPublisherHash property.
    */
    public function setIdentityPublisherHash(?string $value): void {
        $this->getBackingStore()->set('identityPublisherHash', $value);
    }

    /**
     * Sets the identityResourceIdentifier property value. The Identity Resource Identifier.
     * @param string|null $value Value to set for the identityResourceIdentifier property.
    */
    public function setIdentityResourceIdentifier(?string $value): void {
        $this->getBackingStore()->set('identityResourceIdentifier', $value);
    }

    /**
     * Sets the identityVersion property value. The identity version.
     * @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value): void {
        $this->getBackingStore()->set('identityVersion', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

    /**
     * Sets the phoneProductIdentifier property value. The Phone Product Identifier.
     * @param string|null $value Value to set for the phoneProductIdentifier property.
    */
    public function setPhoneProductIdentifier(?string $value): void {
        $this->getBackingStore()->set('phoneProductIdentifier', $value);
    }

    /**
     * Sets the phonePublisherId property value. The Phone Publisher Id.
     * @param string|null $value Value to set for the phonePublisherId property.
    */
    public function setPhonePublisherId(?string $value): void {
        $this->getBackingStore()->set('phonePublisherId', $value);
    }

}
