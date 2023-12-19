<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityPolicySettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new sensitivityPolicySettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityPolicySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityPolicySettings {
        return new SensitivityPolicySettings();
    }

    /**
     * Gets the applicableTo property value. The applicableTo property
     * @return SensitivityPolicySettings_applicableTo|null
    */
    public function getApplicableTo(): ?SensitivityPolicySettings_applicableTo {
        $val = $this->getBackingStore()->get('applicableTo');
        if (is_null($val) || $val instanceof SensitivityPolicySettings_applicableTo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableTo'");
    }

    /**
     * Gets the downgradeSensitivityRequiresJustification property value. The downgradeSensitivityRequiresJustification property
     * @return bool|null
    */
    public function getDowngradeSensitivityRequiresJustification(): ?bool {
        $val = $this->getBackingStore()->get('downgradeSensitivityRequiresJustification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'downgradeSensitivityRequiresJustification'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableTo' => fn(ParseNode $n) => $o->setApplicableTo($n->getEnumValue(SensitivityPolicySettings_applicableTo::class)),
            'downgradeSensitivityRequiresJustification' => fn(ParseNode $n) => $o->setDowngradeSensitivityRequiresJustification($n->getBooleanValue()),
            'helpWebUrl' => fn(ParseNode $n) => $o->setHelpWebUrl($n->getStringValue()),
            'isMandatory' => fn(ParseNode $n) => $o->setIsMandatory($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the helpWebUrl property value. The helpWebUrl property
     * @return string|null
    */
    public function getHelpWebUrl(): ?string {
        $val = $this->getBackingStore()->get('helpWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'helpWebUrl'");
    }

    /**
     * Gets the isMandatory property value. The isMandatory property
     * @return bool|null
    */
    public function getIsMandatory(): ?bool {
        $val = $this->getBackingStore()->get('isMandatory');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMandatory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableTo', $this->getApplicableTo());
        $writer->writeBooleanValue('downgradeSensitivityRequiresJustification', $this->getDowngradeSensitivityRequiresJustification());
        $writer->writeStringValue('helpWebUrl', $this->getHelpWebUrl());
        $writer->writeBooleanValue('isMandatory', $this->getIsMandatory());
    }

    /**
     * Sets the applicableTo property value. The applicableTo property
     * @param SensitivityPolicySettings_applicableTo|null $value Value to set for the applicableTo property.
    */
    public function setApplicableTo(?SensitivityPolicySettings_applicableTo $value): void {
        $this->getBackingStore()->set('applicableTo', $value);
    }

    /**
     * Sets the downgradeSensitivityRequiresJustification property value. The downgradeSensitivityRequiresJustification property
     * @param bool|null $value Value to set for the downgradeSensitivityRequiresJustification property.
    */
    public function setDowngradeSensitivityRequiresJustification(?bool $value): void {
        $this->getBackingStore()->set('downgradeSensitivityRequiresJustification', $value);
    }

    /**
     * Sets the helpWebUrl property value. The helpWebUrl property
     * @param string|null $value Value to set for the helpWebUrl property.
    */
    public function setHelpWebUrl(?string $value): void {
        $this->getBackingStore()->set('helpWebUrl', $value);
    }

    /**
     * Sets the isMandatory property value. The isMandatory property
     * @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value): void {
        $this->getBackingStore()->set('isMandatory', $value);
    }

}
