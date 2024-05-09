<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomClaim extends CustomClaimBase implements Parsable 
{
    /**
     * Instantiates a new CustomClaim and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customClaim');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomClaim
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomClaim {
        return new CustomClaim();
    }

    /**
     * Gets the namespace property value. The namespace property
     * @return string|null
    */
    public function getEscapedNamespace(): ?string {
        $val = $this->getBackingStore()->get('escapedNamespace');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedNamespace'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'namespace' => fn(ParseNode $n) => $o->setEscapedNamespace($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'samlAttributeNameFormat' => fn(ParseNode $n) => $o->setSamlAttributeNameFormat($n->getEnumValue(SamlAttributeNameFormat::class)),
            'tokenFormat' => fn(ParseNode $n) => $o->setTokenFormat($n->getCollectionOfEnumValues(TokenFormat::class)),
        ]);
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the samlAttributeNameFormat property value. The samlAttributeNameFormat property
     * @return SamlAttributeNameFormat|null
    */
    public function getSamlAttributeNameFormat(): ?SamlAttributeNameFormat {
        $val = $this->getBackingStore()->get('samlAttributeNameFormat');
        if (is_null($val) || $val instanceof SamlAttributeNameFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'samlAttributeNameFormat'");
    }

    /**
     * Gets the tokenFormat property value. The tokenFormat property
     * @return array<TokenFormat>|null
    */
    public function getTokenFormat(): ?array {
        $val = $this->getBackingStore()->get('tokenFormat');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TokenFormat::class);
            /** @var array<TokenFormat>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenFormat'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('namespace', $this->getEscapedNamespace());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('samlAttributeNameFormat', $this->getSamlAttributeNameFormat());
        $writer->writeCollectionOfEnumValues('tokenFormat', $this->getTokenFormat());
    }

    /**
     * Sets the namespace property value. The namespace property
     * @param string|null $value Value to set for the namespace property.
    */
    public function setEscapedNamespace(?string $value): void {
        $this->getBackingStore()->set('escapedNamespace', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the samlAttributeNameFormat property value. The samlAttributeNameFormat property
     * @param SamlAttributeNameFormat|null $value Value to set for the samlAttributeNameFormat property.
    */
    public function setSamlAttributeNameFormat(?SamlAttributeNameFormat $value): void {
        $this->getBackingStore()->set('samlAttributeNameFormat', $value);
    }

    /**
     * Sets the tokenFormat property value. The tokenFormat property
     * @param array<TokenFormat>|null $value Value to set for the tokenFormat property.
    */
    public function setTokenFormat(?array $value): void {
        $this->getBackingStore()->set('tokenFormat', $value);
    }

}
