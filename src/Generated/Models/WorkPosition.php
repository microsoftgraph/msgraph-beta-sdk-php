<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkPosition extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new WorkPosition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workPosition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkPosition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkPosition {
        return new WorkPosition();
    }

    /**
     * Gets the categories property value. Categories that the user has associated with this position.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->getBackingStore()->get('categories');
    }

    /**
     * Gets the colleagues property value. Colleagues that are associated with this position.
     * @return array<RelatedPerson>|null
    */
    public function getColleagues(): ?array {
        return $this->getBackingStore()->get('colleagues');
    }

    /**
     * Gets the detail property value. The detail property
     * @return PositionDetail|null
    */
    public function getDetail(): ?PositionDetail {
        return $this->getBackingStore()->get('detail');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfPrimitiveValues()),
            'colleagues' => fn(ParseNode $n) => $o->setColleagues($n->getCollectionOfObjectValues([RelatedPerson::class, 'createFromDiscriminatorValue'])),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getObjectValue([PositionDetail::class, 'createFromDiscriminatorValue'])),
            'isCurrent' => fn(ParseNode $n) => $o->setIsCurrent($n->getBooleanValue()),
            'manager' => fn(ParseNode $n) => $o->setManager($n->getObjectValue([RelatedPerson::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isCurrent property value. Denotes whether or not the position is current.
     * @return bool|null
    */
    public function getIsCurrent(): ?bool {
        return $this->getBackingStore()->get('isCurrent');
    }

    /**
     * Gets the manager property value. Contains detail of the user's manager in this position.
     * @return RelatedPerson|null
    */
    public function getManager(): ?RelatedPerson {
        return $this->getBackingStore()->get('manager');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeCollectionOfObjectValues('colleagues', $this->getColleagues());
        $writer->writeObjectValue('detail', $this->getDetail());
        $writer->writeBooleanValue('isCurrent', $this->getIsCurrent());
        $writer->writeObjectValue('manager', $this->getManager());
    }

    /**
     * Sets the categories property value. Categories that the user has associated with this position.
     * @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the colleagues property value. Colleagues that are associated with this position.
     * @param array<RelatedPerson>|null $value Value to set for the colleagues property.
    */
    public function setColleagues(?array $value): void {
        $this->getBackingStore()->set('colleagues', $value);
    }

    /**
     * Sets the detail property value. The detail property
     * @param PositionDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?PositionDetail $value): void {
        $this->getBackingStore()->set('detail', $value);
    }

    /**
     * Sets the isCurrent property value. Denotes whether or not the position is current.
     * @param bool|null $value Value to set for the isCurrent property.
    */
    public function setIsCurrent(?bool $value): void {
        $this->getBackingStore()->set('isCurrent', $value);
    }

    /**
     * Sets the manager property value. Contains detail of the user's manager in this position.
     * @param RelatedPerson|null $value Value to set for the manager property.
    */
    public function setManager(?RelatedPerson $value): void {
        $this->getBackingStore()->set('manager', $value);
    }

}
