<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes a supersedence relationship between two mobile apps.
*/
class MobileAppSupersedence extends MobileAppRelationship implements Parsable 
{
    /**
     * Instantiates a new MobileAppSupersedence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppSupersedence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppSupersedence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppSupersedence {
        return new MobileAppSupersedence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'supersededAppCount' => fn(ParseNode $n) => $o->setSupersededAppCount($n->getIntegerValue()),
            'supersedenceType' => fn(ParseNode $n) => $o->setSupersedenceType($n->getEnumValue(MobileAppSupersedenceType::class)),
            'supersedingAppCount' => fn(ParseNode $n) => $o->setSupersedingAppCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the supersededAppCount property value. The total number of apps directly or indirectly superseded by the child app. This property is read-only.
     * @return int|null
    */
    public function getSupersededAppCount(): ?int {
        $val = $this->getBackingStore()->get('supersededAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supersededAppCount'");
    }

    /**
     * Gets the supersedenceType property value. Indicates the supersedence type associated with a relationship between two mobile apps.
     * @return MobileAppSupersedenceType|null
    */
    public function getSupersedenceType(): ?MobileAppSupersedenceType {
        $val = $this->getBackingStore()->get('supersedenceType');
        if (is_null($val) || $val instanceof MobileAppSupersedenceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supersedenceType'");
    }

    /**
     * Gets the supersedingAppCount property value. The total number of apps directly or indirectly superseding the parent app. This property is read-only.
     * @return int|null
    */
    public function getSupersedingAppCount(): ?int {
        $val = $this->getBackingStore()->get('supersedingAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supersedingAppCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('supersedenceType', $this->getSupersedenceType());
    }

    /**
     * Sets the supersededAppCount property value. The total number of apps directly or indirectly superseded by the child app. This property is read-only.
     * @param int|null $value Value to set for the supersededAppCount property.
    */
    public function setSupersededAppCount(?int $value): void {
        $this->getBackingStore()->set('supersededAppCount', $value);
    }

    /**
     * Sets the supersedenceType property value. Indicates the supersedence type associated with a relationship between two mobile apps.
     * @param MobileAppSupersedenceType|null $value Value to set for the supersedenceType property.
    */
    public function setSupersedenceType(?MobileAppSupersedenceType $value): void {
        $this->getBackingStore()->set('supersedenceType', $value);
    }

    /**
     * Sets the supersedingAppCount property value. The total number of apps directly or indirectly superseding the parent app. This property is read-only.
     * @param int|null $value Value to set for the supersedingAppCount property.
    */
    public function setSupersedingAppCount(?int $value): void {
        $this->getBackingStore()->set('supersedingAppCount', $value);
    }

}
