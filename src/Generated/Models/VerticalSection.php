<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VerticalSection extends Entity implements Parsable 
{
    /**
     * Instantiates a new verticalSection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerticalSection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerticalSection {
        return new VerticalSection();
    }

    /**
     * Gets the emphasis property value. Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue.
     * @return SectionEmphasisType|null
    */
    public function getEmphasis(): ?SectionEmphasisType {
        $val = $this->getBackingStore()->get('emphasis');
        if (is_null($val) || $val instanceof SectionEmphasisType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emphasis'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emphasis' => fn(ParseNode $n) => $o->setEmphasis($n->getEnumValue(SectionEmphasisType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'webparts' => fn(ParseNode $n) => $o->setWebparts($n->getCollectionOfObjectValues([WebPart::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the webparts property value. The set of web parts in this section.
     * @return array<WebPart>|null
    */
    public function getWebparts(): ?array {
        $val = $this->getBackingStore()->get('webparts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebPart::class);
            /** @var array<WebPart>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webparts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('emphasis', $this->getEmphasis());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('webparts', $this->getWebparts());
    }

    /**
     * Sets the emphasis property value. Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue.
     * @param SectionEmphasisType|null $value Value to set for the emphasis property.
    */
    public function setEmphasis(?SectionEmphasisType $value): void {
        $this->getBackingStore()->set('emphasis', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the webparts property value. The set of web parts in this section.
     * @param array<WebPart>|null $value Value to set for the webparts property.
    */
    public function setWebparts(?array $value): void {
        $this->getBackingStore()->set('webparts', $value);
    }

}
