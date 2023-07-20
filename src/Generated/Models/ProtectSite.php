<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProtectSite extends LabelActionBase implements Parsable 
{
    /**
     * Instantiates a new protectSite and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.protectSite');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProtectSite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProtectSite {
        return new ProtectSite();
    }

    /**
     * Gets the accessType property value. The accessType property
     * @return SiteAccessType|null
    */
    public function getAccessType(): ?SiteAccessType {
        $val = $this->getBackingStore()->get('accessType');
        if (is_null($val) || $val instanceof SiteAccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessType'");
    }

    /**
     * Gets the conditionalAccessProtectionLevelId property value. The conditionalAccessProtectionLevelId property
     * @return string|null
    */
    public function getConditionalAccessProtectionLevelId(): ?string {
        $val = $this->getBackingStore()->get('conditionalAccessProtectionLevelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessProtectionLevelId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessType' => fn(ParseNode $n) => $o->setAccessType($n->getEnumValue(SiteAccessType::class)),
            'conditionalAccessProtectionLevelId' => fn(ParseNode $n) => $o->setConditionalAccessProtectionLevelId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessType', $this->getAccessType());
        $writer->writeStringValue('conditionalAccessProtectionLevelId', $this->getConditionalAccessProtectionLevelId());
    }

    /**
     * Sets the accessType property value. The accessType property
     * @param SiteAccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?SiteAccessType $value): void {
        $this->getBackingStore()->set('accessType', $value);
    }

    /**
     * Sets the conditionalAccessProtectionLevelId property value. The conditionalAccessProtectionLevelId property
     * @param string|null $value Value to set for the conditionalAccessProtectionLevelId property.
    */
    public function setConditionalAccessProtectionLevelId(?string $value): void {
        $this->getBackingStore()->set('conditionalAccessProtectionLevelId', $value);
    }

}
