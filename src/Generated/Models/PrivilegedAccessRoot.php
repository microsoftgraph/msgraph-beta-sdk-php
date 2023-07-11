<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedAccessRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessRoot {
        return new PrivilegedAccessRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([PrivilegedAccessGroup::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the group property value. A group that's governed through Privileged Identity Management (PIM).
     * @return PrivilegedAccessGroup|null
    */
    public function getGroup(): ?PrivilegedAccessGroup {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof PrivilegedAccessGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'group'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the group property value. A group that's governed through Privileged Identity Management (PIM).
     * @param PrivilegedAccessGroup|null $value Value to set for the group property.
    */
    public function setGroup(?PrivilegedAccessGroup $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
