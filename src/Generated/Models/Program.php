<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Program extends Entity implements Parsable 
{
    /**
     * Instantiates a new Program and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Program
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Program {
        return new Program();
    }

    /**
     * Gets the controls property value. Controls associated with the program.
     * @return array<ProgramControl>|null
    */
    public function getControls(): ?array {
        $val = $this->getBackingStore()->get('controls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProgramControl::class);
            /** @var array<ProgramControl>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'controls'");
    }

    /**
     * Gets the description property value. The description of the program.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The name of the program.  Required on create.
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
            'controls' => fn(ParseNode $n) => $o->setControls($n->getCollectionOfObjectValues([ProgramControl::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('controls', $this->getControls());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the controls property value. Controls associated with the program.
     * @param array<ProgramControl>|null $value Value to set for the controls property.
    */
    public function setControls(?array $value): void {
        $this->getBackingStore()->set('controls', $value);
    }

    /**
     * Sets the description property value. The description of the program.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the program.  Required on create.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}
