<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An addressable reference to an external resource or keyword, contained only by an investigation session and shared as session context across its agent runs. It does not identify the exact input consumed by an individual run. The referenced resource remains external. Inherited id is server-owned, stable and unique within the containing session. New input ids are persisted GUIDs. Historical immutable input records retain deterministic parent-and-slot GUIDs without rewriting stored business identifiers.
*/
class InvestigationInput extends Entity implements Parsable 
{
    /**
     * Instantiates a new InvestigationInput and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvestigationInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvestigationInput {
        return new InvestigationInput();
    }

    /**
     * Gets the displayName property value. The display name populated by the service when available. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'kind' => fn(ParseNode $n) => $o->setKind($n->getEnumValue(InvestigationInputType::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the kind property value. Kind of external resource identifier or keyword supplied to a playbook.
     * @return InvestigationInputType|null
    */
    public function getKind(): ?InvestigationInputType {
        $val = $this->getBackingStore()->get('kind');
        if (is_null($val) || $val instanceof InvestigationInputType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kind'");
    }

    /**
     * Gets the value property value. The type-specific resource identifier or keyword text. Required when creating a session and immutable afterward.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('kind', $this->getKind());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the displayName property value. The display name populated by the service when available. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the kind property value. Kind of external resource identifier or keyword supplied to a playbook.
     * @param InvestigationInputType|null $value Value to set for the kind property.
    */
    public function setKind(?InvestigationInputType $value): void {
        $this->getBackingStore()->set('kind', $value);
    }

    /**
     * Sets the value property value. The type-specific resource identifier or keyword text. Required when creating a session and immutable afterward.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
